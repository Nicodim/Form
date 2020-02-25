

jQuery( document ).ready(function() {
jQuery('#form').trigger('reset');
jQuery(function() {
  'use strict';
  jQuery('#form').on('submit', function(e) {
    e.preventDefault();
    jQuery.ajax({
      url: 'send.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function(msg) {
        console.log(msg);
        if (msg == 'ok') {
          alert('Сообщение отправлено');
          jQuery('#form').trigger('reset'); // очистка формы
        } else {
          alert('Ошибка');
        }
      }
    });
  });
});
});