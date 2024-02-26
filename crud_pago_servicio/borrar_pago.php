<?php
    include "../config.php";

	if(isset($_GET['id'])){
        $n_cu = $_GET['cod_pag'];
        $sql = "delete from pago_servicios where cod_pag='".$_GET['id']."'";
        $result = mysqli_query($con,$sql);
          
    }else{
        echo '<span class="error">'."FALTAN DATOS";
    }
    header('location: ../pago_servicios.php');
    
?>
