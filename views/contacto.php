<?php getComponent('header', $data) ?>
<div class="content-wrapper">
  <section class="content">
    <section class="card card-body">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contactenos</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-lg-6 col-xl-3 d-flex mb-4">
            <div class="info bg-light p-4">
              <p><span>Dirección:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 d-flex mb-4">
            <div class="info bg-light p-4">
              <p><span>Teléfono:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 d-flex mb-4">
            <div class="info bg-light p-4">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row block-7">

        <div class="col-lg-6 d-flex">
          <form action="#" class="bg-light p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="phone" class="form-control" placeholder="Telefono">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>

        <div class="col-lg-6 d-flex">
          <div id="map" class="bg-light"></div>
        </div>

        <script src="<?= assets(); ?>js/google-map.js"></script>

      </div>
    </section>
  </section>
</div>
<?php
getComponent('footer', $data); ?>