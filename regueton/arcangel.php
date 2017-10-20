<?php
$title = 'Arcangel nos cuenta sobre su vida';
$description = 'Arcangel nos cuenta un poco de su vida y como inicio en la música';
$img = 'https://descargarvideoyoutube.com/regueton/img/arcangel.jpg';
$keyword = "Argangel mejores exitos";
$videos_max_results= 6;
require '../config/constants.php';
require 'header.php';
function covtime($youtube_time)
{
  $start = new DateTime('@0'); // Unix epoch
  $start->add(new DateInterval($youtube_time));
  return $start->format('H:i:s');
}

$htmlBody = '';
// Call set_include_path() as needed to point to your client library.
require_once '../vendor/vendor/autoload.php';
require_once '../vendor/vendor/google/apiclient/src/Google/Client.php';
require_once '../vendor/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
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
    'q'               => $keyword,
    'maxResults'      => $videos_max_results,
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
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h1>Biografía del Reguetonero Arcangel "La maravilla"</h1>
  </div>
  <div class="panel-body">
    <center>
      <img src="img/arcangel.jpg" alt="arcargel la maravilla" style="margin-bottom: 10px" class="img-thumbnail"/>
    </center>
    <h3>Arcangel nos cuenta de donde proviene</h3>
    <p class="text-justify">Hola mi gente mi nombre Arcángel la maravilla y mi historia comienza Bueno yo nací en el 1985 la ciudad de Nueva York hasta mi tres meses luego me mudo para Puerto Rico donde vivía en Bayamón hasta los 12 años y ahí estuve yendo y viniendo Nueva York Puerto Rico Nueva York Puerto Rico mi madre dominicana la cual me gusta mucho tener sangre dominicana porque me  gusta cómo me tratan cada vez que voy allá Y de verdad que tengo mucha familia haya la República y los quiero mucho estudié la mayoría de todos mis grados de la escuela Lo hice en Puerto Rico mi escuela secundaria escuela primaria. </p>

    <h3>Arcangel decide ser cantante</h3>
    <p class="text-justify">Qué te digo no como hasta los 16 años donde decidí ser cantante a los 17 cuando me graduó de la Escuela Superior y bueno todo el mundo tenía planes de  estudiar al 
      extranjero algunos querían ser médico otros abogados otro policía lo que querían ser pero yo nunca tuve esa inquietud de ir a la universidad Yo quería ser otra cosa más quise seguir los pasos de mi madre y que también me sirvió mucho mucho  de inspiración hacia donde yo quería llegar la música también significó para mí una salida del bajo mundo diría yo de la pobreza de todas esas cosas me ayudó mucho como en el 2005 tengo la oportunidad de conocer a Don Omar que me brindó de la mayor oportunidad de que me han brindado en mí en mi carrera profesional que fue de de participar en su primer disco como productor llamado Los bandoleros y luego varios meses después conozco a Naldo y a Zion y zion me  firma como parte de su nueva disquera llamada baby record en aquel entonces salí junto a De La Ghetto con la canción ven pégate en el disco de sangre nueva que fue un éxito total luego salimos en el disco de Buda family 2 para que el tiempo y que te digo desde ahí lo demás es historia.<p>

    <h3>Arcangel lanza gratuitamente su primera compilación como solista</h3>
    <p class="text-justify">En el 2007 tengo la oportunidad de hacer mi primera compilación como solista titulado la maravilla lo cual no salió a la venta Pues por problemas con la antigua disquera Ahí es donde yo decido para lanzarla gratis a través de todas las redes sociales y para mí ha sido la mejor decisión que he tomado en toda mi carrera porque ese disco tiene éxito como para que la pases bien enamorado de ti química sustancia una historia de amor Amarte es esencial que mucha gente la conoce como tengo tantas ganas de ti un disco el cual me llevó a otro nivel en tan sólo dos años de carrera llame me posiciono entre los primeros 5 artista más importante de este género teniendo 20 años diría yo también que me ayudó a presentarme en la sala más importante del Caribe el centro de Bellas Artes de Puerto Rico tres funciones máxima sin haber tenido ni siquiera un disco en la calle todos los temas eran pirateado.</p>

    <h3>Segundo disco de arcangel con looney tunes</h3>
    <p class="text-justify">En el 2008 conosco a Looney de Looney Tunes y forma parte de su equipo de trabajo  Más flow lo cual ahi producimos mi segundo disco que éste sí pudo salir a la venta se llamó el fenómeno Tuvo una acogida a nivel mundial un éxito sin precedentes donde definitivamente marcó la diferencia en este género se puede decir una de las canciones más grandes dentro de mi carrera artística se llama por Amar a ciegas que fue un éxito en el mundo entero gracias a esa canción Me gané 3 nominaciones en los premios juventud y también dos nominaciones de los premios lo nuestro no ganamos pero para eso él solamente el hecho de estar nominado junto a otras estrellas con 15 años de carrera 10 años de carrera un repertorio de más de 10 discos cada uno y uno está compitiendo en el categoría junto a ellos ya eso eso hace a uno ganador.</p>

    <h3>¿Arcangel aburrido de la música?</h3>
    <p class="text-justify">El 2008 fue un año un poco silencioso puede porque yo persona le está pasando por cosas que no me dejaban concentrarme mucho le perdí un poquito como que el cariño el amor aló aló que hacía y decidí por encerrarme en mi propio mundo no es mi propia cajita feliz y hasta el 2010 donde empieza a ver esta música Como qué aburrida como que no me llama la atención y dije Alguien tiene que salvar este género déjame yo hacer lo que yo sé hacer otra vez empiezo enamorarme nuevamente de la música empiezo a mí vuelve al escenario me vuelvo a llorar otra vez digo yo tengo 24 años Empiezo a enamorarme nuevamente de la música empiezo a mí vuelve a buscar cantar el abecedario me vuelvo a llenar es otra vez digo ven acá Yo tengo 24 años en aquel tiempo en serio Yo estoy con con esta actitud de viejo hombre que yo tengo el control de stock y volvió a hacer lo que hacía antes Gracias música música música y de ahí empezaron a salir escrito en colaboración es como Caminando en fuego Baby Rasta y Gringo que la gente se enamore mucho de mi parte.</p>

    <h4>Ahora que sabes un poco más de tu artista favorito descargarte lo mejor de sus éxitos </h4>
    <div class="text-center">
      <?php echo $htmlBody ?>
    </div>
    <a type="button" class="btn btn-info btn-block" href="<?php echo BASE_URL.'/?q=arcangel la maravilla'?>">Buscar más videos de Arcangel</a>
  </div>
</div>
<?php
require 'footer.php';



