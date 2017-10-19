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
  <div id="wrapper">
    <div class="overlay"></div>
    <!-- desktop-->
    <nav class="navbar navbar-inverse navbar-fixed-top hidden-xs">
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
            <li>
              <a href="http://descargarvideoyoutube.com/articulos/como-puedo-descargar-videos-de-youtube">
                <i class="glyphicon glyphicon-info-sign"></i> ¿Cómo descargar?</a></li>
            <li><a data-toggle="modal" data-target="#modalTutorial"><i class="glyphicon glyphicon-facetime-video"></i> Tutorial</a></li>
            <li><a data-toggle="modal" data-target="#modalFeedback"><i class="glyphicon glyphicon-envelope"></i> Feedback</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- mobile-->
    <nav class="navbar navbar-inverse navbar-fixed-top visible-xs-block" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav">
        <li></li>
        <li><a href="http://descargarvideoyoutube.com/articulos/como-puedo-descargar-videos-de-youtube">
            <i class="glyphicon glyphicon-info-sign"></i> ¿Cómo descargar?</a></li>
        <li><a data-toggle="modal" data-target="#modalTutorial"><i class="glyphicon glyphicon-facetime-video"></i> Tutorial</a></li>
        <li><a data-toggle="modal" data-target="#modalFeedback"><i class="glyphicon glyphicon-envelope"></i> Feedback</a></li>
      </ul>
    </nav>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div style="background: #ccc; height: 60px; position: fixed; top: 0; width: 100%; padding-left: 20px; padding-top: 20px; z-index: 1" 
           class="text-center visible-xs-block">
        <a style="color: black"  href="http://descargarvideoyoutube.com/">DescargarVideoYoutube.com</a>
      </div>
      <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
      </button>

      <div class="container">



