<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>"/>
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta property="og:url"                content="<?php echo (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="DescargarVideoYotube.com | <?php echo $title ?>" />
    <meta property="og:description"        content="<?php echo $description ?>" />
    <meta property="og:image"              content="<?php echo $img ?>" />
    <meta property="fb:app_id"             content="270535033464194" />

    <?php include '../partials/header_nav.php'; ?>
      

