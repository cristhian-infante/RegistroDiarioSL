<?php
 require_once "../model/MRDiarios.php";

$registrod=new MRDiarios();

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$conductor=isset($_POST["conductor"])? limpiarCadena($_POST["conductor"]):"";
$placa=isset($_POST["placa"])? limpiarCadena($_POST["placa"]):"";
$capacidad=isset($_POST["capacidad"])? limpiarCadena($_POST["capacidad"]):"";
$llegada=isset($_POST["llegada"])? limpiarCadena($_POST["llegada"]):"";

switch ($_GET["op"])
{
  case 'guardaryeditar':
  if(empty($id))
  {
    $rspta=$registrod->insertar($conductor,$placa,$capacidad,$llegada);
    echo  $rspta?"Categoria  Se registro con exito":"Categoria no se pudo registrar";
  }
  else
   {
     $rspta=$registrod->editar($id,$conductor,$placa,$capacidad,$llegada);
     echo  $rspta?"Categoria se Actualizo con Exito !":"Categoria no se pudo Actualizar";

    }
    break;

  case 'desactivar':
        $rspta=$registrod->desactivar($id);
        echo  $rspta?"Categoria desactivada con Exito!":"Categoria no se pudo desactivar";

      break;

  case 'activar':
           $rspta=$registrod->activar($id);
           echo  $rspta ? "Categoria activada con Exito!":"Categoria no se pudo activar";
      break;
  case 'mostrar':
       $rspta=$registrod->mostrar($id);
          echo  json_encode($rspta);
      break;

  case 'listar':
      $rspta=$registrod->listara();
      $data= Array();

      while ($reg=$rspta->fetch_object())
       {
           $data[]= array(
            "0" =>($reg->estado)?'<button  type="button" class="btn btn-warning" onclick="mostrar('.$reg->id.')"><i class="fa fa-pencil"></i></button>'.' <button class="btn btn-danger" onclick="desactivar('.$reg->id.')"><i class="fa fa-close"></i></button>':
                           					'<button type="button" class="btn btn-warning" onclick="mostrar('.$reg->id.')"><i class="fa fa-pencil"></i></button>'.' <button class="btn btn-primary" onclick="activar('.$reg->id.')"><i class="fa fa-check"></i></button>',
            "1" =>$reg->fecha,
            "2" =>$reg->conductor,
            "3" =>$reg->placa,
            "4" =>$reg->capacidad,
            "5" =>$reg->partida,
            "6" =>$reg->llegada,
            "7"=>($reg->estado)?'<span class="label label-success">Entrega Exitosa</span>':'<span class="label label-warning">En Camino</span>'
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