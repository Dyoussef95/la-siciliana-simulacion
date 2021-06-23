
<?php
require 'ControladorDiario.php';
require 'ControladorProduccion.php';

$demanda = intval($_POST['demanda']);
$desDemanda = intval($_POST['desviacionDemanda']);
$bolsas = intval($_POST['bolsas']);
$desBolsas= intval($_POST['desviacionBolsas']);
session_start();
if($desDemanda*3>=$demanda || $desBolsas*3>=$bolsas){
    
    $_SESSION['validación']=0;
}else{
    $_SESSION['validación']=1;
}

if($bolsas<$demanda){
    $_SESSION['validación']=2;
}else{
    $_SESSION['validación']=1;
}

if($_SESSION['validación']==0 || $_SESSION['validación']==2){
    header("Location: index.php");
}else{

    $controlador = new ControladorProduccion;
    $controlador->iniciar($_POST);
} 
/*
demanda y su desviacion de totales
bolsas y su desviacion
dias

*/
?>


