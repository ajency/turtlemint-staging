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

  if(popupId == 'tmOtpPopup'){
    countDownTimer(0, 0, 5);
  }
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
                <a onclick="openPopup('getInTouchPopup')" class="tm-button">Get In Touch</a>
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
                    <a class="tm-button" onclick="openPopup('getInTouchPopup')">Get In Touch</a>
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


/* pincode form */
const inputs = document.querySelectorAll('.single-input-group input');
inputs[0].focus();
for (elem of inputs) {
  elem.addEventListener('input', function() {
    const value = this.value;
    const nextElement = this.nextElementSibling;
    if (value === '' || !nextElement) {
      return;
    }
    nextElement.focus();
  });
}
for (let elem of inputs) {
  elem.addEventListener('keydown', function(event) {
     //Right Arrow Key
    if (event.keyCode == 39) {
      this.nextElementSibling.focus();
    }
     //Left Arrow Key
    //Add Highlight
    if (event.keyCode == 37) {
      this.previousElementSibling.focus();
    }
    //Backspace Key
    if (event.keyCode == 8 && event.metaKey) {
      for (innerElem of inputs) {
        innerElem.value = '';
      }
      inputs[0].focus();
    } else if (event.keyCode == 8) {
      if(elem.value === '') {
        this.previousElementSibling.focus();
        return;
      }
      elem.value = '';
    }
  });
}
$(document).on('change keyup', '.required', function(e){
  let parent = $(e.target).parents('.tm-popup');

    let Disabled = true;
     $(parent).find(".required").each(function() {
       let value = this.value
       if ((value)&&(value.trim() !=''))
           {
             Disabled = false
           }else{
             Disabled = true
             return false
           }
     });
    
    if(Disabled){
         $('.tm-button').prop("disabled", true);
       }else{
         $('.tm-button').prop("disabled", false);
       }
  })

/* otp timer */
function countDownTimer(hours, minutes, seconds){

const oneSec = 1000,
container = document.getElementById('countdowntimer');

let dataHours 	= hours,
dataMinutes = minutes,
dataSeconds = seconds

if (dataHours == '' || dataHours == null || dataHours == NaN) {
dataHours = "0";
}
if (dataMinutes == '' || dataMinutes == null || dataMinutes == NaN) {
dataMinutes = "0";
}
if (dataSeconds == '' || dataSeconds == null || dataSeconds == NaN) {
dataSeconds = "0";
}

let hoursSpan = document.createElement('span'),
minutesSpan = document.createElement('span'),
secondsSpan = document.createElement('span'),
separator1 = document.createElement('span'),
separator2 = document.createElement('span'),
separatorValue = ":",
max = 59,
s = parseInt(dataSeconds) > max ? max : parseInt(dataSeconds),
m = parseInt(dataMinutes) > max ? max : parseInt(dataMinutes),
h = parseInt(dataHours);

secondsSpan.classList.add('time');
minutesSpan.classList.add('time');
hoursSpan.classList.add('time');
separator1.classList.add('separator');
separator1.textContent = separatorValue;
separator2.classList.add('separator');
separator2.textContent = separatorValue;

checkValue = (value)=>{
if (value < 10) {
return "0" + value;
} else {
return value;
}
}

hoursSpan.textContent = checkValue(dataHours);
minutesSpan.textContent = checkValue(dataMinutes);
secondsSpan.textContent = checkValue(dataSeconds);

timer = (sv,mv,hv)=>{

s = parseInt(sv);
m = parseInt(mv);
h = parseInt(hv);

if (s > 0) {
return s -= 1;
} else {
s = max;
if (m > 0) {
  return m -= 1;
} else {
  m = max;
  if (h > 0) {
    return h -= 1;
  }
}
}
}

finished = ()=>{
max = 0;
$(container).parent('.resend-timer').addClass('success');
$(container).parent('.resend-timer').attr('onclick', 'resendCode(this)');
$(container).parent('.resend-timer').find('.resend-text').text('Resend code');
$(container).parent('.resend-timer').find('.timer').text('');
}

counter = setInterval(()=>{

if (h == 0 && m == 0 && s == 1) {
clearInterval(counter, finished());
}

if (s >= 0) {
timer(s,m,h);
hoursSpan.textContent   = checkValue(h);
minutesSpan.textContent = checkValue(m);
secondsSpan.textContent = checkValue(s);
}
}, oneSec);

let children = [minutesSpan, separator2, secondsSpan];

for (child of children) {
container.appendChild(child);
}
}

function resendCode(element){
  $(element).removeClass('success');
  $(element).find('.resend-text').text('Resend code in');
  $(element).attr('onclick', '');
  countDownTimer(0, 0, 5);
}