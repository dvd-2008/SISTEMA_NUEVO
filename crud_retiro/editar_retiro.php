<?php
    include "../config.php";

    if(isset($_POST['editar'])){
        $cod_ret = $_POST['cod_ret'];
        $fecha = $_POST['fecha'];
        $monto = $_POST['monto'];
        $cliente = $_POST['cliente'];

        if ($cod_ret != "" && $fecha != "" && $monto != "" && $cliente != "" ){
            $sql = "update retiros set fecha='".$fecha."', monto=".$monto." , cliente='".$cliente."' where cod_ret='".$cod_ret."'";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../retiros.php');
    }
?>
