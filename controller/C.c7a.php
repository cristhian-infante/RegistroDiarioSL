<?php
require_once "../model/M.c7a.php";

$reg_diario = new M_C7A();

$idreg_diario=isset($_POST["idreg_diario"])? limpiarCadena($_POST["idreg_diario"]):"";
$fecha=isset($_POST["fecha"])? limpiarCadena($_POST["fecha"]):"";
$partida=isset($_POST["partida"])? limpiarCadena($_POST["partida"]):"";
$cantidad=isset($_POST["cantidad"])? limpiarCadena($_POST["cantidad"]):"";
$condicion=isset($_POST["condicion"])? limpiarCadena($_POST["condicion"]):"";
$idtienda=isset($_POST["idtienda"])? limpiarCadena($_POST["idtienda"]):"";
$idconductor=isset($_POST["idconductor"])? limpiarCadena($_POST["idconductor"]):"";

switch ($_GET["op"])
{
  case 'guardaryeditar':
  if(empty($id))
  {
    $rspta=$reg_diario->insertar($conductor,$placa,$capacidad,$llegada);
    echo  $rspta?"Categoria  Se registro con exito":"Categoria no se pudo registrar";
  }
  else
   {
     $rspta=$reg_diario->editar($id,$conductor,$placa,$capacidad,$llegada);
     echo  $rspta?"Categoria se Actualizo con Exito !":"Categoria no se pudo Actualizar";

    }
    break;

  case 'desactivar':
        $rspta=$reg_diario->desactivar($id);
        echo  $rspta?"Categoria desactivada con Exito!":"Categoria no se pudo desactivar";

      break;

  case 'activar':
           $rspta=$reg_diario->activar($id);
           echo  $rspta ? "Categoria activada con Exito!":"Categoria no se pudo activar";
      break;
  case 'mostrar':
       $rspta=$reg_diario->mostrar($id);
          echo  json_encode($rspta);
      break;

  case 'listar':
      $rspta=$reg_diario->LGDHC7A();
      $data= Array();

      while ($reg=$rspta->fetch_object())
       {
           
           $data[]= array(
            "0" =>$reg->Fecha,
            "1" =>$reg->Conductor,
            "2" =>$reg->Placa,
            "3" =>$reg->Partida,
            "4" =>$reg->Destino,
            "5" =>$reg->Capacidad,
            "6" =>$reg->PB,
            "7"=>($reg->Condicion)?'<span class="label label-success">Entrega Exitosa</span>':'<span class="label label-warning">En Camino</span>',
            "8"=>($reg->Disponibilidad)?'<span class="label label-success">Para Mañana</span>':'<span class="label label-warning">Para Hoy</span>'
           );
       }
       $results = array(
         "sEcho"=>1,
         "iTotalRecords"=>count($data),
         "iTotalDisplayRecords"=>count($data),
         "aaData"=>$data
       );

          echo json_encode($results);
        break;

}
?>