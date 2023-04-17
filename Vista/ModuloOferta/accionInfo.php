<?php

require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/Informacion_Basica.php';
require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/ManejoInfoBasica.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/Cronograma.php';
require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/ManejoCronograma.php';


$obj = new Conexion();
$conexion = $obj->conectarDB();
ManejoInfoBasica::setConexionBD($conexion);
ManejoCronograma::setConexionBD($conexion);


$cod_info_basic = $_GET['cod_info'];
$action = $_GET["action"];

$info = ManejoInfoBasica::consultInfoBascia($cod_info_basic);
$tiempo = ManejoCronograma::consultCronograma($info->getCod_cronograma());



if($action=="publicado"){
    ManejoInfoBasica::createEventoxPublicado($cod_info_basic,$tiempo->getFecha_inicio(), $tiempo->getHora_inicio());
    ManejoInfoBasica::createEventoxEvaluacion($cod_info_basic,$tiempo->getFecha_cierre(), $tiempo->getHora_cierre());
}

echo '<script>
alert("El cambio de la oferta se ha actualizado. Espera a la fecha de inicio como publicado y cierre como Evaluación")
window.location="../Oferta.php?menu=listas";
</script>';

?>