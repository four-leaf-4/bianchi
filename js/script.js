(jQuery)(function($) {
  $('ul.menu-list').css('display','none');
       $('.humberger_menu').on('click',function(){
           $(this).toggleClass('open');
           $('ul.menu-list').slideToggle('slow');
         return false;
       });
});
