<?php

class contacto extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function contacto()
  {
    ob_start();
    session_start();
    $data['page_tag'] = "Contacto";
    $data['page_title'] = "..::Contacto::..";
    $data['page_name'] = "contacto";
    $data['css'] = "contacto.css";
    $data['js'] = "contacto.js";
    $this->views->getView($this, "contacto", $data);
    ob_end_flush();
  }
}
