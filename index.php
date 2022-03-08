<?php
  error_reporting(E_ALL);
  require_once 'libs/app.php';
  require_once 'libs/helpers.php';

  $url = !empty(($_GET[strtolower('url')]))? $_GET['url']:'inicio/inicio';
  $url=$url;
  $arrUrl = explode('/',$url);
  $controller = $arrUrl[0];
  $method = $arrUrl[0];
  $params = "";

  if (!empty($arrUrl[1])) {
    if ($arrUrl[1]!="") {
      $method = $arrUrl[1];
    }
  }

  if (!empty($arrUrl[2])) {
    if ($arrUrl[2]!="") {
      for ($i=2; $i < count($arrUrl) ; $i++) {
        $params .=$arrUrl[$i].',';
      }
      $params = trim($params, ',');
    }
  }

  ini_set('ignored_repeated_errors', TRUE);
  ini_set('displays_errors', TRUE);
  ini_set('log_errors', TRUE);
  ini_set('error_log','php-error.log');

  error_log('Pagina solicitada: '.$url);

require_once('libs/autoload.php');
require_once('libs/load.php');





