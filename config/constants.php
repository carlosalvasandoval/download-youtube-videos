<?php

switch (getenv('APPLICATION_ENV'))
{
  case 'production':
    define('BASE_URL', 'https://descargarvideoyoutube.com');
    break;
  case 'localhost':
    define('BASE_URL', 'http://localhost/descargarvideoyoutube');
    break;
  default:
    define('BASE_URL', 'http://localhost/descargarvideoyoutube');
    break;
}
define('APPPATH', realpath(__DIR__ . '/..'));

echo "<script type='text/javascript'> "
 . "var base_url ='" . BASE_URL . "'"
 . "</script>";

