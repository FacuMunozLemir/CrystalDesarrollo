//* INICIO Script Formulario de contacto
const $formulario = document.querySelector("#formularioContacto");
const $btnMailto = document.querySelector("#btnMail");

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
//* FIN Script Formulario de contacto
