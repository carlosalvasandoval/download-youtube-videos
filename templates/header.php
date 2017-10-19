<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title><?php echo $this->get('title', 'Descargar videos de Youtube'); ?></title>
    <meta name="description" content="Descargar videos gratis de youtube en 3 simples pasos!!"/>
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta property="og:url"                content="http://descargarvideoyoutube.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="DescargarVideoYotube.com | Herramienta gratuita para descargar videos de youtube tan solo en 3 simples pasos" />
    <meta property="og:description"        content="Herramienta gratuita para descargar videos de Youtube" />
    <meta property="og:image"              content="http://www.descargarvideoyoutube.com/img/descargarvideoyoutube_facebook_img.png" />
    <meta property="fb:app_id"             content="270535033464194" />

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
  </head>
  <body>
    <?php include 'partials/header_nav.php';?>
    <div class="container">
