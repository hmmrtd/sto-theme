
/* Old variant to start post request*/

// jQuery(document).ready(function($){
//
//     var fk = $('#sv-app-create');
//
//     fk.on('click', function(){
//       var data = {
//         action: 'msoapp',
//         SVuserLG: window.wpud.user_log,
//         appDate: $('#sv-app-data').attr('ldate'),
//         sCat: $('#sv-app-data').attr('lservice')
//       };
//
//
//       $.post(window.wp.ajax_url, data, function(res){
//       }, 'json');
//     });
//
//
//
//   });


function goAjaxRequest (){
  jQuery(document).ready(function($){

    var data = {
      action: 'msoapp',
      SVuserLG: window.wpud.user_log,
      appDate: $('#sv-app-data').attr('ldate'),
      sCat: $('#sv-app-data').attr('lservice')
    };


    $.post(window.wp.ajax_url, data, function(res){
    }, 'json');


  });
}
