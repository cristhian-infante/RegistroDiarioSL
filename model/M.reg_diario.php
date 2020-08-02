<?php
require "../controller/conexion.php";

class M_reg_diario{

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
    public function LGDH()
    {
        $sql=" SELECT (DATE_FORMAT(r.fecha, '%Y-%m-%d')) AS Fecha,c.nombres AS Conductor, m.placa AS Placa, r.partida AS Partida,t.nombre AS Destino,
                     m.capacidad AS Capacidad,r.cantidad AS PB,r.condicion as Condicion,r.disponibilidad as Disponibilidad FROM reg_diario r 
                     INNER JOIN conductor c ON c.idconductor=r.idconductor
                     INNER JOIN mobil m ON m.idmobil=c.idconductor
                     INNER JOIN tienda t ON t.idtienda=r.idtienda WHERE (DATE_FORMAT(r.fecha, '%Y-%m-%d')) = CURRENT_DATE AND m.placa ='C7A-804'";
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