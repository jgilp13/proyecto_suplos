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

$obj = new Conexion();
$conexion = $obj->conectarDB();
ManejoActividad::setConexionBD($conexion);
ManejoMoneda::setConexionBD($conexion);
ManejoInfoBasica::setConexionBD($conexion);

$listaMoneda = ManejoMoneda::getList();
$listaActividad = ManejoActividad::getList();
?>

<section class="p-fixed d-flex text-center">
    <!-- Container-fluid starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Authentication card start -->
                <div class="signup-card card-block ">
                    <form action="ModuloOferta/creaProceso.php" method="post" id="formCreaProceso"
                        name="formCreaProceso" enctype="multipart/form-data" class="md-float-material">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h1 class="text-center txt-primary">Crear la oferta de procesos</h1>
                            </div>
                        </div>
                        <div class="auth-box">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Información básica</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Objeto</h5>
                                    <div class="input-group">
                                        <input type="text" id="objeto" name="objeto" class="form-control"
                                            placeholder="Objeto" required>
                                        <span class="md-line"></span>

                                    </div>
                                    <h5>Descripción / Alcance</h5>
                                    <div class="input-group">
                                        <textarea type="text-area" id="descripcion" name="descripcion"
                                            class="form-control" placeholder="Descripcion" required> </textarea>
                                        <span class="md-line"></span>
                                    </div>

                                    <div class="row">
                                        <div class="container">
                                            <div class="row justify-content-between">
                                                <div class="col-md-6">
                                                    <h5 style="margin-right: 300px;">Moneda</h5>
                                                    <div class="input-group col-md-12">
                                                        <select name="moneda" id="moneda" class="form-control" required
                                                            style="margin-right: 50px;">
                                                            <option value="" selected disabled></option>
                                                            <?php for (
                                                                        $i = 0;
                                                                        $i <
                                                                        count(
                                                                            $listaMoneda
                                                                        );
                                                                        $i++
                                                                    ) { ?>
                                                            <option value="<?php echo $listaMoneda[
                                                                            $i
                                                                        ]->getCod_moneda(); ?>"><?php echo $listaMoneda[
    $i
]->getNom_moneda(); ?></option>
                                                            <?php } ?>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 style="margin-right: 300px;">Presupuesto</h5>
                                                    <input type="number" id="precio" name="precio" class="form-control"
                                                        placeholder="Digita la cantidad de dinero" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Actividad</h5>
                                    <div class="input-group">
                                        <select name="actividad" id="actividad" class="form-control" required
                                            style="margin-right: 50px;">
                                            <option value="" selected disabled></option>
                                            <?php for ($i = 0;$i <
                                                        count($listaActividad);
                                                        $i++
                                                    ) { ?>
                                            <option value="<?php echo $listaActividad[
                                                                $i
                                                            ]->getCod_producto(); ?>"><?php echo $listaActividad[
    $i
]->getNom_producto(); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Cronograma </h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Fecha de inicio</h5>
                                    <div class="input-group">
                                        <input type="text" id="datepicker" name="fecha_inicio" class="form-control"
                                            placeholder="YYYY-MM-DD" required>
                                        <span class="md-line"></span>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Hora de inicio</h5>
                                    <div class="input-group">
                                        <input type="time" id="hora_inicio" name="hora_inicio" class="form-control"
                                            required>
                                        <span class="md-line"></span>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Fecha de cierre</h5>
                                    <div class="input-group">
                                    <input type="text" id="datepicker1" name="fecha_cierre" class="form-control"
                                            placeholder="YYYY-MM-DD" required>
                                        <span class="md-line"></span>

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Hora de cierre</h5>
                                    <div class="input-group">
                                        <input type="time" id="hora_cierre" name="hora_cierre" class="form-control"
                                            required>
                                        <span class="md-line"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-40 d-flex justify-content-center">
                                <div class="col-md-2">
                                    <input type="submit" name="creaProceso" id="creaProceso"
                                        style="background-color: #2D7DBC; color: #fff;"
                                        class="btn btn-md btn-block waves-effect text-center m-b-20" value="Crear" />
                                </div>
                            </div>
                            <hr />
                        </div>

                    </form>
                    <!-- end of form -->
                </div>
                <!-- Authentication card end -->
            </div>
            <!-- end of col-sm-12 -->
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container-fluid -->
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
$(function() {
    $("#datepicker").datepicker();
    $("#datepicker").datepicker("option", "dateFormat", 'yy-mm-dd');
});

$(function() {
    $("#datepicker1").datepicker();
    $("#datepicker1").datepicker("option", "dateFormat", 'yy-mm-dd');
});
</script>