<?php
    include "../config.php";

    if(isset($_POST['editar'])){
        $cod_d = $_POST['cod_pag'];
        $concepto = $_POST['concepto'];
        $fech = $_POST['fecha'];
        $mon = $_POST['monto'];
        $cliente = $_POST['cliente'];

        if ($cod_d != "" && $concepto != "" && $fech != "" && $mon != "" && $cliente != "" ){
            $sql = "update pago_servicios set concepto='".$concepto."', fecha='".$fech."', monto='".$mon."' , cliente='".$cliente."' where cod_pag='".$cod_d."'";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../pago_servicios.php');
    }
?>
