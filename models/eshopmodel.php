<?php

class eshopmodel extends sqlpdo
{
private $Id;
private $Idcategoria;
private $Nombre;
private $Descripcion;
private $Precio;

  public function __construct()
  {
    parent::__construct();
  }


  public function SelectId($id)
  {
    try {
      $this->Id = $id;
      $sql = "SELECT 
      id,
      idcategoria,   
      nombre,
      descripcion,
      precio,
      imagen
      FROM tbarticulo WHERE id='$this->Id'";
      $req = $this->Select($sql);
      return $req;
    } catch (PDOException $e) {
      return PDOError($e, '');
    }
  }

  public function SelectGet()
  {
    try {
      $sql = "SELECT 
      id,
      idcategoria,   
      nombre,
      descripcion,
      precio,
      imagen
      FROM tbarticulo";
      $req = $this->SelectAll($sql);
      return $req;
    } catch (PDOException $e) {
       echo '{"error" : {"text":' . $e->getMessage() . '}';
    }
  }
}
