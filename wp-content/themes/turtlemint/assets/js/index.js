var initConfig = {
    ratingsTTL :1 * 60 * 60 * 1000, // 1 Hour
    ratingsNameSpace: 'TM-',
    ratingsApi: 'https://api.turtlemint.com/ratings-api',
    ratingsMessage: 'Thanks for your feedback',
};

/**
 * Init Function
 */
(function() {
    //getBlogs(); //20200326 to prevent wp-json error in console

    //Stage API
    if (location.hostname.indexOf('turtlemint.com') === -1) {
        initConfig.ratingsApi = 'https://api.turtlemint.com/ratings-api-stage';
        //initConfig.ratingsApi = 'http://api.turtlemint.com/ratings-api-stage'; //SG fix for CORS 20191001
    } 
})();

$(document).ready(function () {
    // header-section
    $('#commonHeader').load('/wp-content/themes/turtlemint/assets/landing_widgets/common-header.html')
    $('#commonHeader-mobile').load('/wp-content/themes/turtlemint/assets/landing_widgets/mobile-header.html')

    // video-section
    //$('#turtlemintVideoSection').load('/wp-content/themes/turtlemint/assets/landing_widgets/turtlemint-video-section.html');
    // expert-section
    $('#expertSection').load('/wp-content/themes/turtlemint/assets/landing_widgets/expert-section.html');
    // footer-section 
    //$('#footerSection').load('/wp-content/themes/turtlemint/assets/landing_widgets/footer-section.html');

    //paint ratings
    //doRating(true); 20191023 SG causing Console error on Staging
    

    var activeTab = undefined;
    $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');
    $(document).on('mouseenter.bs.tab.data-api', '[data-toggle="tab"], [data-hover="tab"]', function (event) {
        activeTab = event.target.innerText;
    });

    $('.tab-menu-inside a').click(function (event) {

        var eventName = 'mega-menu' + '_' + activeTab + '_' + event.target.innerText;
        dataLayer.push({ 'event': 'mega-menu', 'eventName': eventName, gaCategory: 'megaMenu', gaAction: eventName });
    });

    //Map resize cordinate function
    var image_is_loaded = false;
    $(window).on('load', function () {
        var that = $('#my_image');
        $(that).data('width', $(that).attr('width')).data('height', $(that).attr('height'));
        $($(that).attr('usemap') + ' area').each(function () {
            $(this).data('coords', $(this).attr('coords'));
        });

        $(that).css({width: '100%', height: 'auto'}).show();

        image_is_loaded = true;
        $(window).trigger('resize');
    });

    function ratioCoords(coords, ratio) {
        coord_arr = coords.split(',');
        for (i = 0; i < coord_arr.length; i++) {
            coord_arr[i] = Math.round(ratio * coord_arr[i]);
        }
        return coord_arr.join(',');
    }
    $(window).on('resize', function () {

        if (image_is_loaded) {
            var img = $('#my_image');
            var ratio = img.width() / img.data('width');
            $(img.attr('usemap') + ' area').each(function () {
                $(this).attr('coords', ratioCoords($(this).data('coords'), ratio));
            });
        }
    });
    //End Map resize cordinate function

});

// Modal video code
$(function () {
    $('.modal').on('hidden.bs.modal', function () {
        $iframe = $(this).find('iframe');
        $iframe.attr('src', $iframe.attr('src'));
    });
});

/* -----------Ratings API -----------*/

/**
 * To add a rating for a module
 * @param {Number} rating the rating provided by the user
 * @param {String} moduleName the module for which you need the rating to set
 */
function addRating(rating, moduleName) {
    var deferred = $.Deferred();
    getMachineIP().then((ip) => {
        fetch(initConfig.ratingsApi, {
            method: 'POST',
            headers: {
                'X-Forwarded-For': btoa(ip)
            },
            body: JSON.stringify({
                rating: rating,
                moduleName: moduleName
            })
        })
        .then(response => response.json())
        .then(deferred.resolve, deferred.reject);
    });
    return deferred.promise();
};

/**
 * To get a rating for a module
 * @param {string} moduleName the module for which you need the rating
 * @param {boolean} expand get the details of the votes placed for each stars
 */
function getRating(moduleName, expand){
     return fetch(`${initConfig.ratingsApi}?moduleName=${moduleName}&expand=${expand}`).then(response => response.json());
    // return fetch('${initConfig.ratingsApi}?moduleName=${moduleName}&expand=${expand}',{'mode': 'no-cors'}).then(response => response.json());
}

/**
 * the ui functionality for rating
 * @param {boolean} mode true for get and false for add rating flow
 * @param {Object} payload the payload prepared and passed for addrating
 */
function doRating(mode, payload){
    if(mode){
        //paint stars (get)
        const moduleName = initConfig.ratingsNameSpace + (location.pathname.split('/').pop().split('.')[0] || 'home');
        const existingRating = JSON.parse(localStorage.getItem('rating')) || {};
        let promise = null;
        // Only api read if last read/write is more than TTL or never read
        if(!existingRating[moduleName] || existingRating[moduleName] && (new Date().getTime() - existingRating[moduleName].ts)>initConfig.ratingsTTL){
            promise = getRating(moduleName, false).then(rating => {
                let enable = false;
                if(existingRating[moduleName]){
                    //check if voted, 
                    if(existingRating[moduleName].voted){
                        enable = false;
                    } else {
                        //else assign the fresh api read object to memory
                        existingRating[moduleName] = rating;
                        enable = true;
                    }
                }else {
                    //add this to memory api read since its not there
                    existingRating[moduleName] = rating;
                    enable = true;
                }
                //give a fresh read time
                existingRating[moduleName] = {...existingRating[moduleName], ...{ts: new Date().getTime()}};
                localStorage.setItem('rating', JSON.stringify(existingRating));
                return enable;
            });
        } else {
            // a dummy promise to enable/disable ratings [Educated guess, more at api level]
            promise = new Promise((resolve)=>resolve(!existingRating[moduleName].voted));
        }
        //paint and enable/disable events
        promise.then(enable => {
            let rating = existingRating[moduleName];
            $.get('/common-rating.html').then(function(html){
                $('#rating').html(html);
                $('#rating .rating-value').text(rating.rating);
                $('#rating .rating-count').text(rating.count + ' ' + 'Rating' + (rating.count > 1 ? 's' : ''));
                $('#rating .rating-value-ui').css({width : ((rating.rating*100/5) + '%')});
                const stars = $('#rating .star-ratings-css-bottom span');
                if (enable) {
                    $('#rating .star-ratings-css-bottom').addClass('hot');
                    stars.on('click', function(e){
                        doRating(false, {rating: $(e.target).index()+1, moduleName, existingRating});
                    });
                } else {
                    $('#rating .star-ratings-css-bottom').removeClass('hot');
                    $('#rating .form-heading').text(initConfig.ratingsMessage);
                    stars.off('click');
                }
            });
        });
    }else {
        //add new rating from UI
        const {moduleName, rating, existingRating} = payload;
        $('#rating .star-ratings-css-bottom').removeClass('hot');
        $('#rating .star-ratings-css-bottom span').off('click');
        addRating(rating, moduleName).then((response) => {
            let stars = $('#rating .star-ratings-css-bottom span');
            const message = response && (response.message || response.error);
            if(message){
                $('#rating .rating-message').css({display: 'flex'}).text(message);
                if(message.includes('already rated')){
                    existingRating[moduleName].ts = new Date().getTime();
                    existingRating[moduleName].voted = true;
                    //block multiple add ratings using the voting flag
                }else {
                    //enable ratings in case other error
                    $('#rating .star-ratings-css-bottom').addClass('hot');
                    stars.on('click', function(e){
                        doRating(false, {rating: $(e.target).index()+1, moduleName, existingRating});
                    });
                }
            }else{
                //Success new Rating (calculate new average rating w/o an api call)
                let that = existingRating[moduleName];
                that.rating = ((that.rating * that.count + rating)/(that.count+1)).toFixed(1) * 1;
                that.count++;
                that.ts = new Date().getTime();
                that.voted = true;
                $('#rating .rating-value').text(that.rating);
                $('#rating .rating-count').text(that.count + ' ' + 'Rating' + (that.count>1?'s':''));
                $('#rating .rating-value-ui').css({
                    width: ((that.rating * 100 / 5) + '%')
                });
                $('#rating .form-heading').text(initConfig.ratingsMessage);
            }
            localStorage.setItem('rating', JSON.stringify(existingRating));
        }, ()=> {
            //Error:
            location.reload();
        });
    }
}

//Get the IP addresses associated with an account
//Refer ratings-api in gitlab
function getMachineIP(){return new Promise(function(e){var n=[],i=new(window.RTCPeerConnection||window.webkitRTCPeerConnection||window.mozRTCPeerConnection)({iceServers:[]});i.createDataChannel(""),i.onicecandidate=function(t){if(!t.candidate)return i.close(),void e(n[0]);var c=/^candidate:.+ (\S+) \d+ typ/.exec(t.candidate.candidate)[1];-1==n.indexOf(c)&&n.push(c)},i.createOffer(function(e){i.setLocalDescription(e)},function(){})})}


// End of Ratings code

function leadCallSubmit() {

    var formParam = {
        paidUserName: $('#name').val(),
        paidUserEmail: $('#email').val(),
        paidUserMobile: $('#mobile').val(),
        turtleUserId: getCookieValue('turtleUserId'),
        vertical: getVertical(),
        utmParams: {
            utmSource: 'google',
            utmMedium: 'organic',
            utmCampaign: 'Seo-LP-L'
        }
    };


    if ($('#email').val() == '' && $('#mobile').val() == '' && $('#name').val() == '') {
        $('#msg-here').html('Please Provide Details!').css('color', 'red');
        return;
    }

    var form = document.getElementsByName('expertCall');
    if (form[0].checkValidity()) {

        var leadrequest = new XMLHttpRequest();
        var url = window.location.pathname;
        var eventName = 'Request-call' + '_' + getVertical() + '_' + url.split('/')[1];
        leadrequest.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                var response = JSON.parse(this.responseText);
                dataLayer.push({ 'event': 'mega-menu', 'eventName': eventName, gaCategory: 'megaMenu', gaAction: eventName, url: url.split('/')[1] })
                $('#msg-here').html('Thank for contact us we will get in touch with you soon.').css('color', 'green');
            }
        };
        leadrequest.open('POST', '/api/api/lead/saveuserleadnewfromfe', true);
        leadrequest.setRequestHeader('Content-type', 'application/json');
        leadrequest.send(JSON.stringify(formParam));

        var expertObj = {
            action: 'EXPERT_ADVICE',
            name: $('#name').val(),
            email: $('#email').val(),
            phone: $('#mobile').val(),
            vertical: getVertical(),
            verticalName: getVerticalName(getVertical()),
            utmParams: {
                source: 'google',
                medium: 'organic',
                campaign: 'Seo-LP-L'
            }
        };
        expertCall(expertObj, form)
    }
}

function claimSettlement() {
    if ($('#vertical').checked) {
        rate_value = $('#vertical').value;
    }
    var expertObj = {
        action: 'CLAIMS_ASSISTANCE',
        vertical: document.querySelector('input[name="group"]:checked').value,
        verticalName: getVerticalName(getVertical()),
        phone: $('#mobileNo').val(),
        insurer: $('#insurer').val(),
        policyNo: $('#policyNo').val(),
        comment: $('#comment').val(),
        utmParams: {
            source: 'google',
            medium: 'organic',
            campaign: 'Seo-LP-L',
        }
    };
    var form = document.getElementsByName('raiseClaim');
    expertCall(expertObj, form, true);
}

function expertCall(expertObj, form, isClaim) {

    if (form[0].checkValidity()) {
        //Expert Call
        var expertRequest = new XMLHttpRequest();
        expertRequest.open('POST', '/api/platform/v0/expertadvice', true);
        expertRequest.setRequestHeader('Content-type', 'application/json');
        expertRequest.send(JSON.stringify(expertObj));
        expertRequest.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                form[0].reset();
                $('#msg-here').html('Your request has been submitted, we will get in touch with you soon.').css('color', 'green');
                if (isClaim) {
                    dataLayer.push({ 'event': 'mega-menu', 'eventName': 'Raise-Claim' + '_' + expertObj.vertical, gaCategory: 'megaMenu', gaAction: eventName });
                }

            }
        };
    }
}



function getCookieValue(cookie) {
    var cookieVal = document.cookie.match('(^|;)\\s*' + cookie + '\\s*=\\s*([^;]+)');
    return cookieVal ? cookieVal.pop() : '';
}

function getVertical() {
    var url = window.location.pathname;

    var verticalMap = {
        'car-insurance': 'fw',
        'two-wheeler-insurance': 'tw',
        'health-insurance': 'health',
        'life-insurance': 'life',
    };

    return verticalMap[url.split('/')[1]];
}

function getVerticalName(vertical) {

    var verticalName = {
        fw: 'Car',
        tw: 'Two Wheeler',
        health: 'Health',
        life: 'Life'
    };

    return verticalName[vertical];
}

// Alliance SSO
function createAllianceLead(vertical){
    fetch(`https://${mintproUrl}/api/lead/createlead?vertical=${vertical}&stage=profile&tenant=turtlemint`, {
        headers: {
            Authorization: '5e52a757234751555eb59243b0dac7803b569bfe7209dfb056ba5aee818c9d0314252920616c778e926ad7522ae32d8c'
        },
        method: 'GET',
    }).then(response => response.json())
    .then(data => {
        //console.log(data);
        $(`
            <form method="POST" action="${data.url}" style="display:none;">
                <input type=hidden name="token" value="${data.token}" />
                <input type=hidden name="vertical" value="${vertical}" />
                <input type=hidden name="stage" value="profile" />
                <input type=submit id=formSubmit/>
            </form>
        `).appendTo('body').submit();
    });
}

// Alliance B2C
function redirectToVerticalB2Cflow(vertical,tenant,stage,domain){
    fetch(`https://${domain}/api/v0/b2c/redirect?vertical=${vertical}&stage=${stage}&tenant=${tenant}`, {
        headers: {},
        method: 'GET',
    }).then(response => response.json())
    .then(data => {
        console.log(data);
        if(data.redirectUrl)
            window.location.href=data.redirectUrl;
        else
            console.log("redirectUrl not available");    
    });
    
}

function getBlogs() {
    var relevantBlog = {
        'health': 3,
        'car-insurance': 31,
        'two-wheeler-insurance': 4,
        'non-term-life': 82,
    };

    var category = Object.keys(relevantBlog).find(key => location.pathname.includes(key));

    var url = `https://www.turtlemint.com/blog/wp-json/wp/v2/posts?_embed=true&per_page=3${category ? `&categories=${relevantBlog[category]}` : ''}`;

    $.ajax({
        type: 'GET',
        url: url,
        success: function (res) {

            var blogContemt = '';
            var regex = /(<([^>]+)>)/ig;
            $.each(res, function (i, data) {
                blogContemt += `
                    <div class="col-md-4 col-sm-4 col-xs-12"> 
                        <div class = "blog-cards" >
                            <a href="${data.link}" target="_blank">
                                <img class="blog-image" src = "${data._embedded['wp:featuredmedia'][0]['source_url']}" alt = "${data.title.rendered}" >
                            </a>
                            <div class="blog-txt" >
                                <h4> ${data.title.rendered} </h4> 
                                <p class="paragraph-style">${data.content.rendered.replace(regex, '')}</p> 
                                <a class="link" href ="${data.link}" target="_blank"> Read more <span class = "arrow" > &#8594</span> </a>
                            </div>
                        </div>
                    </div>`;
            });
            //$('.blog-container').html(blogContemt);
        },
        error: console.log
    });

}


$(document).ready(function () {
    $(".single-post .entry-content p").addClass("paragraph-style").addClass("paragraph-text");
    $(".single-post .entry-content li").addClass("li").addClass("paragraph-text");
    $(".single-post .entry-content ul").addClass("list-style");
    $(".single-post .entry-content ol").addClass("list-style");
    $(".single-post .entry-content h3").addClass("h3-text");
    $(".single-post .entry-content h4").addClass("h4-text");
    $("#panels1 > div:nth-child(1) > div.panel-heading > h4 > a").toggleClass("collapsed");
    $("#collapse1").toggleClass("in");
    $(".single-post .entry-content table").addClass("table").addClass("table-insurer").addClass("table-fixed");
    $(".single-post .entry-content table>thead tr").addClass("table-header-bg-color");
    /*For fixing gap due to closing ul just after title*/
    /*$('ul.list-style').filter(function(){ 
      return $(this).children("li")
                    .filter(function(){ return $(this).contents()
                                .filter(function() { return this.nodeType == Node.ELEMENT_NODE || (this.nodeType == Node.TEXT_NODE && !!$.trim(this.nodeValue)) }).length==1 })
                    .filter(function(){ return $(this).children("strong").length == 1 }).length == 1 })
        .addClass("ul-title");*/
    $('ul.list-style > li:only-child > strong:only-child').filter(function() {  return !(this.nextSibling || this.previousSibling);}).parent().parent('ul.list-style').addClass('ul-title');

    $('p.paragraph-style.paragraph-text').filter(function() {  return (this.innerHTML=='&nbsp;' || this.innerHTML==' ') } ).addClass("hidden");
    $('ul.list-style > li:only-child > strong').parent().parent('ul.list-style').addClass('ul-title').addClass("ul-li-strong");
    $('ul.list-style > li:only-child').parent('ul.list-style').addClass("ul-li");


    /*Blog Post*/
    /*$('p.paragraph-text.paragraph-style > strong:only-child')
    .next()
    .filter(function(){ return $(this).contents()
                .filter(function() { return this.nodeType == Node.ELEMENT_NODE || (this.nodeType == Node.TEXT_NODE && !!$.trim(this.nodeValue)) }).length==1 })
    .addClass("mb0");*/
    $('.single-post p.paragraph-text.paragraph-style > strong')
    .parent().next('p.paragraph-text.paragraph-style')
    .addClass("mt0");

    $('.single-post p.paragraph-text.paragraph-style')
    .next('ul.list-style')
    .css( "margin-bottom", "0px" );

    /*if(!$(".single-post ul").hasClass("list-style")){
    this.addClass("list-style");
    }*/
    /*
This is causing issue hasClass - commented on 20200828
    $(".single-post ol")
        .filter(function() { return !(this.hasClass("list-style"));})
        .addClass('list-style');
*/
    $(".single-post ul").removeClass("list-style").addClass("list-style");
    $(".single-post ol").addClass("list-style");



    /*Navigation Desktop*/
    // Simulate a mouse click:

    $(document).on("click", "#nav-a-car", function(){
        window.location.href = "https://www.turtlemint.com/car-insurance/";
    });
    $(document).on("click", "#nav-a-bike", function(){
        window.location.href = "https://www.turtlemint.com/two-wheeler-insurance/";
    });
    $(document).on("click", "#nav-a-health", function(){
        window.location.href = "https://www.turtlemint.com/health-insurance/";
    });
    $(document).on("click", "#nav-a-life", function(){
        window.location.href = "https://www.turtlemint.com/life-insurance/";
    });    
});

/*<!-- *************** Defer Image Load - START ******************* -->*/

  /*function init() {
  var imgDefer = document.querySelectorAll("img.defer");
  for (var i=0; i<imgDefer.length; i++) {
  if(imgDefer[i].getAttribute('data-src')) {
  imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
  } } }
  window.onload = init;*/
  /*$(window).on('load', function() {
    // code here

    var imgDefer = document.querySelectorAll("img.defer");
      for (var i=0; i<imgDefer.length; i++) {
      if(imgDefer[i].getAttribute('data-src')) {
      imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
      } }
  });*/
	document.addEventListener('DOMContentLoaded', function() {
        // your code here
        var imgDefer = document.querySelectorAll("img.defer");
        for (var i=0; i<imgDefer.length; i++) {
			if(imgDefer[i].getAttribute('data-src')) {
			imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
			} 
        }
    }, false);

/*<!-- *************** Defer Image Load - END ******************* -->*/
/*<!-- Hide Chat - START -->*/
  $(window).on('load', function() {
        $('body.single-post .zopim').hide();
    });
/*<!-- Hide Chat - END ******************* -->*/



