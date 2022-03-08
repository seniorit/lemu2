<div class="row">
  <?php foreach($data as $row):?>
  <div class="animated ftco-animated col-md-4 col-lg-4 col-xs-12" style="padding-bottom:20px;">
    <div class="card card-primary">
      <div class="card-header">
        <img width="50%" height="50%" class="card-img-right flex-auto d-none 
          d-xs-block d-sm-block d-lg-block" src="" alt="">
        <h5 class="card-title"><?php echo $row['nombre'] ?></h5>
      </div>
      <div class="card-body">
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint neque vel quod totam aliquid doloribus
          odit soluta fuga cum magni repellendus ratione quia aut provident, eum iusto illum optio at!
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint neque vel quod totam aliquid doloribus
          odit soluta fuga cum magni repellendus ratione quia aut provident, eum iusto illum optio at!</p>
        <button onClick="mostrarCursoDetalle(<?php echo $row['id'] ?>)" class="btn btn-flat ">
          Leer Más <span class="ion-ios-arrow-forward"></span></button>
      </div>
    </div>
    <?php endforeach ?>
  </div>
