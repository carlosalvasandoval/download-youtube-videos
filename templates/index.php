<?php echo $this->inc('header.php', ['title' => 'Descargar videos de Youtube']); ?>
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="form-download-heading">
                <img src="img/descargarvideoyoutube_youtube_logo.png" alt="logo de youtube" class="img-responsive" style="display: inline"/> Descargar videos de Youtube</h1>
              <h2 class="help-block h4" style="line-height: 25px;">
                Está herramienta te permite descargar videos de youtube convirtiéndolos a múltiples formatos:
                <br> <span class="label label-default">youtube a mp4</span> ,<span class="label label-default">youtube a mp3</span>, <span class="label label-default">youtube a 3gpp</span> entre otros.
              </h2>
              <p> 
                El uso de esta herramienta es totalmente <b>GRATIS</b> creada para descargar videos de youtube <b>GRATIS</b>. <span class="label label-primary">Si te gusto compártela!!</span>
              </p>
            </div>
            <?php

            function covtime($youtube_time)
            {
              $start = new DateTime('@0'); // Unix epoch
              $start->add(new DateInterval($youtube_time));
              return $start->format('H:i:s');
            }

            $htmlBody = '';

// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
            if ($_GET['q'])
            {
              // Call set_include_path() as needed to point to your client library.
              require_once 'vendor/vendor/google/apiclient/src/Google/Client.php';
              require_once 'vendor/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
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
                  'q'               => $_GET['q'],
                  'maxResults'      => 32,
                  'type'            => 'video',
                  'videoEmbeddable' => 'true'
                ));

                // Add each result to the appropriate list, and then display the lists of
                // matching videos, channels, and playlists.

                $videos = '<div class="row videos_resultados">';
                $videos_html = array();
                foreach ($searchResponse['items'] as $searchResult)
                {
                  $videos_html[$searchResult['id']['videoId']] = '<div class="col-xs-12 col-sm-6 resultados_videos">
    <div class="thumbnail"><iframe width="100%" height="200" frameborder = "0"
    allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen"
src="https://www.youtube.com/embed/' . $searchResult['id']['videoId'] . '">
</iframe>
      <div class="caption">
        <p><span class="label label-default">%s</span> ' . $searchResult['snippet']['title'] . '</p>
        
        <p class="text-center">
        <button data-loading-text="Generando Formatos ..." class="btn btn-danger descargar_youtube_btn btn-sm" video_id="' . $searchResult['id']['videoId'] . '" role="button">'
                      . ' <i class="glyphicon glyphicon-download"></i> Descargar video</button></p>'
                      . '</div>
    </div>
  </div>';
                }
                $videos_ids = implode(',', array_keys($videos_html));
                $videos_raw_info = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=" . $videos_ids . "&key=" . $DEVELOPER_KEY);
                $videos_info = json_decode($videos_raw_info, true);

                foreach ($videos_info['items'] as $video_info)
                {
                  $tiempo = covtime($video_info['contentDetails']['duration']);
                  $videos_html[$video_info['id']] = str_replace('%s', $tiempo, $videos_html[$video_info['id']]);
                }
                $videos .= implode(' ', $videos_html);
                $videos .= '</div>';

                $htmlBody .= <<<END
    <h3><a name="videos_anchor" href="#videos">Estos videos estan listados para descargarlos</a></h3>
                <div class="text-center"><div class="page-selection"></div></div>
    $videos
                <div class="text-center"><div class="page-selection"></div></div>
END;
              }
              catch (Google_Service_Exception $e)
              {
                $htmlBody .= sprintf('<p>Error proveniendo de Youtube: <code>%s</code></p>', htmlspecialchars($e->getMessage()));
              }
              catch (Google_Exception $e)
              {
                $htmlBody .= sprintf('<p>Error en tu explorador: <code>%s</code></p>', htmlspecialchars($e->getMessage()));
              }
            }
            ?>
            <div class="panel panel-default" style="border: 3px dashed red">
              <div class="panel-body">
                <div class="video-info">
                  <p>
                  <h2 class="h3">Pasos para descargar videos de youtube:</h2>
                  <ol class="h5">
                    <li>Ingresa el <b>título del video</b> o ingresa la <b>URL</b> de algun video de <a href="http://youtube.com" target="_blank">Youtube</a> en la casilla de busqueda.</li>
                    <li>Clic en el botón "Descargar video" que se ubica debajo del video.</li>
                    <li>Finalmente elige el formato que desees y aprieta el botón "descargar"</li>
                  </ol>
                  </p>
                </div>
                <form method="get" action="">
                  <div class="input-group" style="margin-bottom:10px">
                    <input type="search" class="form-control" id="q" name="q" placeholder="Buscar por URL o título de video en Youtube.com" value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
                    <span class="input-group-btn">
                      <button class="btn btn-danger" type="submit">
                        <i class="glyphicon glyphicon-search"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <?php echo $htmlBody ?>

            <form method="get" id="download" action="getvideo.php">
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
  </div>
  <div class="col-sm-4 hidden-xs">
    <div class="panel panel-default">
      <div class="panel-heading">Publicaciones recientes</div>
      <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo BASE_URL . '/regueton/arcangel' ?>">Arcangel nos cuenta sobre su vida</a></li>
        <li class="list-group-item"><a href="<?php echo BASE_URL . '/articulos/como-puedo-descargar-videos-de-youtube' ?>">¿Cómo puedo descargar videos de youtube?</a></li>
      </ul>
    </div>
  </div>
</div>

<?php echo $this->inc('footer.php'); ?>
<script type="text/javascript">
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