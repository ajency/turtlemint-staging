/* dropdown */
function tmSelectDropdown(element) {
  if (!$(element).hasClass("selected") && $(element).hasClass("valueTarget")) {
  }
  $(element).siblings().removeClass("selected");
  $(element).addClass("selected");
  let iconUrl = $(element).data("icon");
  $(element)
    .parents(".tm-select-dropdown")
    .find(".tm-select-value .icon")
    .attr("src", iconUrl);
  $(element)
    .parents(".tm-select-dropdown")
    .find(".tm-select-value .title")
    .text($(element).text());
  $(element)
    .parents(".tm-select-dropdown")
    .find(".tm-select-value")
    .removeClass("placeholder");
}

$(".tm-select-value").click(function () {
  $(this).next(".tm-select-options").slideToggle();
});
$(".tm-select-option").click(function () {
  $(this).parent(".tm-select-options").slideUp();
});

/* popup */
function openPopup(popupId) {
  $("#" + popupId).addClass("show");
}
function closePopup(popupId) {
  $("#" + popupId).removeClass("show");
}

window.addEventListener("DOMContentLoaded", (event) => {
  $(".tm-popup").click(function (e) {
    if (e.target == this) {
      closePopup($(this).attr("id"));
    }
  });
});

/* Skeletons */
// $(document).ready(function(){
//     setTimeout(function(){
//         $('.tm-loading').removeClass('tm-loading');
//     }, 2000);
// });

//rendering script
const DATA = {
"customerDetails": null,
"advisors": [
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 100
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 200
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 300
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 400
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 500
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 600
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 700
    },
    {
    "partnerId": "56cdef",
    "partnerName": "Munna Bhaiya",
    "area": "Andheri West",
    "city": "Mumbai",
    "pinCode": null,
    "yearsOfExperience": 5.0,
    "customersServed": 800
    }
]
}

async function getPincodeLocation(pincode){
    let headersList = {
    "Content-Type": "application/json"
    }
    let response = await fetch("https://f57dcbf8-35f1-49ea-8ed8-3e8e74f6432a.mock.pstmn.io/api/agent-locator/pin-details/"+pincode, { 
        method: "GET",
        headers: headersList
    });
    let data = await response.json();
    console.log(data)
    window.tm_pincode_data = data
    return(data);
}

async function getAdvisorList(lat, long, vertical, offset) {
    let headersList = {
    "Content-Type": "application/json"
    }
    let bodyContent = JSON.stringify({
        "productCategory": vertical,
        "vertical": vertical,
        "latitude": lat,
        "longitude": long
    });
    let response = await fetch("https://f57dcbf8-35f1-49ea-8ed8-3e8e74f6432a.mock.pstmn.io/api/agent-locator/advisors?offset=0&limit=10", { 
        method: "POST",
        body: bodyContent,
        headers: headersList
    });
    let data = await response.json();
    console.log(data)
    //TODO pass data instead of DATA
    renderContent(DATA)
}

function renderContent(data){
    let firstFoldParent = document.getElementById('firstFoldList')
    let lastFoldParent = document.getElementById('lastFoldList');
    let htmlFirstFold = ''
    let htmlLastFold = ''
    console.log(data.advisors.slice(3))
    data.advisors.slice(0, 3).forEach( advisor => {
        htmlFirstFold += `<div class="tm-advisor-wrap">
        <div class="advisor-card">
            <div class="advisor-card__wraper">
                <div class="advisor-image">
                    <img src="https://turtlemint-stage.dreamhosters.com/wp-content/themes/turtlemint/tm-assets/img/tm-img/kaleen.png" alt="kaleen">
                </div>
                <p class="tm-h2-bold advisor-name">${advisor.partnerName}</p>
                <p class="tm-body tm-grey-text advisor-location">${advisor.area}, ${advisor.city}</p>
                <div class="row tm-stats">
                    <div class="col-6 stat">
                        <p class="tm-h2-regular stat-title">${Math.floor(advisor.yearsOfExperience)} Years</p>
                        <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                    </div>
                    <div class="col-6 stat">
                        <p class="tm-h2-regular stat-title">${Math.floor(advisor.customersServed)}+</p>
                        <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                    </div>
                </div>
                <a href="" class="tm-button">Get In Touch</a>
            </div>
        </div>
    </div>`
    });
    if(data.advisors.length > 3){
        data.advisors.slice(3).forEach( advisor => {
            htmlLastFold += `<div class="tm-advisor-wrap">
            <div class="advisor-card">
                <div class="advisor-card__wraper">
                    <div class="advisor-image">
                        <img src="https://turtlemint-stage.dreamhosters.com/wp-content/themes/turtlemint/tm-assets/img/tm-img/kaleen.png" alt="kaleen">
                    </div>
                    <p class="tm-h2-bold advisor-name">${advisor.partnerName}</p>
                    <p class="tm-body tm-grey-text advisor-location">${advisor.area}, ${advisor.city}</p>
                    <div class="row tm-stats">
                        <div class="col-6 stat">
                            <p class="tm-h2-regular stat-title">${Math.floor(advisor.yearsOfExperience)} Years</p>
                            <p class="tm-body tm-grey-text stat-subtitle">Experience</p>
                        </div>
                        <div class="col-6 stat">
                            <p class="tm-h2-regular stat-title">${Math.floor(advisor.customersServed)}+</p>
                            <p class="tm-body tm-grey-text stat-subtitle">Policies Sold</p>
                        </div>
                    </div>
                    <a href="" class="tm-button">Get In Touch</a>
                </div>
            </div>
        </div>`
        });
    }
    console.log(htmlFirstFold)
    console.log(htmlLastFold)
    firstFoldParent.innerHTML = htmlFirstFold;
    lastFoldParent.innerHTML = htmlLastFold;
    $('.tm-loading').removeClass('tm-loading')
}

//render script end
