<?php
 include "header.php";
?>

<div class="body">
    <?php
    include "config.php";
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }
    if(isset($_POST['boton'])){
        session_destroy();
        header('Location: index.php');
    }
    ?>
        <h1>Bienvenido</h1>
        <center>    
            <h3>EVALUACION FINAL DEL CURSO DE GESTION WEB, PHP Y MYSQL</h3>
            <h3>PROGRAMADOR : DAVID HUAMAN</h3>
        </center>  

        <form method='post' action="">
            <button type="submit" name="boton" id="boton" >Cerrar Sesion</button>
        </form>
</div>

<?php
 include "footer.php";
?>

