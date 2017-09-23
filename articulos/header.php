<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title><?php echo $title ?></title>
    <meta name="description" content="¿Cómo descargar videos de youtube?"/>
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta property="og:url"                content="http://descargarvideoyoutube.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="DescargarVideoYotube.com | Herramienta gratuita para descargar videos de youtube tan solo en 3 simples pasos" />
    <meta property="og:description"        content="Herramienta gratuita para descargar videos de Youtube" />
    <meta property="og:image"              content="http://www.descargarvideoyoutube.com/img/descargarvideoyoutube_facebook_img.png" />
    <meta property="fb:app_id"             content="270535033464194" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link href="../vendor/jquery-floating-social-share-master/dist/jquery.floating-social-share.min.css" rel="stylesheet" type="text/css"/>
    <link href="../css/custom.css" rel="stylesheet"/>

    <style type="text/css">
      #info {
        padding: 0 0 0 130px;
        position: relative;
        height: 100px;
      }
      #info img {
        left: 0;
        position: absolute;
        top: 0;
        width: 120px;
        height: 90px
      }
      .videos_resultados.row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
      }
      .videos_resultados.row > [class*='col-'] {
        display: flex;
        flex-direction: column;
      }
      @media screen and (max-width: 768px) {
        h1{
          font-size:26px;
        }
        h2{
          font-size:22px;
        }
        h3{
          font-size:18px;
        }
      }
    </style>
    <script>
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

    </script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://descargarvideoyoutube.com/">DescargarVideoYoutube.com</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://descargarvideoyoutube.com/articulos/como-puedo-descargar-videos-de-youtube">¿Cómo descargar?</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li><a data-toggle="modal" data-target="#modalTutorial">Tutorial de uso</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
