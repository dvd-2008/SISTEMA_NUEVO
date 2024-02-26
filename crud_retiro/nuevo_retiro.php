<?php
    include "../config.php";

    if(isset($_POST['agregar'])){
        $cod_ret = $_POST['cod_ret'];
        $fecha = $_POST['fecha'];
        $monto = $_POST['monto'];
        $cliente = $_POST['cliente'];

        if ($cod_ret != "" && $fecha != "" && $monto != "" && $cliente != "" ){
            $sql = "INSERT INTO retiros(cod_ret, fecha, monto, cliente) VALUES ('".$cod_ret."','".$fecha."',".$monto.",'".$cliente."')";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../retiros.php');
    }
?>