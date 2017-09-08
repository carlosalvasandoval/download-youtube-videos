<?php
require_once '/vendor/vendor/autoload.php';
$app = include_once('bootstrap.php');

$app->runWithRoute('index');
