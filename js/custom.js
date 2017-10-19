(function (i, s, o, g, r, a, m) {
  i['GoogleAnalyticsObject'] = r;
  i[r] = i[r] || function () {
    (i[r].q = i[r].q || []).push(arguments)
  }, i[r].l = 1 * new Date();
  a = s.createElement(o),
    m = s.getElementsByTagName(o)[0];
  a.async = 1;
  a.src = g;
  m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-106060296-1', 'auto');
ga('send', 'pageview');

$("body").floatingSocialShare({
  buttons: [
    "facebook", "google-plus", "linkedin",
    "twitter", "whatsapp"
  ],
  twitter_counter: true,
  text: "Compartir con: ",
  url: "http://descargarvideoyoutube.com",
  title: "Hola! te comparto esta herramienta para descargar videos de youtube GRATIS!! "
});
var validator = $("#feedbackform").validate({
  rules: {
    "comentario": "required",
    "email": {
      required: true,
      email: true
    }
  }
});

$('#btn-enviar-feedback').on('click', function () {
  if (validator.form()) {
    var $btn = $(this).button('loading');
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: "send_feedback.php",
      data: $('#feedbackform').serializeArray(),
      success: function (data) {
        if (data.status == 1)
        {
          $('#modalFeedback').modal('hide');
          document.getElementById('feedbackform').reset();
          grecaptcha.reset();
          alert('Gracias por tu feedback. Nos será de mucha ayuda para seguir mejorando');
        } else {
          $('#feedbackMessage').html('<div class="alert alert-danger alert-dismissible" role="alert">' +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
            ' <strong>Error!</strong> Debes comprobar que no eres un robot' +
            '</div>');
        }
        $btn.button('reset');
      },
      error: function () {
        $btn.button('reset');
      }
    });
  }
});



$.validator.setDefaults({
  highlight: function (element)
  {
    $(element).closest('.form-group').addClass('has-error');
  },
  unhighlight: function (element)
  {
    $(element).closest('.form-group').removeClass('has-error');
  },
  errorElement: 'span',
  errorClass: 'help-block',
  errorPlacement: function (error, element)
  {
    if (element.parent('.input-group').length)
    {
      error.insertAfter(element.parent());
    } else
    {
      error.insertAfter(element);
    }
  }
});

$.validator.methods.email = function (value, element) {
  return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
}
$(function () {
  $('#modalTutorial').modal({
    show: false
  }).on('hidden.bs.modal', function () {
    $("#modalTutorial iframe").attr("src", $("#modalTutorial iframe").attr("src"));
  });
});





$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});