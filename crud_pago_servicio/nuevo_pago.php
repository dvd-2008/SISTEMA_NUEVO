<?php
    include "../config.php";

    if(isset($_POST['agregar'])){
        $cod_d = $_POST['cod_pag'];
        $concepto = $_POST['concepto'];
        $fech = $_POST['fecha'];
        $mon = $_POST['monto'];
        $cliente = $_POST['cliente'];

        if ($cod_d != "" && $concepto !="" && $fech != "" && $mon != "" && $cliente != "" ){
            $sql = "insert into pago_servicios (cod_pag,    concepto, fecha, monto, cliente) values ('".$cod_d."','".$concepto."','".$fech."','".$mon."','".$cliente."')";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../pago_servicios.php');
    }
?>
