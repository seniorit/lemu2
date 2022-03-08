<?php

class cursosmodel extends sqlpdo
{
  private $Id;
  private $Fecha;
  private $Duracion;
  private $Nombre;
  private $Descripcion;
  private $Costo;

  public function __construct()
  {
    parent::__construct();
  }


  public function GetAll()
  {
    try {
      $sql = "SELECT 
      id,
      orden,
      nombre,
      descripcion,
      costo,
      duracion,
      DATE_FORMAT(fecha_ini,'%d/%m/%Y') AS fecha_ini,
      DATE_FORMAT(fecha_fin,'%d/%m/%Y') AS fecha_fin,
      imagen,
      pdf
      FROM tbcursos
      ORDER BY orden ASC";
      $req = $this->SelectAll($sql);
      return $req;
    } catch (PDOException $e) {
       echo '{"error" : {"text":' . $e->getMessage() . '}';
    }
  }


  public function GetId($id)
  {
    try {
      $this->Id = $id;
      $sql = "SELECT 
      id,
      orden,
      nombre,
      descripcion,
      costo,
      duracion,
      DATE_FORMAT(fecha_ini,'%d/%m/%Y') AS fecha_ini,
      DATE_FORMAT(fecha_fin,'%d/%m/%Y') AS fecha_fin,
      imagen,
      pdf
      FROM tbcursos WHERE id='$this->Id'";
      $req = $this->Select($sql);
      return $req;
    } catch (PDOException $e) {
      return PDOError($e, '');
    }
  }


}
