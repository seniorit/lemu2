<?php

class portafolio extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function portafolio()
  {
    ob_start();
    session_start();
    $data['page_tag'] = "Portafolio";
    $data['page_title'] = "Portafolio";
    $data['page_name'] = "portafolio";
    $data['css'] = "portafolio.css";
    $data['js'] = "portafolio.js";
    $this->views->getView($this, "portafolio", $data);
    ob_end_flush();
  }
}
