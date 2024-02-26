<?php
    include "../config.php";

    if(isset($_POST['agregar'])){
        $n_cu = $_POST['n_cuenta'];
        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $dni = $_POST['dni'];

        if ($n_cu != "" && $nom != "" && $ape != "" && $dni != "" ){
            $sql = "insert into cliente(n_cuenta, nombre, apellido, dni) values ('".$n_cu."','".$nom."','".$ape."','".$dni."')";
            $result = mysqli_query($con,$sql);
            
        }else{
            echo '<span class="error">'."FALTAN DATOS";
        }
        header('location: ../clientes.php');
    }
?>
