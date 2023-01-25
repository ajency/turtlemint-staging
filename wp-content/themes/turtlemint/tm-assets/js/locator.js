/* dropdown */
function tmSelectDropdown(element, flag) {
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
    .find(".tm-select-value .icon")
    .attr("alt", $(element).find('.icon').attr("alt"));
  $(element)
    .parents(".tm-select-dropdown")
    .find(".tm-select-value")
    .removeClass("placeholder");

    window.tm_vertical_data = $(element).data('value');
  
  if(flag){
    filterVertical()
  }
}
/* insurance type selection */
$( document ).ready(function() {

  $(".filter-select-group input[type=radio]").change(function () {
    // insurance type value
    window.tm_vertical_data = $(this).val();
    
    // type icon colored
    let typeIconColored = $(this).next('label').find('.icon').attr('icon-colored');

      //update icon
      $(this).next('label').find('.icon').attr('id', typeIconColored);

      $(".filter-select-group input[type=radio]").not(this).each(function(){
       // type icon default
      let typeIconDefault = $(this).next('label').find('.icon').attr('icon-default');
      //update icon
       $(this).next('label').find('.icon').attr('id', typeIconDefault);
      });
  });
});

$(".tm-select-value").click(function () {
  $(this).next(".tm-select-options").slideToggle();
});
$(".tm-select-option").click(function () {
  $(this).parent(".tm-select-options").slideUp();
});

/* Skeletons */
// $(document).ready(function(){
//     setTimeout(function(){
//         $('.tm-loading').removeClass('tm-loading');
//     }, 2000);
// });

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

function populateVertical(){
/*   let selectedVertical = $('.tm-select-dropdown:not(.skeleton-dropdown)').find('.tm-select-options .tm-select-option.selected');
  let defaultVertical = $('.tm-select-dropdown:not(.skeleton-dropdown) .tm-select-value'); */
  //console.log("value : ", $(selectedVertical).data('value'));
  /* $(defaultVertical).html($(selectedVertical).html()); */
  //imp
  // $('.tm-select-dropdown:not(.skeleton-dropdown)').find('.tm-select-options .tm-select-option[data-value='+ window.tm_vertical_data +']').click();

  $('.tm-select-dropdown:not(.skeleton-dropdown)').find('.tm-select-options .tm-select-option[data-value='+ window.tm_vertical_data +']').each(function(index, element){
    // console.log(element)
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
    .find(".tm-select-value .icon")
    .attr("alt", $(element).find('.icon').attr("alt"));
  })

/*   $(".filter-select-group input[type=radio][value="+ window.tm_vertical_data +"]").prop("checked", true);
  let coloredIcon = $(".filter-select-group input[type=radio][value="+ window.tm_vertical_data +"]").next('label').find('.icon');
  $(coloredIcon).attr('id', $(coloredIcon).attr('icon-colored')); */
}

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
       if ((value)&&(value.trim() !='') && $(parent).find('.tm-form-group.tm-error').length < 1)
           {
             Disabled = false
           }else{
             Disabled = true
             return false
           }
     });

    if(Disabled){
        $(parent).find('.tm-button').prop("disabled", true);
        $('#pincodeForm .location-name:not(.location-name-skeleton), #pincodeForm .error-message').removeClass('d-block').addClass('d-none')
        $('#pincodeForm .tm-form-group').removeClass('tm-error');
    }
    else{
        // console.log($(parent).attr('id'))
        if($(parent).attr('id') == 'pincodePopup'){
            pincodeValidaion()
        }
        else{
            $(parent).find('.tm-button').prop("disabled", false);
        }
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
async function pincodeValidaion(){
    let pincode = ''
    $('#pincodeForm .location-wraper').addClass('tm-loading')
    $('#pincodeForm .required').each(function(){
        pincode += $(this).val()
    })
    let pincodeData = await getPincodeLocation(pincode);
    // console.log('pinDara', pincodeData)
    if(pincodeData.error){
        $('#pincodeForm .error-message').text(pincodeData.info).addClass('d-block')
        $('#pincodeForm .tm-form-group').addClass('tm-error');
    }
    else{
        $('#pincodeForm .location-name:not(.location-name-skeleton)').text(pincodeData.area+', '+pincodeData.city+', '+pincodeData.state).removeClass('d-none')
        $('#pincodeForm .tm-button').prop("disabled", false);
    }
    $('#pincodeForm .location-wraper').removeClass('tm-loading')
}

document.getElementById('pincodeForm').addEventListener('submit', function(e){
    e.preventDefault();
    $(this).find('.tm-button').addClass('tm-loader')
    // console.log('test',window.tm_pincode_data)
    let vertical = $(this).find('.tm-select-value.selected').data('value')
    $('.tm-select-option[data-value='+vertical+']').addClass('selected')
    getAdvisorList(window.tm_pincode_data.pinCode,vertical)
})

/******* get in touch Form flow ********/
//forms
let getInTouchForm = document.getElementById('getInTouchForm');

//patterns
let phonePattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4}$/im;

//Error Messages
let phoneinvalidMessage = "Please enter a valid mobile number";

// phone validation
function phoneValidation(input) {
  let formElement = $(input).parents('.tm-form')
  let parentGroup = $(input).parents('.tm-form-group')
  if (input.value.match(phonePattern)) {
    $(parentGroup).removeClass('tm-error')
    $(parentGroup).find('.error-message').text('').slideUp()
  }else{
    $(parentGroup).addClass('tm-error')
    $(parentGroup).find('.error-message').text(phoneinvalidMessage).slideDown()
  }
}

// phone
$(document).on('change keyup', '#tm-mobileNo', function(e){
    phoneValidation(this);

    let form = $(this).parents('.tm-form');
    let formErrors = $(form).find('.tm-form-group.tm-error').length
    console.log("Errors: ", formErrors);
    if(formErrors > 0 || $(form).find('.required').val()===''){
      console.log('has Errors');
      $(form).find('.tm-button').prop("disabled", true);
    }
    else{
      console.log('No Errors');
      (form).find('.tm-button').prop("disabled", false);
    }
    
});

// contact form
$(getInTouchForm).submit(function( e ){
  e.preventDefault();
  $(this).find('.tm-button').addClass('tm-loader')
})