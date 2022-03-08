<?php
class conexion
{
  private $conexion;
  private $dbDriver;
  private $dbHost;
  private $dbDatabase;
  private $dbCharset;
  private $dbUser;
  private $dbPass;
  private $dbPort;

  public function __construct()
  {
    $listadatos = $this->datosConexion();
    foreach ($listadatos as $value) {
      $this->dbDriver= $value['driver'];
      $this->dbHost = $value['host'];
      $this->dbPort = $value['port'];
      $this->dbDatabase = $value['database'];
      $this->dbCharset= $value['charset'];
      $this->dbUser = $value['user'];
      $this->dbPass = $value['password'];
    }

    $cnn="$this->dbDriver:host=$this->dbHost;port=$this->dbPort;dbname=$this->dbDatabase;charset=$this->dbCharset";
    try {
      $this->conexion= new PDO($cnn,$this->dbUser, $this->dbPass,[PDO::ATTR_PERSISTENT=>true]);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      error_log('Error connection: ' . $e->getMessage());
    }
  }

  private function datosConexion()
  {
    $direccion = 'libs';
    $jsondata = file_get_contents($direccion . "/" . "config.json");
    return json_decode($jsondata, true);
  }

  public function Conect()
  {
    return $this->conexion;
  }
}
