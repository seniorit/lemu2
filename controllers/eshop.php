<?php

class eshop extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function eshop()
  {

    session_start();
    $data['page_tag'] = "Productos";
    $data['page_title'] = "..::PRODUCTOS::.";
    $data['page_name'] = "eshop";
    $data['css'] = "eshop.css";
    $data['js'] = "eshop.js";
    $this->views->getView($this, "eshop", $data);
  }



  public function ListarArticulos()
  {

    $arrData = $this->model->SelectGet();
    $html = '<div class="row">';
    foreach ($arrData as $row) {
      //  <img class="card-img-top" src="' . images() . $row['imagen'] . '" alt="">

      $html .= '<div class="body-rows animated ftco-animated col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="card card-cascade card-ecommerce wider shadow mb-5">
                    <div class="view view-cascade overlay text-center">
                      <img class="card-img-top" src="' . images() . 'galery/' . $row['imagen'] . '" alt="" style="width:100%">
                      <a><div class="mask rgba-white-slight">
                    </div>
                    </a>
                    </div>
                      <div class="card-body card-body-cascade text-center">
                          <h4 class="card-title">
                            <a onClick="mostrarCursoDetalle(' . $row['id'] . ')"></a>
                            </h4>
            
                          <p class="price">' . $row['nombre'] . '</p>
                        <a href=""><div class="card-footer">
                          <p>Agregar al Carrito</p>
                        </div></a>
                      </div>
                  </div>
                </div>';
    }
    $html .= '</div>';
    echo $html;
  }
}
