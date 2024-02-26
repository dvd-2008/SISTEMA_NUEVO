<?php
    include "../config.php";

	if(isset($_GET['id'])){
        $n_cu = $_GET['cod_dep'];
        $sql = "delete from depositos where cod_dep='".$_GET['id']."'";
        $result = mysqli_query($con,$sql);
          
    }else{
        echo '<span class="error">'."FALTAN DATOS";
    }
    header('location: ../deposito.php');
    
?>
