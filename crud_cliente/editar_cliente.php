<?php
    include "../config.php";

    if(isset($_POST['editar'])){
        $n_cu = $_POST['n_cuenta'];
        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $dni = $_POST['dni'];

        if ($n_cu != "" && $nom != "" && $ape != "" && $dni != "" ){
            $sql = "update cliente set nombre='".$nom."', apellido='".$ape."' , dni='".$dni."' where n_cuenta='".$n_cu."'";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../clientes.php');
    }
?>
