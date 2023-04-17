<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Informacion_Basica.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoInfoBasica.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Cronograma.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoCronograma.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Actividad.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoActividad.php';


$fecha = date("d-m-Y H:i:s");
//$tipo = $_GET["tipoUsuario"];

$obj = new Conexion();
$conexion = $obj->conectarDB();
ManejoInfoBasica::setConexionBD($conexion);
ManejoCronograma::setConexionBD($conexion);
ManejoActividad::setConexionBD($conexion);

$info_basica = ManejoInfoBasica::getList();
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=Reporte_general_$fecha.xls"); //Indica el nombre del archivo resultante
header ('Content-Transfer-Encoding: binary');
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3 align="center">Reporte general</h3>
        <table width="50%" border="1" align="center">
            <tr style="background-color: yellowgreen;" align="center">
                <th style="width: 10%;">ID oferta</th>
                <th style="width: 10%;">Creador oferta</th>
                <th style="width: 10%;">Objeto</th>
                <th style="width: 10%;">Actividad</th>
                <th style="width: 10%;">Descripción</th>
                <th style="width: 10%;">Moneda</th>
                <th style="width: 10%;">Presupuesto</th>
                <th style="width: 10%;">Fecha de inicio</th>
                <th style="width: 10%;">Hora de inicio</th>
                <th style="width: 10%;">Fecha de cierre</th>
                <th style="width: 10%;">Hora de cierre</th>
                <th style="width: 10%;">Estado</th>
            </tr>
            <tr>
                <?php 
                for ($i=0; $i < count($info_basica); $i++) { 
                    # code...
                
                $activad = ManejoActividad::consultActividad($info_basica[$i]->getCod_actividad());
                $tiempo = ManejoCronograma::consultCronograma($info_basica[$i]->getCod_cronograma());
                ?>
                    <td><?php  echo $info_basica[$i]->getCod_info_bas();?></td>
                    <td><?php echo "Jaime Gil"?></td>
                    <td><?php echo $info_basica[$i]->getObjeto(); ?></td>
                    <td><?php echo $activad->getNom_producto();?></td>
                    <td><?php echo $info_basica[$i]->getDescripcion();?></td>
                    <td><?php if ($info_basica[$i]->getCod_moneda() == 1) {
                            echo "COP";
                        } elseif ($info_basica[$i]->getCod_moneda() == 2) {
                            echo "USD";
                        } elseif ($info_basica[$i]->getCod_moneda() == 3) {
                            echo "EUR";
                        } ?></td>
                    <td><?php echo $info_basica[$i]->getNum_presupuesto();?></td>
                    <td><?php echo $tiempo->getFecha_inicio();?></td>
                    <td><?php echo $tiempo->getHora_inicio();?></td>
                    <td><?php echo $tiempo->getFecha_cierre();?></td>
                    <td><?php echo $tiempo->getHora_cierre();?></td>
                    <td><?php if ($info_basica[$i]->getCod_estado() == 1) {
                            echo "ACTIVO";
                        } elseif ($info_basica[$i]->getCod_estado() == 2) {
                            echo "PUBLICADO";
                        } elseif ($info_basica[$i]->getCod_estado() == 2) {
                            echo "EVALUACIÓN";
                        } ?></td>
                </tr>
                <?php }?>
        </table>

        

<?php
echo '<script>
window.location="Oferta.php?menu=consultar";
</script>';
?>
