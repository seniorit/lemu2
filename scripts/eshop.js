const articuloM = {
  id: {
    type: String,
  },
  idcategoria: {
    type: String,
  },
  nombre: {
    type: String,
  },

  descripcion: {
    type: String,
  },

  imagen: {
    type: String,
  },

  precio: {
    type: String,
  },
};

document.addEventListener('DOMContentLoaded',function(){
  listarArticulos();
});

function listarArticulos(){
  let formData = new FormData();
  let urlAjax = url_base + "/ListarArticulos";

  fetch(urlAjax, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .catch((error) => console.error("Error:", error))
    .then((objData) => {
      $(".body-rows").append(objData);
    });
}