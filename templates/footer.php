<div>
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Bajar videos de youtube</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube a mp4</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube a mp3</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube sin programas</a> 
</div>
</div>
</div>
</div>
<?php
include 'partials/modals.php';
?>

<script type="text/javascript"  src="js/jquery.min.js" ></script>
<script type="text/javascript"  src="js/bootstrap.min.js" ></script>
<script type="text/javascript"  src="vendor/jquery-floating-social-share-master/dist/jquery.floating-social-share.min.js" ></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/jquery-validator/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/jquery-validator/localization/messages_es.min.js" type="text/javascript"></script>
<script type="text/javascript"  src="js/custom.js" ></script>
<script type="text/javascript" src="js/query.bootpag.min.js"></script>
<script type="text/javascript">
  $(document).on('click', '.descargar_youtube_btn', function () {
    console.log('generando formatos');
    var video_id = $(this).attr('video_id');
    $('.descargar_youtube_btn').addClass('disabled');
    $('.descargar_youtube_btn').attr('disabled', 'disabled');
    $(this).button('loading');
    $(this).before('<div class="progress">' +
      '<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">' +
      'Generando formatos . . .<span class="sr-only">45% Complete</span>' +
      ' </div>' +
      '</div>');
    window.location.href = "getvideo.php?videoid=https://www.youtube.com/watch?v=" + video_id + '&type=Descargar';
  });
<?php if ($_GET['q']): ?>
    var aTag = $("a[name='videos_anchor']");
    $('html,body').animate({scrollTop: aTag.offset().top - 80}, 'slow');
<?php endif; ?>


  // init bootpag
  var results_per_page = 4;
  $('.resultados_videos').hide();

  $('.page-selection').bootpag({
    total: 8
  }).on("page", function (event, num) {
    $('.resultados_videos').hide();
    $('.resultados_videos').each(function () {
      if ($(this).index() < num * results_per_page && $(this).index() >= (num - 1) * results_per_page) {
        $(this).show();
      }
    });

  });
  $('.resultados_videos').slice(0, results_per_page).show();

</script>



</body>
</html>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link href="vendor/jquery-floating-social-share-master/dist/jquery.floating-social-share.min.css" rel="stylesheet" type="text/css"/>
<link href="css/custom.css" rel="stylesheet"/>
