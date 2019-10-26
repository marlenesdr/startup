// Get the modal
var modal = document.getElementById('myCotizacion1');

// Get the button that opens the modal
var btn = document.getElementById("inscribirse");
//var btn1 = document.getElementById("home1");

// formulario de reservas
var reservacion =  document.getElementById("myCotizacion2");
var btn2 = document.getElementById("registrarse");

// Get the <span> element that closes the modal
var cierre1 = document.getElementsByClassName("close")[0];
var cierre2 = document.getElementsByClassName("close1")[0];


// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";   /* mostrar la información de php*/
}

/*btn1.onclick = function() {
    modal.style.display = "block";
}*/

// cuando se realiza un click en reservas
btn2.onclick = function() {
    reservacion.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
cierre1.onclick = function() {
    modal.style.display = "none";
}
cierre2.onclick = function() {
    reservacion.style.display = "none";
}
