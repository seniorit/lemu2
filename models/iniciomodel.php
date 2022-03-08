<?php
class iniciomodel extends sqlpdo{

    public function __construct(){
      parent::__construct();
    }

    public function GaleryImages(){
      try {
        $sql="SELECT * FROM tbinicio_galery";
        $request=$this->SelectAll($sql);
        return $request;
      } catch (PDOException $e) {
        return PDOError($e, '');
      }
    }

    


}