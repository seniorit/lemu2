<?php

function base_URL()
{
  return URL;
}

/**
 * assets/
*/
function assets()
{
  return URL . "assets/";
}

/**
 * assets/images/
 */
function images()
{
  return URL . "assets/images/";
}

function models()
{
  return URL . "models/";
}

function scripts()
{
  return URL . "scripts/";
}

function getNavBar($data = "")
{
  $view_navbar = "./views/templates/navbar.php";
  return require_once $view_navbar;
}

function getRecursos($data = "")
{
  $data_resources = "./views/templates/recursos.php";
  return require_once $data_resources;
}

function getHeader($data = "")
{
  $data_resources = "./views/templates/header.php";
  return require_once $data_resources;
}

function getFooter($data = "")
{
  $data_resources = "./views/templates/footer.php";
  return require_once $data_resources;
}

function getLink($data = "")
{
  $data_resources = "./views/templates/link.php";
  return require_once $data_resources;
}

function getComponent($name,$data = "")
{
  $data_resources = "./views/templates/" . $name . ".php";
  return require_once $data_resources;
}

function getComponentToRoute($data = ""){
  $data_resources ='';
  return $data_resources;
}

function getModal($name, $data = "")
{
  $data_resources = "./views/templates_modal/" . $name . ".php";
  return require_once $data_resources;
}

function getSocial1(){
  $link="https://www.facebook.com/pages/category/Product-Service/Lehumigsmakeup-107518577508159/";
  return $link;
}

function getSocial2(){
  $link="https://www.twitter.com/";
  return $link;
}

function getSocial3(){
  $link="https://www.instagram.com/";
  return $link;
}



function cortar_cadena($texto, $largo = 10, $puntos = "...")
{
  $palabras = explode(' ', $texto);
  if (count($palabras) > $largo) {
    return implode(' ', array_slice($palabras, 0, $largo)) . " " . $puntos;
  } else {
    return $texto;
  }
}

function limitar_palabras($string, $numwords)
{
  $excerpt = explode(' ', $string, $numwords + 1);

  if (count($excerpt) >= $numwords) {
    array_pop($excerpt);
  }

  $excerpt = implode(' ', $excerpt);
  return $excerpt;
}

function limpiarCadena($strCadena)
{
  $string = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $strCadena);
  $string = trim($strCadena);
  $string = str_ireplace(' ', '', $strCadena);
  $string = stripslashes($strCadena);
  $string = str_ireplace("<script>", "", $string);
  $string = str_ireplace("</script>", "", $string);
  $string = str_ireplace("<script src>", "", $string);
  $string = str_ireplace("<script type=>", "", $string);
  $string = str_ireplace("SELECT * FROM", "", $string);
  $string = str_ireplace("INSERT INTO", "", $string);
  $string = str_ireplace("DELETE FROM", "", $string);
  $string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
  $string = str_ireplace("DROP TABLE", "", $string);
  $string = str_ireplace("OR '1'='1'", "", $string);
  $string = str_ireplace('OR "1"="1"', "", $string);
  $string = str_ireplace('OR ´1´=´1´', "", $string);
  $string = str_ireplace("is NULL; --", "", $string);
  $string = str_ireplace('is NULL; --', "", $string);
  $string = str_ireplace('IFNULL; --', "", $string);
  $string = str_ireplace("IFNULL; --", "", $string);
  $string = str_ireplace('LIKE "', "", $string);
  $string = str_ireplace("LIKE '", "", $string);
  $string = str_ireplace("LIKE ´", "", $string);
  $string = str_ireplace("OR 'a'='a", "", $string);
  $string = str_ireplace('OR "a"="a', "", $string);
  $string = str_ireplace("OR ´a´=´a", "", $string);
  $string = str_ireplace("OR ´a´=´a", "", $string);
  $string = str_ireplace("--", "", $string);
  $string = str_ireplace("^", "", $string);
  $string = str_ireplace("[", "", $string);
  $string = str_ireplace("]", "", $string);
  $string = str_ireplace("==", "", $string);
  return $string;
}


function dep($data)
{
  $format = print_r('<pre>');
  $format .= print_r($data);
  $format .= print_r('</pre>');
  return $format;
}


/**
 * Funcion para Capturar Errores en PDO

 * Se Recibe el Codigo de Error y Retornamos
 * la vartiable correspondiente
 * Se retorna solo los Siguientes Errores:
 *1451: Registros Relacionados
 *1062: Valores Duplicados
 *1054: Campo Desconocido/Invalido

 * @author: Ricardo Albornoz
 * @param mixed $error_get: Código de Error PDO:getCode()
 * @param mixed $tipo: Tipo de Operacion Realizada:update/insert/delete
 * @return string : relacion/duplicado/desconocido/
 */
function PDOError($error_get, $tipo)
{
  //CAPTURA EL MENSAJE
  $driver = "mysql";
  if ($driver == 'mysql') {
    switch ($error_get->getCode()) {
      case 23000:
        //SELECCION AL MENSAJE PARA VERIFICAR EN ERROR
        $serror = $error_get->getMessage();
        $array_error = explode(" ", $serror);

        // VERIFICA EL EL AREGLO (ARRAY getMessage()) EL CODIGO ENCONTRADO
        if (in_array("1451", $array_error)) {
          return 'relacion'; //Registros Relacionados
        } elseif (in_array("1062", $array_error)) {
          return 'duplicado'; //Valores Duplicados
        } elseif (in_array("1054", $array_error)) {
          return 'desconocido'; //Campo desconocido
        } else {
          if ($tipo == 'insert') {
            return "Error Insertando Registros!";
          } elseif ($tipo == 'update') {
            return "Error Editando Registros!";
          } elseif ($tipo == 'delete') {
            return "Error Eliminado Registros!";
          } else {
            return "Error Procesando el Registro!";
          }
        }
        // no break
      default:
        if ($tipo == 'insert') {
          return "Error Insertando Registros!";
        } elseif ($tipo == 'update') {
          return "Error Editando Registros!";
        } elseif ($tipo == 'delete') {
          return "Error Eliminado Registros!";
        } else {
          return "Error Procesando el Registro!";
        }
    }
  }
}
//