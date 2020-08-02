<?php
require_once "global.php";

$conexion=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

mysqli_query($conexion , 'SET NAMES "'.DB_ENCODE.'"');

if(mysqli_connect_errno()){
    printf(" fallo conexion \n", mysqli_connect_errno());
    exit();
}

if(!function_exists('ejecutarConsulta'))
{
    function ejecutarConsulta($sql)
    {
        global $conexion;
        $query =$conexion->query($sql);
        return $query;
    }

    function ejecutarConsulta_retornarID($sql)
    {
        global $conexion;
        $query =$conexion->query($sql);
        return $conexion->insert_id;
    }

    function limpiarCadena($li)
    {
        global $conexion;
        $li =mysqli_real_escape_string($conexion,trim($li));
        return htmlspecialchars($li);
    }
    
    function ejecutarConsultaSimpleFila($sql)
    {
        global $conexion;
        $query =$conexion ->query($sql);
        $row =$query->fetch_assoc();
        return $row;
    }

}