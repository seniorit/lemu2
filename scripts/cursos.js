const Curso = {

  id: {
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
};

document.addEventListener("DOMContentLoaded", function () {
  listarCursos();
});


function listarCursos() {
  let formData = new FormData();

  let urlAjax = url_base + "/ListarCursos";
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

function mostrarCursoDetalle(id) {

    let dataset = new FormData();
    dataset.append("id",id);
    let urlAjax = url_base + "/Mostrar";
    fetch(urlAjax, {
        method: 'POST',
        body: dataset
      })
      .then((Curso) => Curso.json())
      .then((Curso) => {
        $("#nombre").html(Curso.nombre);
        $("#descripcion").html(Curso.descripcion);

        $("#imagenactual").attr('src',`${url_baseL}assets/images/${Curso.imagen}`);

        $("#modalCuso").modal('show');
    });
  
}
