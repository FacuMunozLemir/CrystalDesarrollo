//* Inicio de programa en si

//Declaro mi array de objetos
const arrayObjetoProgramas = [
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
];

//Declaro una session storage para saber si la persona inició sesión o no
estaIniciada();
function estaIniciada() {
  localStorage.getItem("inicioSesion") == "true"
    ? localStorage.setItem("inicioSesion", true)
    : localStorage.setItem("inicioSesion", false);

  // if (localStorage.getItem("inicioSesion") == "true") {
  //   localStorage.setItem("inicioSesion", true);
  //   console.log("Entro al true");
  // } else {
  //   localStorage.setItem("inicioSesion", false);
  //   console.log("Entro al false");
  // }
}

//Hacemos focus en el boton encargado de filtrar por SO
document.querySelector("#btnFiltro").onclick = fnFiltro;

//Agregar elementos a carrito
document
  .querySelector("#btnMiCocheraAndroid")
  .addEventListener("click", validacion);

document.querySelector("#btnMiCarniceriaAndroid").onclick = () => {
  let objeto = arrayObjetoProgramas[1];
  carritoProgramas(objeto);
};

//---------------------------------------------------------------
//*Sección Funciones

//! Funcion para ver si la persona inició sesión
function validacion() {
  let sessionUsuario = localStorage.getItem("inicioSesion");
  if (sessionUsuario == "true") {
    let objeto = arrayObjetoProgramas[0];
    carritoProgramas(objeto);
  } else {
    alert("Primero deberá inciar sesión");
    window.open("panelDeControl/login.html", "_self");
  }
}

//! Funcion filtro de SO
function fnFiltro() {
  let idSO = document.getElementById("selectSO");
  let SO = idSO.options[idSO.selectedIndex].value;

  if (SO == "windows") {
    Swal.fire("Exito", "Se encontraron programas para S.O. Windows", "success");
    [].forEach.call(document.querySelectorAll(".android"), function (el) {
      el.style.visibility = "hidden";
      el.style.position = "absolute";
    });
    [].forEach.call(document.querySelectorAll(".windows"), function (el) {
      el.style.visibility = "visible";
      el.style.position = "relative";
    });
  } else if (SO == "android") {
    Swal.fire("Exito", "Se encontraron programas para S.O. Android", "success");
    [].forEach.call(document.querySelectorAll(".windows"), function (el) {
      el.style.visibility = "hidden";
      el.style.position = "absolute";
    });
    [].forEach.call(document.querySelectorAll(".android"), function (el) {
      el.style.visibility = "visible";
      el.style.position = "relative";
    });
  } else {
    Swal.fire("Exito", "Se encontraron programas para S.O. Android", "success");
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

// ! Funcion constructora
function constructorProgramas(nombre, so, precio) {
  this.nombrePrograma = nombre;
  this.sistemaOperativoPrograma = so;
  this.precioPrograma = precio;
}

//! Funcion carrito de compras
//La idea de esta fucnion es almacenar los objetos en un sessionStorage cuando el usuario haga click en el boton "agregar al carrito". Pero creo que debería poner nombres distintos, por lo pronto esta funcion guarda el objeto en un sessionStorage y luego lo muestra por consola
function carritoProgramas(objeto) {
  sessionStorage.setItem("programaElegido", JSON.stringify(objeto));

  let programaEle = sessionStorage.getItem("programaElegido");
  const programaElegido1 = JSON.parse(programaEle);
  console.log(programaElegido1);
  for (let i = 0; i < sessionStorage.length; i++) {
    let key = "programaElegido";
    let c = sessionStorage.key(i);
    console.log("Llave: " + c);
    console.log(sessionStorage.getItem(c));
  }
}
