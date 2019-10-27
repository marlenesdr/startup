// Get the modal
var modal1 = document.getElementById('miInscripcion');
var btn1 = document.getElementById("inscribir");
//var btn1 = document.getElementById("home1");

// formulario de reservas
var modal2 =  document.getElementById("miRegistro");
var btn2 = document.getElementById("registrar");

// Get the <span> element that closes the modal
//var cierre1 = document.getElementsByClassName("close")[0];
//var cierre2 = document.getElementsByClassName("close1")[0];


// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";   /* mostrar la información de php*/
    modal2.style.display = "none";
}

/*btn1.onclick = function() {
    modal.style.display = "block";
}*/

// cuando se realiza un click en reservas
btn2.onclick = function() {
    modal1.style.display = "none";
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
/*cierre1.onclick = function() {
    modal1.style.display = "none";
}
cierre2.onclick = function() {
    reservacion.style.display = "none";
}
*/
