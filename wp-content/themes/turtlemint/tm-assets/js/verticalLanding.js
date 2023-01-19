(function () {
    var setItemSession = function (vertical, item, value) {
        var lsMap = window.sessionStorage.getItem(vertical);
        var objMap = (lsMap) ? JSON.parse(lsMap) : {};
        objMap[item] = value;
        var stringifiedMap = JSON.stringify(objMap);
        window.sessionStorage.setItem(vertical, stringifiedMap);

    };
    //var base_url = location.protocol + '//' + location.hostname;
    var base_url = location.protocol + '//app.turtlemint.com';

    // clear life session on landing page
    window.sessionStorage.removeItem("life-insurance");
    
    var getVerticalNameFormPageUrl = function () {
        let vertical = '';
        if (location.pathname.indexOf('car') > -1) {
            vertical = 'FW';            
        } else if (location.pathname.indexOf('two-wheeler') > -1) {
            vertical = 'TW'; //previous was tw -> two-wheeler -> tw
        } else if (location.pathname.indexOf('commercial-vehicle') > -1) {
            vertical = 'CV';
        } else if (location.pathname.indexOf('health-insurance') > -1) {
            vertical = 'health';
        } else if (location.pathname.indexOf('life-insurance') > -1) {
            vertical = 'life';
        }
        return vertical;
    }

    /*Cookie Ashish TM 20211227 */
    function setCookie(cname, cvalue, domain, exdays) { var d = new Date(); if (!exdays) { exdays = 1; } d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000)); var expires = "expires=" + d.toUTCString(); document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;Domain=" + domain; }

    /*UTM Manoj 20211227 */
    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    window.onload = function() {var utm_source = getUrlVars()["utm_source"]; var utm_medium = getUrlVars()["utm_medium"]; var utm_campaign = getUrlVars()["utm_campaign"]; var referrer = getUrlVars()["referrer"]; var gclid = getUrlVars()["gclid"]; /*alert(""+author+"Enter your js here!"+a1+"");*/ };

    function addparams(myurl)
    {
        /*var utm_source = getUrlVars()["utm_source"]; var utm_medium = getUrlVars()["utm_medium"]; var utm_campaign = getUrlVars()["utm_campaign"]; var referrer = getUrlVars()["referrer"]; var gclid = getUrlVars()["gclid"]; 
        var regNumber = $('input[name="regno"]').val().toUpperCase();
        var newhref=url+'?utm_source='+utm_source+'&utm_medium='+utm_medium+'&utm_campaign='+utm_campaign+'&referrer='+referrer+'&gclid='+gclid+'&regNumber='+regNumber;
        window.location.href = newhref;*/        
        var regNumber = $('input[name="regno"]').val().toUpperCase();
        var oldhref = myurl;
        oldhref = oldhref.replace("%3F", "?");
        oldhref = oldhref.replace("%3D", "&");
        var utmparams = location.search;
        if(oldhref.indexOf("?") > -1) { /*Yes, so replace*/ utmparams = utmparams.replace("?", "&");  }    
        /*var newhref=obj.getAttribute("href")+location.search;*/
        if(utmparams == ""){
            var newhref = oldhref+utmparams+'?regNumber='+regNumber;
        }
        else{
            var newhref = oldhref+utmparams+'&regNumber='+regNumber;
        }
        newhref = newhref.replace("%3F", "?");
        newhref = newhref.replace("%3D", "&");
        window.location.href = newhref;
    }
    /*----------------------------------*/

    function _goToProfile(vertical, withRegNo) {
        setItemSession(vertical, 'regnoView', withRegNo);
        if (withRegNo) {
            setItemSession(vertical, 'premiumRequest', {});
        }
        switch (vertical) {
            case ('FW'):
                //window.location.href = base_url + '/car-insurance/car-profile';                
                addparams(base_url + '/car-insurance/car-profile');
                break;
            case ('TW'):
                //window.location.href = base_url + '/two-wheeler-insurance/two-wheeler-profile';
                addparams(base_url + '/two-wheeler-insurance/two-wheeler-profile');
                break;
            case ('CV'):
                //window.location.href = '/two-wheeler-insurance/two-wheeler-profile';
                addparams(base_url + '/two-wheeler-insurance/two-wheeler-profile');
                break;
            case ('health'):
                if (getTabAttr === 'buy-new-policy') {
                    //window.location.href = base_url + '/health-insurance/health-profile/profile-gender';
                    addparams(base_url + '/health-insurance/health-profile/profile-gender');
                } else if (getTabAttr === 'existing-policy') {
                    //window.location.href = base_url + '/health-insurance/health-profile/profile-gender';
                    addparams(base_url + '/health-insurance/health-profile/profile-gender');
                } else if (getTabAttr === 'change-insurer') {
                    //window.location.href = base_url + '/health-insurance/health-profile/profile-gender';
                    addparams(base_url + '/health-insurance/health-profile/profile-gender');
                }
                break;
            case ('life'):
                if (getTabAttr === 'term-plan') {
                    //window.location.href = base_url + '/life-insurance/profile/term/about-insured';
                    addparams(base_url + '/life-insurance/profile/term/about-insured');
                } else if (getTabAttr === 'investment-plan') {
                    //window.location.href = base_url + '/life-insurance/profile/investment-planning/about-insured';
                    addparams(base_url + '/life-insurance/profile/investment-planning/about-insured');
                } else if (getTabAttr === 'saving-plan') {
                    //window.location.href = base_url + '/life-insurance/profile/saving-for-child/about-insured';
                    addparams(base_url + '/life-insurance/profile/saving-for-child/about-insured');
                } else if (getTabAttr === 'retirement') {
                    //window.location.href = base_url + '/life-insurance/profile/retirement/about-insured';
                    addparams(base_url + '/life-insurance/profile/retirement/about-insured');
                }
                //window.location.href = base_url + '/life-insurance/profile/term/gender';
                break;
            default: console.log('error');
        }

    }


    function _takeToProfileWithRegistration() {        
        var vertical = getVerticalNameFormPageUrl();
        var regNumber = $('input[name="regno"]').val().toUpperCase();
        //console.log("Vertical: "+vertical+" | Reg:"+regNumber);
        //alert("Vertical: "+vertical+" | Reg:"+regNumber);
        if (!regNumber) {
            $('#errMsg').html('Please enter complete registration number');
            return;
        }
        if (_isValidRegNo(regNumber)) {
            window.localStorage.setItem(vertical + 'registrationNo', regNumber);
            window.sessionStorage.setItem(vertical + 'registrationNo', regNumber);
            /*RegNo Cookie - Ashish TM - 20211227 start */
            setCookie('data', regNumber, '.turtlemint.com', null);

            /*RegNo Cookie - Ashish TM - 20211227 end */
            /*DataLayer 20210325 - start*/
            if(vertical=='FW'){
                //dataLayer.push({'event': 'Registration Info', 'Product': 'Four-Wheeler Insurance', 'Registeration_Number': regNumber, });
            }
            if(vertical=='TW'){
                //dataLayer.push({'event': 'Registration Info', 'Product': 'Two-Wheeler Insurance', 'Registeration_Number': regNumber, });
                
            }
            /*DataLayer 20210325 - end*/
            
            _goToProfile(vertical, true);
        } else {
            /*DataLayer 20210325 - start*/
            if(vertical=='FW'){
                //window.dataLayer = window.dataLayer || [];
                //window.dataLayer.push({'event': 'errorMessage','Error_Message': 'Registration number is incorrect', 'Error_URL': 'https://www.turtlemint.com/car-insurance'});
            }
            if(vertical=='TW'){
                //window.dataLayer = window.dataLayer || [];
                //window.dataLayer.push({'event': 'errorMessage','Error_Message': 'Registration number is incorrect', 'Error_URL': 'https://www.turtlemint.com/two-wheeler-insurance/'});
                
            }
            /*DataLayer 20210325 - end*/
            
            $('#errMsg').html('Enter valid registration number');
        }
    }
    function _isValidRegNo(registrationNo) {
        return /^[A-Za-z]{2}[-]?[0-9]{1,2}[-]?([A-Za-z]{0,3})[-]?[0-9]{4}$/.test(registrationNo);
    }
    $(window).on('load', function () {
        /*$('#yt-src').attr('src', 'https://www.youtube.com/embed/PxEPvi8BiOo?modestbranding=1&amp;rel=0&amp;cc_load_policy=1&amp;iv_load_policy=3&amp;fs=0&amp;controls=0');
        $('#Homevid1-src').attr('src', 'https://www.youtube.com/embed/DwVzpKfCAtM?modestbranding=1&amp;rel=0&amp;cc_load_policy=1&amp;iv_load_policy=3&amp;fs=0&amp;controls=0');
        $('#Homevid2-src').attr('src', 'https://www.youtube.com/embed/KEG9KPke6A8?modestbranding=1&amp;rel=0&amp;cc_load_policy=1&amp;iv_load_policy=3&amp;fs=0&amp;controls=0');
        $('#Homevid3-src').attr('src', 'https://www.youtube.com/embed/xxkP9z-uSi0?modestbranding=1&amp;rel=0&amp;cc_load_policy=1&amp;iv_load_policy=3&amp;fs=0&amp;controls=0');
        $('#quiz-src').attr('src', 'https://www.wikipedia.org/');*/

    });

    $(function () {
        $('#with-regno').on('click', _takeToProfileWithRegistration);
        $('input[name="regno"]').keypress(function (e) {
            if (e.which == 13) {
                _takeToProfileWithRegistration();
            }
        });

        $('#without-reg-link').click(function () {
            var verticalName = getVerticalNameFormPageUrl();
            window.localStorage.setItem(verticalName + 'registrationNo', '');
            window.sessionStorage.setItem(verticalName + 'registrationNo', '');
            setItemSession(verticalName, 'registrationNo', '');
            setItemSession(verticalName, 'premiumRequest', {});
            _goToProfile(verticalName, false);

        });

        // $('#termPlan').on('click', _goToProfilePage);        

        $('.plan-box').on('click', function () {
            var verticalName = getVerticalNameFormPageUrl();
            getTabAttr = $(this).attr('data-url');
            _goToProfile(verticalName, false);
        });

        $('.overlay-bg').hide();
        $('.info-icon').on('click', function (e) {
            e.stopPropagation();
            $('.overlay-bg').show();
            $('.hover-content').addClass('showInfoModel').show();
        });

        $('.overlay-bg').on('click', function () {
            $('.hover-content').removeClass('showInfoModel').hide();
            $(this).hide();
        });
    });

    
    
})();
