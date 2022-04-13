//Declaro mi array de obejtos
const arrayObjetoProgramas = [
  {
    nombre: "Mi Cochera",
    sistemaOperativo: "windows",
    categoria1: "ventas y control de stock",
    precio: 30000,
  },
  {
    nombre: "Mi Consultorio",
    sistemaOperativo: "windows",
    categoria1: "ventas y control de stock",
    precio: 60000,
  },
  {
    nombre: "Mi Restaurante",
    sistemaOperativo: "windows",
    categoria1: "ventas y control de stock",
    precio: 45000,
  },
  {
    nombre: "Mi Cochera",
    sistemaOperativo: "android",
    categoria1: "ventas y control de stock",
    precio: 25000,
  },
  {
    nombre: "Mi Carniceria",
    sistemaOperativo: "android",
    categoria1: "control de pacientes",
    precio: 40000,
  },
  {
    nombre: "Mi Restaruante",
    sistemaOperativo: "android",
    categoria1: "ventas y control de stock",
    precio: 50000,
  },
];

//Scrip Formulario de contacto
const $formulario = document.querySelector("#formulario");
const $btnMailto = document.querySelector("#trucazo");

$formulario.addEventListener("submit", handleSubmit);
function handleSubmit(event) {
  event.preventDefault();
  const form = new FormData(this);
  console.log(form.get("nombre"));
  $btnMailto.setAttribute(
    "href",
    `mailto:crystaldesarrollo@gmail.com?body=Nombre: ${form.get(
      "nombre"
    )}, Telefono:${form.get("numero")}, Correo:${form.get(
      "email"
    )}, Mensaje:${form.get("mensaje")}`
  );
  $btnMailto.click();
}

//Hacemos focus en el boton encargado de filtrar por SO
document.querySelector("#btnFiltro").onclick = fnFiltro;

//Sección Funciones
// ! Funcion filtro de SO
function fnFiltro() {
  let idSO = document.getElementById("selectSO");
  let SO = idSO.options[idSO.selectedIndex].value;

  if (SO == "windows") {
    [].forEach.call(document.querySelectorAll(".android"), function (el) {
      el.style.visibility = "hidden";
      el.style.position = "absolute";
    });
    [].forEach.call(document.querySelectorAll(".windows"), function (el) {
      el.style.visibility = "visible";
      el.style.position = "relative";
    });
  } else if (SO == "android") {
    [].forEach.call(document.querySelectorAll(".windows"), function (el) {
      el.style.visibility = "hidden";
      el.style.position = "absolute";
    });
    [].forEach.call(document.querySelectorAll(".android"), function (el) {
      el.style.visibility = "visible";
      el.style.position = "relative";
    });
  } else {
    [].forEach.call(document.querySelectorAll(".android"), function (el) {
      el.style.visibility = "visible";
      el.style.position = "relative";
    });
    [].forEach.call(document.querySelectorAll(".windows"), function (el) {
      el.style.visibility = "visible";
      el.style.position = "relative";
    });
  }
}
