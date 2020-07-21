<?php
    $codigo=$usuario['NumMesa'];
    $consultaBorrar ="DELETE FROM ordenes WHERE NumMesa=$codigo";


    $resultadoBorrar = $conexion->prepare($consultaBorrar);
    $resultadoBorrar->execute();
    $usuarios = $resultadoBorrar->fetchAll(PDO::FETCH_ASSOC);


echo "El registro se ha eliminado";

?>