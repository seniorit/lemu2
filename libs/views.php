<?php
class views
{
  function getView($controller, $view, $data = [])
  {
    $controller = get_class($controller);
    if ($controller) {
      $view = "views/" . $view . ".php";
    } else {
      $view = "views/" . $controller . "/" . $view .  ".php";
    }
    require_once($view);
  }
}
