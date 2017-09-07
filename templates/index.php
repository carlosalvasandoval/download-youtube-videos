<?php echo $this->inc('header.php', ['title' => 'Descargar videos de Youtube']); ?>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-2 hidden-xs">
        <script type="text/javascript">
          (function () {
            if (window.CHITIKA === undefined) {
              window.CHITIKA = {'units': []};
            }
            ;
            var unit = {"calltype": "async[2]", "publisher": "carlosalvasandoval", "width": 160, "height": 600, "sid": "Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
          }());
        </script>
        <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
      </div>
      <div class="col-md-2 visible-xs-block">
        <script type="text/javascript">
          (function () {
            if (window.CHITIKA === undefined) {
              window.CHITIKA = {'units': []};
            }
            ;
            var unit = {"calltype": "async[2]", "publisher": "carlosalvasandoval", "width": 320, "height": 50, "sid": "Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
          }());
        </script>
        <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
      </div>
      <div class="col-md-10">
        <form class="" method="get" id="download" action="getvideo.php">

          <div class="row">
            <div class="col-md-8">
              <div class="text-center">
                <img src="img/descargarvideoyoutube_youtube_logo.png" alt="Descargar videos de youtube" class="img-responsive"/>
              </div>
              <h1 class="form-download-heading">Descargar videos de Youtube</h1>

              <p class="help-block">
                Está herramienta te permite descargar videos de youtube convirtiéndolos a múltiples formatos:
                <br> <span class="label label-default">mp4</span> ,<span class="label label-default">mp3</span>, <span class="label label-default">3gpp</span> entre otros.
              </p>

              <div class="video-info">
                <h2>Pasos para descargar videos o audios de youtube:</h2>
                <ol class="h5">
                  <li>Copiar URL desde youtube del video que deseas descargarte</li>
                  <li>Pegar el enlace en la casilla de descarga y presionar botón "descargar"</li>
                  <li>Finalmente elige el formato que desees y aprieta el botón descargar</li>
                </ol>
              </div>
            </div>
            <div class="col-md-4 hidden-xs">
              <script type="text/javascript">
          (function () {
            if (window.CHITIKA === undefined) {
              window.CHITIKA = {'units': []};
            }
            ;
            var unit = {"calltype": "async[2]", "publisher": "carlosalvasandoval", "width": 300, "height": 250, "sid": "Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
          }());
              </script>
              <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
            </div>
          </div>
          <div class="input-group well">
            <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="Pega aquí el enlace de youtube : https://www.youtube.com/watch?v=...">
            <span class="input-group-btn">
              <input class="btn btn-danger btn-lg" type="submit" name="type" id="type" value="Descargar" />
            </span>
          </div>


          <div class="visible-xs-block">
            <script type="text/javascript">
          (function () {
            if (window.CHITIKA === undefined) {
              window.CHITIKA = {'units': []};
            }
            ;
            var unit = {"calltype": "async[2]", "publisher": "carlosalvasandoval", "width": 320, "height": 50, "sid": "Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
          }());
            </script>
            <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
          </div>


          <div class="hidden-xs">
            <script type="text/javascript">
          (function () {
            if (window.CHITIKA === undefined) {
              window.CHITIKA = {'units': []};
            }
            ;
            var unit = {"calltype": "async[2]", "publisher": "carlosalvasandoval", "width": 728, "height": 90, "sid": "Chitika Default"};
            var placement_id = window.CHITIKA.units.length;
            window.CHITIKA.units.push(unit);
            document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
          }());
            </script>
            <script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
          </div>
          <?php
          if ($this->get('showBrowserExtensions') === true)
          {
            echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
          }
          ?>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>

  </div>
</div>

<?php echo $this->inc('footer.php'); ?>
