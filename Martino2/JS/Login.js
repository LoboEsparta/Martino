var boton = document.getElementById('No');
var input = document.getElementById('Contraseña');

boton.addEventListener('click', mostrarContraseña);

function mostrarContraseña(){
    if (input.type =="password"){
        input.type ="text";
    }
    else{
        input.type ="password";  
}
}