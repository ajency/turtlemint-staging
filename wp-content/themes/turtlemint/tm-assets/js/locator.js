function tmSelectDropdown(element){
    if(!$(element).hasClass('selected') && $(element).hasClass('valueTarget')){
    }
    $(element).siblings().removeClass("selected")
    $(element).addClass('selected')
    let iconUrl = $(element).data('icon');
    $(element).parents('.tm-select-dropdown').find('.tm-select-value .icon').attr('src', iconUrl);
    $(element).parents('.tm-select-dropdown').find('.tm-select-value .title').text($(element).text())
    $(element).parents('.tm-select-dropdown').find('.tm-select-value').removeClass('placeholder')
}

$('.tm-select-value').click(function(){
    $(this).next('.tm-select-options').slideToggle();
});
$('.tm-select-option').click(function(){
    $(this).parent('.tm-select-options').slideUp();
});

function openPopup(popupId){
    $('#'+popupId).addClass('show')
}
function closePopup(popupId){
    $('#'+popupId).removeClass('show')
}

window.addEventListener('DOMContentLoaded', (event) => {
    $('.tm-popup').click(function(e){
        if(e.target == this){
            closePopup($(this).attr('id'))
        }
    })
});