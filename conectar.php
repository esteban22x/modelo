<?php
 
 include ("modelo/mysql.php");

 //Cambiar el true por false si es un MySQL Nuevo (Por ejemplo XAMPP Recien Instalado) 
 $conexionDefecto 	= true;
 $conexion->base 	= "hosting";
 //Conectamos con mysql
 $conexion = new mysql;
 if ($conexionDefecto){
 	$conexion->servidor	= "localhost";
 	$conexion->usuario	= "root";
 	$conexion->clave 	= "password";
 }
 $conexion->conectar();
 
?>