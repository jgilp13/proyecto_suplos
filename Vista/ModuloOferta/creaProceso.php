<?php
require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/Actividad.php';
require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/ManejoActividad.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/proyecto_suplos/Negocio/Moneda.php';
require_once $_SERVER['DOCUMENT_ROOT'] .
    '/proyecto_suplos/Negocio/ManejoMoneda.php';
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

ManejoActividad::setConexionBD($conexion);
ManejoMoneda::setConexionBD($conexion);
ManejoInfoBasica::setConexionBD($conexion);
ManejoCronograma::setConexionBD($conexion);


$objeto = $_POST['objeto'];
$actividad = $_POST['actividad'];
$descripcion = $_POST['descripcion'];
$moneda = $_POST['moneda'];
$precio = $_POST['precio'];
$fecha_inicio = $_POST['fecha_inicio'];
$hora_inicio = $_POST['hora_inicio'];
$fecha_cierre = $_POST['fecha_cierre'];
$hora_cierre = $_POST['hora_cierre'];

$cronograma = new Cronograma();
$cronograma->setFecha_inicio($fecha_inicio);
$cronograma->setHora_inicio($hora_inicio);
$cronograma->setFecha_cierre($fecha_cierre);
$cronograma->setHora_cierre($hora_cierre);
ManejoCronograma::createCronograma($cronograma);

$codigo_cronograma = ManejoCronograma::consultCronogramaUltimo();


$info_bas = new Informacion_Basica();
$info_bas->setObjeto($objeto);
$info_bas->setCod_actividad($actividad);
$info_bas->setDescripcion($descripcion);
$info_bas->setCod_moneda($moneda);
$info_bas->setNum_presupuesto($precio);
foreach($codigo_cronograma as $cod_cronograma){
    $info_bas->setCod_cronograma($cod_cronograma->getCod_cronograma());
}

$info_bas->setCod_estado(1);
ManejoInfoBasica::createInfoBasicaxCronograma($info_bas);



echo '<script>
alert("El proceso de la oferta se ha creado")
window.location="../Oferta.php?menu=listas";
</script>';
?>
