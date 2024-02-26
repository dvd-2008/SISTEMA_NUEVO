<?php
    include "../config.php";

	if(isset($_GET['id'])){
        $n_cu = $_GET['n_cuenta'];
        $sql = "delete from cliente where n_cuenta='".$_GET['id']."'";
        $result = mysqli_query($con,$sql);
          
    }else{
        echo '<span class="error">'."FALTAN DATOS";
    }
    header('location: ../clientes.php');
    
?>
