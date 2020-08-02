<?php
require "../controller/conexion.php";

class M_B8I{

    public function __construct()
    {
    }

    public function insertar($cantidad,$idtienda,$idconductor)
    {
        $sql="INSERT INTO reg_diario (idreg_diario,fecha,partida,cantidad,condicion,idtienda,idconductor) 
                        VALUES ('CD', '$cantidad', '0', '$idtienda', '$idconductor')";
        return ejecutarConsulta($sql);
    }
    public function actualizar($idreg_diario,$cantidad,$condicion,$idtienda,$idconductor)
    {
        $sql="UPDATE  reg_diario SET idconductor ='$idconductor',idtienda='$idtienda',cantidad='$cantidad',partida='CD', condicion='0'
         WHERE idreg_diario='$idreg_diario'";
        return ejecutarConsulta($sql);
    }
    public function LGDHB8I()
    {
        $sql=" SELECT (DATE_FORMAT(r.fecha, '%Y-%m-%d')) AS Fecha,c.nombres AS Conductor, m.placa AS Placa, r.partida AS Partida,t.nombre AS Destino,
                        m.capacidad AS Capacidad,r.cantidad AS PB,r.condicion AS Condicion,r.disponibilidad AS Disponibilidad FROM mobil m
                        INNER JOIN conductor c ON c.idmobil = m.idmobil           
                        INNER JOIN reg_diario r ON c.idconductor = r.idconductor 
                        INNER JOIN tienda t ON r.idtienda=t.idtienda WHERE (DATE_FORMAT(r.fecha, '%Y-%m-%d')) = CURRENT_DATE AND m.placa ='B8I-926'";
        return ejecutarConsulta($sql);
    }
    public function eliminar($idreg_diario,$fecha,$partida,$cantidad,$condicion,$idtienda,$idconductor)
    {
        
    }
    public function despacho_H($idreg_diario,$fecha,$partida,$cantidad,$condicion,$idtienda,$idconductor)
    {
        
    }
    public function Despacho_DS($idreg_diario,$fecha,$partida,$cantidad,$condicion,$idtienda,$idconductor)
    {
        
    }






}

?>