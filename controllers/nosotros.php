<?php

class nosotros extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function nosotros()
  {
    ob_start();
    session_start();
    $data['page_tag'] = "Nosotras";
    $data['page_title'] = "..::NOSOTRAS::..";
    $data['page_name'] = "nosotros";
    $data['css'] = "nosotros.css";
    $data['js'] = "nosotros.js";
    $this->views->getView($this, "nosotros", $data);
    ob_end_flush();
  }
}