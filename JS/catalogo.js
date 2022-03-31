let seleccionSO = parseInt(
  prompt(
    "Ingrese el número dependiendo del sistema que desee comprar \n 1- Para computadora \n 2- Para smartphone"
  )
);

if (seleccionSO == 1) {
  let programa = parseInt(
    prompt(
      "Ingrese el número del sistema que desee comprar \n 1- Programa de control de ventas (restaruante) \n 2- Programa de control de alumnos y ventas (Gimnasio) \n 3- Programa medico con control de fichas"
    )
  );
  switch (programa) {
    case 1:
      alert(
        "Usted está por comprar el programa para computadora (SO Windows) para control de ventas (restaruante)"
      );
      continuar = prompt("Desea continuar S o N");
      if (continuar == "S" || continuar == "s") {
        let costoTotal = costoPrograma(30000);
        alert("El monto a pagar es de: " + costoTotal + " IVA incluido");
      }
      break;
    case 2:
      alert(
        "Usted está por comprar el programa para computadora (SO Windows) para control de alumnos y ventas (Gimnasio)"
      );
      continuar = prompt("Desea continuar S o N");
      if (continuar == "S" || continuar == "s") {
        let costoTotal = costoPrograma(25000);
        alert("El monto a pagar es de: $" + costoTotal + " IVA incluido");
      }
      break;
    case 3:
      alert(
        "Usted está por comprar el programa medico para computadora (SO Windows) para control de fichas"
      );
      continuar = prompt("Desea continuar S o N");
      if (continuar == "S" || continuar == "s") {
        let costoTotal = costoPrograma(50000);
        alert("El monto a pagar es de $:" + costoTotal + " IVA incluido");
      }
      break;
    default:
      console.log("El numero ingresado no es correcto");
  }
} else {
  let programa = parseInt(
    prompt(
      "Ingrese el número del sistema que desee comprar \n 1- Programa de control de vehículos (cochera)\n 2- Programa de ventas y stock (carnicería) \n 3- Programa de control de clientes (gimnasio)"
    )
  );
  switch (programa) {
    case 1:
      alert(
        "Usted está por comprar el programa para smartphones (SO Android) para control de vehículos (cochera)"
      );
      continuar = prompt("Desea continuar S o N");
      if (continuar == "s" || continuar == "S") {
        let costoTotal = costoPrograma(20000);
        alert("El monto a pagar es de $" + costoTotal + " IVA incluido");
      }
      break;
    case 2:
      alert(
        "Usted está por comprar el programa para smartphones (SO Android) para control ventas  (Carnicería)"
      );
      continuar = prompt("Desea continuar S o N");
      if (continuar == "S" || continuar == "s") {
        let costoTotal = costoPrograma(40000);
        alert("El monto a pagar es de $" + costoTotal + " IVA incluido");
      }
      break;
    case 3:
      alert(
        "Usted está por comprar el programa para smartphones (SO Android) para control de clientes (gimnasio)"
      );
      continuar = prompt("Desea continuar S o N");
      if (continuar == "s" || continuar == "S") {
        let costoTotal = costoPrograma(17000);
        alert("El monto a pagar es de $" + costoTotal + " IVA incluido");
      }
      break;
    default:
      console.log("El numero ingresado no es correcto" + " IVA incluido");
  }
}

function costoPrograma(valor) {
  let costoTotal = valor * 1.21;
  return costoTotal;
}
