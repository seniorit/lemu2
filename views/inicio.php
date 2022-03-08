<?php
getComponent('header', $data)
?>
<div class="main-section">


  <div id="wrap" class="container my-5 animated ftco-animated">
    <div class="row">
      <div class="col-12">

        <!-- Carousel -->
        <div id="carousel" class="carousel slide gallery" data-ride="carousel">
          <div class="carousel-inner animated ftco-animated" id="carousel1">
          </div>

          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>


        </div>

        <!-- Carousel Navigatiom -->
        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="row col-12" id="mini-image">
              <div class="carousel-item active" id="thum"></div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="form-group" id="cursos">
    <div class="row">

      <div class="body-rows animated ftco-animated col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-2">
        <div class="card card-primaryh">
          <div class="row">
            <div class="col-12">
              <img width="" class=" flex-auto d-lg-block d-md-block d-sm-block d-xs-block w-100" src="<?php echo assets() ?>images/cursos/BASICO.jpg" alt="Card image cap">
            </div>
            <div class="col-12 text-center">
              <h6 class="card-title">AUTOMAQUILLAJE</h6>
              <div class="inicio-footer-div-bottom">
                <button class="btn btn-secondary btn-flat"> Ir al Curso</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="body-rows animated ftco-animated col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-2">
        <div class="card card-primaryh">
          <div class="row">
            <div class="col-12">
              <img width="" class=" flex-auto d-lg-block d-md-block d-sm-block d-xs-block w-100" src="<?php echo assets() ?>images/cursos/BASICO.jpg" alt="Card image cap">
            </div>
            <div class="col-12 text-center">
              <h6 class="card-title">BÁSICO PROFESIONAL</h6>
              <div class="inicio-footer-div-bottom">
                <button class="btn btn-secondary btn-flat"> Ir al Curso</button>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="body-rows animated ftco-animated col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-2">
        <div class="card card-primaryh">
          <div class="row">
            <div class="col-12">
              <img width="" class=" flex-auto d-lg-block d-md-block d-sm-block d-xs-block w-100" src="<?php echo assets() ?>images/cursos/INTERMEDIO.jpg" alt="Card image cap">
            </div>
            <div class="col-12 text-center">
              <h6 class="card-title">INTERMEDIO PROFESIONAL</h6>
              <div class="inicio-footer-div-bottom">
                <button class="btn btn-secondary btn-flat"> Ir al Curso</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="body-rows animated ftco-animated col-lg-3 col-md-6 col-sm-6 col-xs-12 mt-2">
        <div class="card card-primaryh">
          <div class="row">
            <div class="col-12">
              <img width="" class=" flex-auto d-lg-block d-md-block d-sm-block d-xs-block w-100" src="<?php echo assets() ?>images/cursos/AVANZADO.jpg" alt="Card image cap">
            </div>
            <div class="col-12 text-center">
              <h6 class="card-title">AVANZADO PROFESIONAL</h6>
              <div class="inicio-footer-div-bottom">
                <button class="btn btn-secondary btn-flat"> Ir al Curso</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="inicio-footer-div-bottom text-center">
      <button class="btn btn-secondary btn-flat"><a href="cursos">Cursos</a></button>
    </div>
  </div>

  <div id="agenda" class="from-group">
    <div class="card">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="carousel slide" data-ride="carousel" id="cita-carr">

            <a class="carousel-control-prev" href="#cita-carr" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#cita-carr" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="button-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img src="<?php echo images() ?>logo/logo02.png" href="<?php echo images() ?>logo/logo02.png" class=" w-75">
          <a href="agenda"> <button class="btn btn-secondary btn-flat"> Agenda tu Cita</button></a>
        </div>
      </div>
    </div>
  </div>
</div>





</div>


<?php
getComponent('footer', $data)
?>