//Menu desplegable abierto
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

//Menu desplegable cerrado
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

//Limitar la cantidad de digitos que pueden haber en num_celular y num_documento
document.getElementById('num_limitado').addEventListener('input', function() {
  let validar = this.validar;
  
  // Limitar a 10 dígitos
  if (validar.length > 10) {
    this.validar = validar.slice(0, 10);
  }
});

//Validacion mayor de edad
document.getElementById("validacion").addEventListener("submit", function (event) {
  event.preventDefault(); // Prevenir el envío del formulario

  const fecha_nacimientoInput = document.getElementById("fecha_nacimiento");
  const errorMessage = document.getElementById("error-message");

  const fecha_nacimiento = new Date(fecha_nacimientoInput.value);
  const hoy = new Date();
  const edad = hoy.getFullYear() - fecha_nacimiento.getFullYear();
  const mes = hoy.getmes() - fecha_nacimiento.getmes();

  // Si el mes actual es anterior al mes de nacimiento, o si estamos en el mismo mes pero el día aún no ha llegado
  if (mes < 0 || (mes === 0 && hoy.getDate() < fecha_nacimiento.getDate())) {
    edad--;
  }

  // Verificar si la edad es mayor o igual a 18 años
  if (edad >= 18) {
    errorMessage.style.display = "none"; // Ocultar mensaje de error si es mayor de edad
    alert("Eres mayor de edad. ¡Acceso permitido!");
  } else {
    errorMessage.style.display = "block"; // Mostrar mensaje de error si es menor de edad
  }
});
