<!DOCTYPE html>
<html>
<head>
<title>Login | SISTEMA DE BANCO</title>
    <meta name="description" content="SISTEMA DE BANCO" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="header">
        <h1>SISTEMA DE BANCO - "Banco de Villa Maria"</h1>
</div>

<div class="body">
    <div class="panel-login">
        <h4>Inicio de Sesion</h4>
        <form method="post" class="form" action="">
            <label>Usuario</label><br>
            <input type="text" name="user">
            <br>
            <label>Contraseña</label><br>
            <input type="password" name="pass">
            <br><br>
            <button type="submit" name="boton" id="boton" >Entrar</button>
        </form>
    </div>

    <?php
        include "config.php";//SIRVE PARA UTILIZAR LAS FUNCIONES DEL ARCHIVO CONFIG.PHP
        
        if(isset($_POST['boton'])){//PRESIONASTE EL BOTON DEL FORMULARIO
            $user = $_POST['user'];//LEER EL CONTENIDO DE LA CAJA USER
            $pass = $_POST['pass'];//LEER EL CONTENIDO DE LA CAJA PASS
            if ($user != "" && $pass != ""){
                //PREGUNTAR SI EL USER Y EL PASS SON DIFERENTES HA ESPACIO EN BLANCO
                $sql_query = "select count(*) as cntUser from login where usuario='".$user."' and password='".$pass."'";
                //CONSULTA PARA CONTAR LOS REGISTROS Y PASARLO A LA VARIABLE CNTUSER EN LA TABLA LOGIN,
                //FILTRANDO LOS REGITROS CON EL USUARIO Y PASSWORD INGRESADO POR EL FORMULARIO
                $result = mysqli_query($con,$sql_query);
                //EJECUTAR LA CONSULTA EN LA BASE DE DATOS Y RETORNAR LA RESPUESTA
                $row = mysqli_fetch_array($result);
                //RECORRE EL RESULTADO OBTENIDO Y PASARLO A UNA VARIABLE
                $count = $row['cntUser'];//PASAR EL CONTENIDO A UNA VARIABLE SIMPLE
                if($count == 1){//SOLO UN USUARIO CORRECTO DEBE EXISTIR 
                    $_SESSION['user'] = $user;//LA SESION  SE INICIA Y TOMA COMO VALOR EL USER INGRESADO
                    header('Location: home.php');//ABRIRLA LA PAGINA HOME.PHP
                }else{
                    echo '<span class="error">'."Invalido user and password";
                    //ERROR SI EL USUARIO O PASSWORD SON INCORRECTOS
                }
            }else{
                echo '<span class="error">'."Ingresar user and password";
                //ERROR SI SE INGRESA ESPACIO EN BLAMCO EN USUARIO O PASSWORD
            }
        }
    ?>

</div>

<?php
 include "footer.php";
?>

</body>
</html>