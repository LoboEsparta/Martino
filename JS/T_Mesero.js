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


var bottom = document.getElementById('Contra');
var imagen = document.getElementById('Nose');

imagen.addEventListener('click', mostrar);

function mostrar(){
    if(bottom.type =="password"){
        bottom.type ="text";
    }
    else{
        bottom.type ="password";
    }
}


function cambiar(){
    document.getElementById("Confirma").innerHTML = "Orden lista";
}

document.getElementById("Final").onclick = function(){
    cambiar();
};

function eliminar(){
   var tarjeta = document.getElementById('Eliminar');
    tarjeta.remove(tarjeta)
};

function eliminada(){
    var tarjeta = document.getElementById('Eliminada');
     tarjeta.remove(tarjeta)
 };
