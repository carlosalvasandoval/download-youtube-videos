<?php echo $this->inc('header.php', ['title' => 'Youtube Downloader Results']); ?>
<div class="well row">
  <h1 class="download-heading">Todo listo para que descargues tu video!!</h1>
  <h2> No te olvides de compartir esta aplicación entre tus amigos </h2>
  <img src="<?php echo BASE_URL?>/img/descargarvideoyoutube_like.png" alt="compartir con amigos"/>
  <hr />
  <div class="col-xs-12">
    <div id="info">
      <?php
      if ($this->get('show_thumbnail') === true)
      {
        ?>
        <img src="<?php echo $this->get('thumbnail_src'); ?>" style="border: 0" alt="<?php echo $this->get('video_title'); ?>"/>
      <?php } ?>
      <p><?php echo $this->get('video_title'); ?></p>
    </div>
    <?php
    if ($this->get('no_stream_map_found', false) === true)
    {
      ?>
      <p>No encoded format stream found.</p>
      <p>Here is what we got from YouTube:</p>
      <pre>
        <?php echo $this->get('no_stream_map_found_dump'); ?>
      </pre>
      <?php
    }
    else
    {
      ?>
      <?php
      if ($this->get('show_debug1', false) === true)
      {
        ?>
        <pre>
          <?php echo $this->get('debug1'); ?>
        </pre>
      <?php } ?>
      <?php
      if ($this->get('show_debug2', false) === true)
      {
        ?>
        <p>These links will expire at <?php echo $this->get('debug2_expires'); ?></p>
        <p>The server was at IP address <?php echo $this->get('debug2_ip'); ?> which is an <?php echo $this->get('debug2ipbits'); ?> bit IP address. Note that when 8 bit IP addresses are used, the download links may fail.</p>
      <?php } ?>
      <h2>Lista de formatos para descargar</h2>


      <ul class="list-group">
        <?php
        foreach ($this->get('streams', []) as $format)
        {
          ?>
          <li class="list-group-item">
            <?php
            if ($format['show_direct_url'] === true)
            {
              ?>
              <span class="badge"><i class="glyphicon <?php echo strpos($format['type'], 'audio') !== false ? 'glyphicon-music' : 'glyphicon-facetime-video' ?>"></i>
                <?php echo $format['type']; ?>
              </span>

              <?php
            }
            else
            {
              ?>
              <span class="badge"><i class="glyphicon <?php echo strpos($format['type'], 'audio') !== false ? 'glyphicon-music' : 'glyphicon-facetime-video' ?>"></i>
                <?php echo $format['type']; ?>
              </span>
            <?php } ?>

            <?php
            if ($format['show_proxy_url'] === true)
            {
              ?>
              <a class="btn btn-primary btn-download mime" href="<?php echo $format['proxy_url']; ?>">
                <i class="glyphicon glyphicon-download-alt"></i> Descargar - <fsize><?php echo $format['size']; ?></fsize> 
                Calidad: <?php echo $format['quality']; ?>
              </a>
            <?php } ?>

          </li>
        <?php } ?>
      </ul>



      <hr />
      <h2>Video y audio por separado</h2>
      <ul class="list-group">
        <?php
        foreach ($this->get('formats', []) as $format)
        {
          ?>
          <li class="list-group-item">
            <?php
            if ($format['show_direct_url'] === true)
            {
              ?>
              <span class="badge <?php echo strpos($format['type'], 'audio') !== false ? 'badge-error' : '' ?>"><i class="glyphicon <?php echo strpos($format['type'], 'audio') !== false ? 'glyphicon-music' : 'glyphicon-facetime-video' ?>"></i>
                <?php echo $format['type']; ?>
              </span>
              <?php
            }
            else
            {
              ?>
              <span class="mime"><?php echo $format['type']; ?></span>
            <?php } ?>

            <?php
            if ($format['show_proxy_url'] === true)
            {
              ?>
              <a class="btn btn-primary btn-download" href="<?php echo $format['proxy_url']; ?>" class="mime">
                <i class="glyphicon glyphicon-download-alt"></i> Descargar - <fsize><?php echo $format['size']; ?></fsize></a>
            <?php } ?>
            <div class="label label-warning">quality: <?php echo $format['quality']; ?></div>
          </li>
        <?php } ?>
      </ul>
      <?php
      if ($this->get('showMP3Download', false) === true)
      {
        ?>
        <h2>Convertir y descargar a .mp3</h2>
        <ul class="dl-list">
          <li>
            <a class="btn btn-default btn-type disabled mime" href="#">audio/mp3</a>
            <a class="btn btn-primary btn-download mime" href="<?php echo $this->get('mp3_download_url'); ?>"><i class="glyphicon glyphicon-download-alt"></i> Convertir y Descargar</a>
            <div class="label label-warning">quality: <?php echo $this->get('mp3_download_quality'); ?></div>
          </li>
        </ul>
      <?php } ?>
      <?php
      if ($this->get('showBrowserExtensions', false) === true)
      {
        ?>
        <p><a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a 'Download' link to this application on Youtube video pages."> Install Chrome Extension </a></p>
      <?php } ?>
    <?php } ?>
  </div>
  <hr />
  <div class="clearfix"></div>
</div>

<?php echo $this->inc('footer.php'); ?>
<script>
  $(document).ready(function () {
    setTimeout(function () {
      $('fsize').each(function (k, v) {
        console.log($(v).text());
        if (!$(v).text() || $(v).text() == '0B') {
          location.reload();
          return false;
        }
      });
    }, 1000);

  });
</script>
