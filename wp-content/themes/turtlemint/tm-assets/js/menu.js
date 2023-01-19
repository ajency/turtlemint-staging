jQuery(document).ready(function($) {
  
  "use strict"; 

  $('.navbar-nav > li > a').on('click', function(){
  	$(this).parent().toggleClass('active-item');
  	$(this).parent().parent().toggleClass('active-menu');
  });

  $('.dropdown-list-menu > .dropdown-header').on('click', function(){
  	$(this).toggleClass('active-tab')
  	$(this).next().slideToggle();
  });

});