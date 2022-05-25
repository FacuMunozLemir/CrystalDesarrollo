//Declaro una session storage para saber si la persona inició sesión o no
estaIniciada();
function estaIniciada() {
  localStorage.getItem("inicioSesion") == "true"
    ? localStorage.setItem("inicioSesion", true)
    : localStorage.setItem("inicioSesion", false);
}

//* Sección DOM

//Hacemos focus en el boton encargado de filtrar por SO
document.querySelector("#btnFiltro").onclick = fnFiltro;

//---------------------------------------------------------------

//*Sección Funciones

//! Funcion filtro de SO
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

//! Funcion validacion de incio de sesión
function validacionLogIn() {
  let sessionUsuario = localStorage.getItem("inicioSesion");
  if (sessionUsuario == "true") {
    seleccionarProducto;
  } else {
    alert("Primero deberá inciar sesión");
    window.open("panelDeControl/login.html", "_self");
  }
}

//! Funcion conectarse al json y obtener un objeto deseado
function carritoCompras() {
  fetch("../../json/productos.json")
    .then((respuesta) => respuesta.json())
    .then((data) => {
      let objeto = data[id];
      carritoProgramas(objeto);
    });
}

//! Funcion carrito de compras
//La idea de esta funcion es almacenar los objetos en un sessionStorage cuando el usuario haga click en el boton "agregar al carrito". Pero creo que debería poner nombres distintos, por lo pronto esta funcion guarda el objeto en un sessionStorage y luego lo muestra por consola
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
