<?php
 
 include ("modelo/mysql.php");

 //Cambiar el true por false si es un MySQL Nuevo (Por ejemplo XAMPP Recien Instalado) 
 $conexionDefectoA 	= true;

 //Conectamos con mysql
 $conexion = new mysql;
 $conexion->base 	= "hosting";
 if ($conexionDefectoA){
 	$conexion->servidor	= "localhost";
 	$conexion->usuario	= "root";
 	$conexion->clave 	= "password";
 }
 $conexion->conectar();
 
?>