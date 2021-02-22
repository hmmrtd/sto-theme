jQuery(document).ready(function($){
  var modal = $('.popup-callme'),
  overlay = $('.overlay'),
  link = $('.callmeBtn');

  link.on('click', function(){
    overlay.show();
    modal.show();
    $('body').css('overflow','hidden');
  });

  overlay.on('click', function(){
    overlay.hide();
    modal.hide();
    $('body').css("overflow","auto");
  });

});
