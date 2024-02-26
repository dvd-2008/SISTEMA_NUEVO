<?php
    include "../config.php";

	if(isset($_GET['id'])){
        $cod_ret = $_GET['cod_ret'];
        $sql = "delete from retiros where cod_ret='".$_GET['id']."'";
        $result = mysqli_query($con,$sql);
          
    }else{
        echo '<span class="error">'."FALTAN DATOS";
    }
    header('location: ../retiros.php');
    
?>
