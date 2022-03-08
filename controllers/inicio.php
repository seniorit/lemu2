<?php

class inicio extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function inicio()
  {
    ob_start();
    session_start();
    $data['page_tag'] = "Inicio";
    $data['page_title'] = "..::INICIO::..";
    $data['page_name'] = "inicio";
    $data['css'] = "inicio.css";
    $data['js'] = "inicio.js";
    $this->views->getView($this, "inicio", $data);
    ob_end_flush();
  }

  public function imageGalery()
  {
    $arrData = $this->model->GaleryImages();
    $html = '<div class="carousel-inner">';
    foreach ($arrData as $row) {
      $active=$row['id']==1?'active':'';
      $html .= '
      <div class="carousel-item '.$active.' " data-slide-number="'.($row['id']).'" data-toggle="lightbox" data-gallery="gallery" 
      data-remote="' . images() . 'galery/' . $row['imagen'] . '">
      <img src="' . images() . 'galery/' . $row['imagen'] . '" class="d-block w-100" alt="...">
      </div>';
    }
    $html .= '</div>';
    echo $html;
  }

  public function imageGaleryCita()
  {
    $arrData = $this->model->GaleryImages();
    $html = '<div class="carousel-inner">';
    foreach ($arrData as $row) {
      $active=$row['id']==1?'active':'';
      $html .= '
      <div class="carousel-item '.$active.'">
        <img src="' . images() . 'galery/' . $row['imagen'] . '" alt="" class="d-lg-block d-md-block d-sm-block d-xs-block w-100">
      </div>';
    }
    $html .= '</div>';
    echo $html;
  }

  public function imageGaleryThumnail()
  {

    $arrData = $this->model->GaleryImages();
    $html = '<div class="row mx-0">';
    foreach ($arrData as $row) {
      $active=$row['id']==1?'selected':'';
      $html .= '
      <div id="carousel-selector-'.($row['id']).'" class="thumb col-3 px-1 py-2 '.$active.'" 
      data-target="#carousel" data-slide-to="'.($row['id']-1).'">
        <img src="' . images() . 'galery/' . $row['imagen'] . '" class="img-fluid" alt="' . $row['imagen'] . '">
      </div>';
    }
    $html .= '</div>';
    echo $html;
  }







  
}
