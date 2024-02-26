<?php
    include "../config.php";

    if(isset($_POST['editar'])){
        $cod_d = $_POST['cod_dep'];
        $fech = $_POST['fecha'];
        $mon = $_POST['monto'];
        $cliente = $_POST['cliente'];

        if ($cod_d != "" && $fech != "" && $mon != "" && $cliente != "" ){
            $sql = "update depositos set fecha='".$fech."', monto='".$mon."' , cliente='".$cliente."' where cod_dep='".$cod_d."'";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../deposito.php');
    }
?>
