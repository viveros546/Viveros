function mostrarContenido() {
    var seleccion = document.getElementById("mySelectAnturio").value;
  
    // Ocultar todos los elementos
    document.getElementById("miCuenta").style.display = "none";
    document.getElementById("iniciarSesion").style.display = "none";
    document.getElementById("registrarse").style.display = "none";
  
    // Mostrar el elemento seleccionado
    if (seleccion === "opcion1") {
      document.getElementById("miCuenta").style.display = "block";
    } else if (seleccion === "opcion2") {
      document.getElementById("iniciarSesion").style.display = "block";
    } else if (seleccion === "opcion3") {
      document.getElementById("registrarse").style.display = "block";
    }
  }
  
