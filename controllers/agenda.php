<?php

class agenda extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function agenda()
  {
    ob_start();
    session_start();
    $data['page_tag'] = "Agenda";
    $data['page_title'] = "..::Agenda tu Cita::..";
    $data['page_name'] = "agenda";
    $data['css'] = "agenda.css";
    $data['js'] = "agenda.js";
    $this->views->getView($this, "agenda", $data);
    ob_end_flush();
  }
}
