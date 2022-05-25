const arrayCarrito = [];

class Carrito {
  // Lo primero es agregar el producto al carrito
  comprarProducto(e) {
    e.preventDefault();
    if (e.target.classList.contains("carrito")) {
      const producto = e.target.parentElement.parentElement;
      this.leerDatosProducto(producto);
    }
  }

  leerDatosProducto(producto) {
    const infoProducto = {
      titulo: producto.querySelector("h3").textContent,
      id: producto.querySelector("a").getAttribute("data-id"),
      cantidad: 1,
      precio: producto.querySelector(".precio").textContent,
    };
    arrayCarrito.push(infoProducto);
    localStorage.setItem("productosElegidos", JSON.stringify(arrayCarrito));
    let programaEle = localStorage.getItem("productosElegidos");
    const programaElegido1 = JSON.parse(programaEle);
    console.log(programaElegido1);
    Swal.fire("Exito", "El software se agrego correctamente", "success");
    // console.log(localStorage.getItem("productosElegidos"));
  }
}

carritoDeCompras();

document
  .querySelector(".btnCancelarCompra")
  .addEventListener("click", cancelarCompra);

document
  .querySelector(".btnRealizarCompra")
  .addEventListener("click", realizarCompra);

document
  .querySelector(".pagarAhora")
  .addEventListener("click", confirmarCompra);

//--------------------------------------------------------------------------------------------

function carritoDeCompras() {
  let arrayObjetos = localStorage.getItem("productosElegidos");
  let arrayObjetos1 = JSON.parse(arrayObjetos);
  let sumaTotal = 0;

  for (let i = 0; i < arrayObjetos1.length; i++) {
    let clase = "cuerpoProductos__productoSeleccionado" + " " + i;
    let contenedor1 = document.createElement("div");
    contenedor1.className = clase;
    document.querySelector(".cuerpoProductos").appendChild(contenedor1);

    let nombreSoftware = document.createElement("h2");
    nombreSoftware.className = "nombreObjeto";
    nombreSoftware.innerHTML = arrayObjetos1[i].titulo;
    contenedor1.appendChild(nombreSoftware);

    let cantidadSoftware = document.createElement("h2");
    cantidadSoftware.className = "cantidadObjeto";
    cantidadSoftware.innerHTML = "1";
    contenedor1.appendChild(cantidadSoftware);

    let precioSoftware = document.createElement("h2");
    precioSoftware.className = "precioObjeto" + " " + i;
    precioSoftware.innerHTML = "$";
    contenedor1.appendChild(precioSoftware);

    let precioSoftware2 = document.createElement("span");
    precioSoftware2.innerHTML = arrayObjetos1[i].precio;
    precioSoftware.appendChild(precioSoftware2);

    let eliminar = document.createElement("a");
    eliminar.className = "btnEliminar" + " " + i;
    contenedor1.appendChild(eliminar);

    let eliminarIcono = document.createElement("i");
    eliminarIcono.className = "fa-solid fa-trash";
    eliminar.appendChild(eliminarIcono);

    let precioTotal = arrayObjetos1[i].precio;

    sumaTotal = parseInt(sumaTotal) + parseInt(precioTotal);
  }
  console.log(sumaTotal);
  let span = document.querySelector("#valorFinal");
  span.innerHTML = sumaTotal;
}

function cancelarCompra() {
  Swal.fire({
    title: "Seguro que desea vaciar el carrito?",
    text: "Será redirigido al catálogo de sotware",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, vaciar carrito!",
  }).then((result) => {
    if (result.isConfirmed) {
      localStorage.removeItem("productosElegidos");
      window.open("catalogoSoftware.html", "_self");
    }
  });
}

function realizarCompra() {
  document.querySelector(".formularioTarjeta").style.visibility = "visible";
}

function confirmarCompra() {
  let timerInterval;
  Swal.fire({
    title: "Verificando los datos ingresados",
    html: "Espere un momento",
    timer: 2000,
    timerProgressBar: true,
    didOpen: () => {
      Swal.showLoading();
      const b = Swal.getHtmlContainer().querySelector("b");
      timerInterval = setInterval(() => {
        b.textContent = Swal.getTimerLeft();
      }, 100);
    },
    willClose: () => {
      clearInterval(timerInterval);
    },
  }).then((result) => {
    if (result.dismiss === Swal.DismissReason.timer) {
      Swal.fire({
        title: "Gracias por su compra",
        text: "La descarga comenzará de manera automática",
        icon: "success",
      }).then(function () {
        localStorage.removeItem("productosElegidos");
        window.location = "catalogoSoftware.html";
      });
    }
  });
}
