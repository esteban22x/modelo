<?php

//Clase conexion mysql
//Version 1.1 con MySQLi modificada por Esteban Delgado
class mysql {
    
    var $servidor = "";
    var $usuario = "";
    var $clave = "";
    var $base = "";
    var $conexion;
    var $bandera = false;
    function __construct(){
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
    }
    function conectar()
	{
            $this->conexion = new mysqli($this->servidor,$this->usuario,$this->clave,$this->base) 
            or die ("Error de Conexion MySQL ".$this->conexion->connect_errno);
            $this->bandera = true;
            mysqli_set_charset($this->conexion,"utf-8");
            return $this->conexion;
    }
    
    function cerrar()
	{
        if($this->bandera)
		{
            mysqli::close();
        }
    }
    
    function consultar($sql)
	{
        return $this->conexion->query($sql);
    }

    function f_fila($sql)
	{
        return $sql->fetch_object();
    }

    function f_arreglo($sql)
	{
        return $sql->fetch_assoc();
    }

    function f_total($sql)
	{
        return $sql->num_rows;
    }  
    
    function liberar_consulta($sql)
	{
        mysqli_free_result($sql);
    }
}

?>