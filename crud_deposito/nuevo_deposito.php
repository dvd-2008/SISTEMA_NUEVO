<?php
    include "../config.php";

    if(isset($_POST['agregar'])){
        $cod_d = $_POST['cod_dep'];
        $fech = $_POST['fecha'];
        $mon = $_POST['monto'];
        $cliente = $_POST['cliente'];

        if ($cod_d != "" && $fech != "" && $mon != "" && $cliente != "" ){
            $sql = "insert into depositos(cod_dep, fecha, monto, cliente) values ('".$cod_d."','".$fech."','".$mon."','".$cliente."')";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../deposito.php');
    }
?>
