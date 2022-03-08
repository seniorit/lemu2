<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container"><a href="inicio" class="navbar-brand"><img id="logo" src="<?php echo images() ?>logo/logo01.png" alt=""></a>
      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="nosotros" class="nav-link text-uppercase ">NOSOTRAS <span class="sr-only">(current)</span></a></li>
          <li class="nav-item"><a href="eshop" class="nav-link text-uppercase ">PRODUCTOS</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-uppercase ">AGENDA</a></li>
          <li class="nav-item"><a href="cursos" class="nav-link text-uppercase ">CURSOS</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-uppercase ">PORTAFOLIO</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-uppercase ">BLOG</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-uppercase ">CONTACTO</a></li>
          <div class="social-nv">
            <li><a class="social-button facebook" href="<?= getSocial1() ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="social-button twitter" href="<?= getSocial2() ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a class="social-button instagram" href="<?= getSocial3() ?>" target="_blank"><i class="fab fa-instagram"></i></a></i>
          </div>
        </ul>
      </div>
    </div>
  </nav>
</header>