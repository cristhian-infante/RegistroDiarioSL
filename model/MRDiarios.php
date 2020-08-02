<?php
require "../controller/conexion.php";

Class MRDiarios
{

    public function __construct()
    {

    }
    public function insertar($conductor,$placa,$capacidad,$llegada)
    {

        $sql="INSERT INTO  regdiario(id,fecha,conductor,placa,capacidad,partida,llegada,estado) VALUES ('$conductor','$placa','$capacidad','CD','$llegada','0')";
        return ejecutarConsulta($sql);
    }
    public function editar($id,$conductor,$placa,$capacidad,$llegada)
    {
        $sql="UPDATE  regdiario SET conductor ='$conductor',placa='$placa',capacidad='$capacidad',partida='CD',llegada='$llegada' estado='1' WHERE id='$id'";
        return ejecutarConsulta($sql);
    }
    public function listara()
    {
        $sql="SELECT * FROM regdiario";
        return ejecutarConsulta($sql);
    }

    public function mostrar($id)
    {
        $sql="SELECT * FROM regdiario WHERE id='$id'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function DHecho($id)
    {
        $sql="UPDATE  regdiario set estado='1' WHERE id='$id'";
        return ejecutarConsulta($sql);
    }

    public function Dsiguiente($id)
    {
        $sql="UPDATE  regdiario set estado='2' WHERE id='$id'";
        return ejecutarConsulta($sql);
    }



}



?>