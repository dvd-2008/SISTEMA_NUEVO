<?php

session_start();//CREAR UNA SESION DE SEGURIDAD 

$host = "localhost"; //VARIABLE PARA EL SERVIDOR
$user = "root";     //VARIABLE PARA EL USUARIO
$password = "";     //VARIABLE PARA EL PASSWORD
$dbname = "bancos"; //VARIABLE PARA LA BASE DE DATOS

$con = mysqli_connect($host, $user, $password,$dbname);
//PERMITE CONECTAR LA BASE DE DATOS CON EL PROGRAMA PHP

if (!$con) {    //PERMITE CONOCER SI LA BASE SE CONECTO EN FORMA CORRECTA
 die("Connection failed: " . mysqli_connect_error());
 //MUESTRA UN MENSAJE DE ERROR SI NO SE PUDO CONECTAR
}
?>