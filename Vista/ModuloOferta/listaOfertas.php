<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Actividad.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoActividad.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Estado.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoEstado.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Moneda.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoMoneda.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Informacion_Basica.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoInfoBasica.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Cronograma.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/ManejoCronograma.php';
date_default_timezone_set("America/Bogota");

$obj = new Conexion();
$conexion = $obj->conectarDB();
ManejoActividad::setConexionBD($conexion);
ManejoEstado::setConexionBD($conexion);
ManejoMoneda::setConexionBD($conexion);
ManejoInfoBasica::setConexionBD($conexion);
ManejoCronograma::setConexionBD($conexion);

$listaInfo = ManejoInfoBasica::getList();
?>
<!-- Basic table card start -->
<div class="card">
<div class="card-header" style="background-color: #2D7DBC;">
        <h3 style="color: #fff">Listas de procesos de ofertas</h3>
        <div class="card-header-right">
            <a type="button" href="?menu=crearOferta" style="color: #fff;"
             class="btn hor-grd btn-grd-inverse btn-round ">Crear oferta</a>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th style="width: 10%;">ID oferta</th>
                        <th style="width: 20%;">Objeto</th>
                        <th style="width: 20%;">Actividad</th>
                        <th style="width: 20%;">Descripcion</th>
                        <th style="width: 10%;">Presupuesto</th>
                        <th style="width: 10%;">Fecha de Inicio</th>
                        <th style="width: 10%;">Hora de Inicio</th>
                        <th style="width: 10%;">Fecha de Cierre</th>
                        <th style="width: 10%;">Hora de Cierre</th>
                        <th style="width: 10%;">Estado</th>
                        <?php ?>
                        <th style="width: 10%;">Actions</th>
                        <?php ?>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i=0; $i <count($listaInfo) ; $i++) { 
                    $actividad = ManejoActividad::consultActividad($listaInfo[$i]->getCod_actividad());
                    $estado = ManejoEstado::consultEstado($listaInfo[$i]->getCod_estado());
                    $moneda = ManejoMoneda::consultMoneda($listaInfo[$i]->getCod_moneda());            
                    $tiempo = ManejoCronograma::consultCronograma($listaInfo[$i]->getCod_cronograma());
                    ?>
                    <tr> 
                        <td><?php echo $listaInfo[$i]->getCod_info_bas()?></td>
                        <td><?php echo $listaInfo[$i]->getObjeto()?></td>
                        <td><?php echo $actividad->getNom_producto()?></td>
                        <td><?php echo $listaInfo[$i]->getDescripcion()?></td>
                        <td><?php echo $moneda->getNom_moneda(), " ", $listaInfo[$i]->getNum_presupuesto()?></td>
                        <?php
                         $info_estado = $estado->getCod_estado(); 
                         $estado_info = ManejoEstado::consultEstado($info_estado); 
                         
                        if ($estado_info ->getNom_estado() == "ACTIVO" OR  $estado-> getNom_estado() == "EVALUACION" OR  $estado-> getNom_estado() == "PUBLICADO") {
                            
                        echo "<td>".$tiempo->getFecha_inicio()."</td>
                        <td>".$tiempo->getHora_inicio()."</td>
                        <td>".$tiempo->getFecha_cierre()."</td>                        
                        <td>".$tiempo->getHora_cierre()."</td>
                        ";
                        ?>
                        <?php } else {
                            echo "<td></td>
                            <td></td>
                            <td></td>                        
                            <td></td>
                            ";
                        } ?>
                        <td><?php echo $estado ->getNom_estado()?></td> 
                        <?php ?>
                        <td>
                            <?php 
                            $tiempoCompleto_Inicio = $tiempo->getFecha_inicio(). " ".  $tiempo->getHora_inicio();

                            //if ($estado_info ->getNom_estado() == "PUBLICADO") {
                            if ($estado_info ->getNom_estado() == "ACTIVO") {
                            ?>
                                <a type="button" href="ModuloOferta/accionInfo.php?cod_info=<?php echo $listaInfo[$i]->getCod_info_bas()?>&action=publicado" class="btn btn-success btn-round"  style="color: #fff;"><i class="icofont icofont-check-circled"> Publicar</i></a>
                            <?php } ?>   
                            <!--<a type="button" href="ModuleAdmin/actionUser.php?codeUser=<?php ?>&action=desactivated" class="btn btn-danger btn-round" style="color: #fff;"><i class="icofont icofont-not-allowed" ></i></a>-->
                            <a type="button" href="#" style="color: #fff;" class="btn btn-warning btn-round"><i class="icofont icofont-ui-edit"></i></a>
                            <a type="button" href="ModuloOferta/delete.php?cod_info=<?php echo $listaInfo[$i]->getCod_info_bas()?>&action=delete" style="color: #fff;" class="btn btn-danger btn-round"><i class="icofont icofont-trash"></i></a>
                        </td>
                        <?php  ?>
                    </tr>

                <?php 
                    }?>
                </tbody>
            </table>
        </div>
    </div>
</div>