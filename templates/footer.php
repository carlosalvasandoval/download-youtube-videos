<div>
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Bajar videos de youtube</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube a mp4</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube a mp3</a> 
  <a href="http://descargarvideoyoutube.com" class="btn btn-link"> Descargar videos de youtube sin programas</a> 
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalTutorial" tabindex="-1" role="dialog" aria-labelledby="modalTutorial">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tutorial de uso</h4>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/FmtpqbVe_Uo" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script src="vendor/jquery-floating-social-share-master/dist/jquery.floating-social-share.min.js" type="text/javascript"></script>
<script>
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
</script>
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


  $(function () {
    $('#modalTutorial').modal({
      show: false
    }).on('hidden.bs.modal', function () {
      $("#modalTutorial iframe").attr("src", $("#modalTutorial iframe").attr("src"));
    });
  });
</script>
</body>
</html>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css"/>
<link href="vendor/jquery-floating-social-share-master/dist/jquery.floating-social-share.min.css" rel="stylesheet" type="text/css"/>
<link href="css/custom.css" rel="stylesheet"/>
