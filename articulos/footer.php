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
<script type="text/javascript" src="../js/jquery.min.js" ></script>
<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
<script src="../vendor/jquery-floating-social-share-master/dist/jquery.floating-social-share.min.js" type="text/javascript"></script>
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
  $(function(){
    $('#modalTutorial').modal({
        show: false
    }).on('hidden.bs.modal', function(){
        $("#modalTutorial iframe").attr("src", $("#modalTutorial iframe").attr("src"));

    });
});
</script>
<script type="text/javascript" src="js/query.bootpag.min.js"></script>
</body>
</html>
