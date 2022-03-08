<?php
class error404 extends controllers{

  public function __construct(){
    parent::__construct();
  }

  public function NotFound(){
    $this->views->getView($this,'error/error404');
  }
}

$notfound= new error404();
$notfound->NotFound();
