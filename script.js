function mostrarFormulario() {
  const valor = document.getElementById("input_costo").value;

  if (valor > 0) {
    const formData = new FormData();
    formData.append("costo", valor);

    fetch("logic.php", {
      method: "POST",
      body: formData,
    })
      .then((respuesta) => respuesta.text())
      .then((dato) => {
        document.getElementById("in_section3").innerHTML = dato;
      });
  } else {
    document.getElementById("in_section3").innerHTML = "";
  }
}

function imprimirFormularioResort() {
  const numPersonas = document.getElementById("cantidad_persona").value;
  const diasEstadia = document.getElementById("dias_estadia").value;
  const incluir = document.getElementById("inputInclude").checked;

  const mensaje = `Número de personas: ${numPersonas} <br> \nDías de estadía: ${diasEstadia} <br>\nTodo incluido: ${
    incluir ? "Sí" : "No"
  }`;

  document.getElementById("in_section3").innerHTML = `<h1>Información:<br> \n${mensaje}</h1>`;
}

function imprimirFormularioPosado() {
  const numPersonas = document.getElementById("cantidad_persona").value;
  const diasEstadia = document.getElementById("dias_estadia").value;
  const incluir = document.getElementById("inputIncludeDesayuno").checked;

  const mensaje = `Número de personas: ${numPersonas}<br>\nDías de estadía: ${diasEstadia}<br>\nIncluir desayuno: ${
    incluir ? "Sí" : "No"
  }`;

  document.getElementById("in_section3").innerHTML = `<h1>Información:<br> \n${mensaje}</h1>`;
}

function imprimirFormularioHostal() {
  const numPersonas = document.getElementById("cantidad_persona").value;
  const diasEstadia = document.getElementById("dias_estadia").value;

  const mensaje = `Número de personas: ${numPersonas}<br>\nDías de estadía: ${diasEstadia}`;

  document.getElementById(
    "in_section3"
  ).innerHTML = `<h1>Información:<br> \n${mensaje}</h1>`;
}
