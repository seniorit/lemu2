<?php

class cursos extends controllers
{
  public function __construct()
  {
    parent::__construct();
  }

  public function cursos()
  {
    ob_start();
    session_start();
    $data['page_tag'] = "Cursos";
    $data['page_title'] = "..::CURSOS::..";
    $data['page_name'] = "cursos";
    $data['css'] = "cursos.css";
    $data['js'] = "cursos.js";
    $this->views->getView($this, "cursos", $data);
    ob_end_flush();
  }

  public function ListarCursos()
  {
    $arrData = $this->model->GetAll();
    $html = '<div class="row">';
    foreach ($arrData as $row) {
      $html .= '
      <div class="body-rows animated ftco-animated animated ftco-animated 
      col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-2 mb-2" >
        <div class="card card-primary">
          <div class="card-header">
          <img width="50%" class=" flex-auto d-none d-xs-block d-sm-block d-lg-block" 
          src="' . images() .'cursos/'. $row['imagen'] . '" alt="Card image cap">
          <h6 class="card-title"><b>' .  $row['nombre']. '</b></h6>
          </div>
          <div class="card-body">
          <p>' . limitar_palabras($row['descripcion'],32) . '.</p>
          <button onClick="mostrarCursoDetalle('.$row['id'].')" class="btn btn-flat btn-lehum">
          Leer Más <span class="ion-ios-arrow-forward"></span></button>
          </div>
        </div>
      </div>';
    }
    $html .= '</div>';
    echo $html;
  }


  public function Mostrar(){
    if (isset($_POST['id'])) {
      $id=intval(limpiarCadena($_POST['id']));
      if ($id>0) {
        $arrData=$this->model->GetId($id);
        if (empty($arrData)) {
          $arrRspta=array('status'=>false,'msg'=>'No Existen Registros!');
        } else {
          $arrRspta=$arrData;
        }
        echo json_encode($arrRspta,JSON_UNESCAPED_UNICODE);
      }
    } else{
      header("Location:".base_URL()."Error404");
    }
    die();   
  }
}
