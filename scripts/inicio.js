
document.addEventListener("DOMContentLoaded", function () {
  listarCarousel();
  listarCarouselThum();
  listarCarouselCita();
});

function listarCarousel(){
  let formData = new FormData();

  let urlAjax = url_base + "/imageGalery";
  fetch(urlAjax, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((objData) => {
      $("#carousel").append(objData);
    });
}

function listarCarouselCita(){
  let formData = new FormData();

  let urlAjax = url_base + "/imageGaleryCita";
  fetch(urlAjax, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((objData) => {
      $("#cita-carr").append(objData);
    });
}

function listarCarouselThum(){
  let formData = new FormData();

  let urlAjax = url_base + "/imageGaleryThumnail";
  fetch(urlAjax, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((objData) => {
      $("#thum").append(objData);
    });
}



var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("slide-thumbnail");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
   slides[i].style.display = "none";

  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

}











