<?php
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

if($action=="delete"){
    
    ManejoCronograma::deleteCronograma($info -> getCod_cronograma());
    ManejoInfoBasica::deleteInfo_Basica($info->getCod_info_bas());
}

echo '<script>
alert("El proceso de la oferta se ha eliminado")
window.location="../Oferta.php?menu=listas";
</script>';
?>
