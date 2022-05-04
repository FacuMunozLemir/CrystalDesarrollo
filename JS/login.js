//Declaro array de usuarios (fines de prueba en inicio de sesión)
let usuarios = [
  {
    email: "usuarioprueba@gmail.com",
    contraseña: "123",
  },
];

//Accion de boton iniciar sesión
document
  .getElementById("btnLogIn")
  .addEventListener("click", validacionUsuario);

//!Función para validar usuarios en inicio de sesión
function validacionUsuario() {
  let usuario = document.querySelector("#email").value;
  let contrasenia = document.querySelector("#password").value;
  let usuarioEncontrado = false;
  let contraseniaEncontrada = false;

  console.log(usuario);
  console.log(contrasenia);

  for (const usu of usuarios) {
    let nombreUsuario = usu.email;
    let contraseniaUsuario = usu.contraseña;
    if (nombreUsuario == usuario) {
      usuarioEncontrado = true;
      if (contraseniaUsuario == contrasenia) {
        contraseniaEncontrada = true;
        localStorage.setItem("inicioSesion", true);
        window.open("../catalogoSoftware.html", "_self");
      }
    }
    console.log(usuarioEncontrado);
    console.log(contraseniaEncontrada);
  }
}
