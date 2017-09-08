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
        <div class="text-center">
          <h1 class="form-download-heading">
            <img src="img/descargarvideoyoutube_youtube_logo.png" alt="Descargar videos de youtube" class="img-responsive" style="display: inline"/> Descargar videos de Youtube</h1>
          <h2 class="help-block h4">
            Está herramienta te permite descargar videos de youtube convirtiéndolos a múltiples formatos:
            <br> <span class="label label-default">youtube a mp4</span> ,<span class="label label-default">youtube a mp3</span>, <span class="label label-default">youtube a 3gpp</span> entre otros.
          </h2>
          <p> 
            El uso de esta herramienta es totalmente <b>GRATIS</b> creada para descargar videos de youtube <b>GRATIS</b>.

          </p>
        </div>
        <?php
        $htmlBody = '';

// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
        if ($_GET['q'])
        {
          // Call set_include_path() as needed to point to your client library.
          require_once '/vendor/vendor/google/apiclient/src/Google/Client.php';
          require_once '/vendor/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
          $DEVELOPER_KEY = 'AIzaSyC6xycSbQnk91ESo4bPteKdO76j_q8MPrw';
          $client = new Google_Client();
          $client->setDeveloperKey($DEVELOPER_KEY);

          // Define an object that will be used to make all API requests.
          $youtube = new Google_Service_YouTube($client);

          try
          {
            // Call the search.list method to retrieve results matching the specified
            // query term.
            $searchResponse = $youtube->search->listSearch('id,snippet', array(
              'q'          => $_GET['q'],
              'maxResults' => 9,
              'type'       => 'video'
            ));

            // Add each result to the appropriate list, and then display the lists of
            // matching videos, channels, and playlists.

            $videos = '<div class="row videos_resultados">';


            foreach ($searchResponse['items'] as $searchResult)
            {
              $videos .= '<div class="col-sm-6 col-md-4">
    <div class="thumbnail"><iframe width="100%" height="200"
src="https://www.youtube.com/embed/' . $searchResult['id']['videoId'] . '">
</iframe>
      <div class="caption">
        <p>' . $searchResult['snippet']['title'] . '</p>
        
        <p class="text-center">
        <button data-loading-text="Generando Formatos ..." class="btn btn-danger descargar_youtube_btn btn-sm" video_id="' . $searchResult['id']['videoId'] . '" role="button">'
                  . ' <i class="glyphicon glyphicon-download"></i> Descargar video</button></p>'
                  . '</div>
    </div>
  </div>';
            }
            $videos .= ' 
</div>';

            $htmlBody .= <<<END
    <h3>Videos</h3>
    $videos
END;
          }
          catch (Google_Service_Exception $e)
          {
            $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>', htmlspecialchars($e->getMessage()));
          }
          catch (Google_Exception $e)
          {
            $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>', htmlspecialchars($e->getMessage()));
          }
        }
        ?>
        <div class="panel panel-default" style="border: 3px dashed red">
          <div class="panel-body">
            <div class="video-info">
              <h4>Pasos para descargar videos de youtube:</h4>
              <ol class="h5">
                <li>Ingresar el nombre del video que deseas descargar en la casilla de búsqueda.</li>
                <li>Clic en el botón "descargar" que se ubica debajo del video.</li>
                <li>Finalmente elige el formato que desees y aprieta el botón "descargar"</li>
              </ol>
            </div>
            <form method="GET">
              <div class="input-group input-lg" style="margin-bottom:10px">
                <input type="search" class="form-control input-lg" id="q" name="q" placeholder="Buscar video en Youtube.com para descargar">
                <span class="input-group-btn">
                  <button class="btn btn-danger btn-lg" type="submit">
                    <i class="glyphicon glyphicon-search"></i> Buscar</button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <?php echo $htmlBody ?>   
        <form class="" method="get" id="download" action="getvideo.php">

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
          <div class="hidden-xs">
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
<script>
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
</script>
