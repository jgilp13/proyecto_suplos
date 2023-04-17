<?php 
require_once $_SERVER['DOCUMENT_ROOT'] .
'/proyecto_suplos/Negocio/ManejoInfoBasica.php';
require_once $_SERVER['DOCUMENT_ROOT'] .
'/proyecto_suplos/Negocio/Informacion_Basica.php';

$obj = new Conexion();
$conexion = $obj->conectarDB();
ManejoInfoBasica::setConexionBD($conexion);



if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
if (!isset($_POST['buscarObjetoDescripcion'])){$_POST['buscarObjetoDescripcion'] = '';}
?>

<div class="container mt-5">
    <div class="col-12">
        <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
        <div class="card-body">

                <h4 class="card-title">Consultar</h4>

                <form id="form2" name="form2" method="POST" action="consultar.php">
                        <div class="col-12 row">
                        <div class="mb-3">
                                <label  class="form-label">Buscar ID Oferta</label>
                                <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST['buscar'] ?>" >
                        </div>
                        <h4 class="card-title">Filtro de búsqueda</h4>  
                        <div class="col-11">
                                        <table class="table">
                                                <thead>
                                                        <tr class="filters">
                                                                <th>
                                                                        Objeto / Descripcion 
                                                                        <input type="text" class="form-control " id="buscar" name="buscar" value="<?php echo $_POST['buscarObjetoDescripcion'] ?>" >
                                                                </th>
                                                                <th>
                                                                        Estado
                                                                        <select id="subject-filter" id="color" name="color" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                                <?php /*if ($_POST["color"] != '') { ?>
                                                                                                        <option value="<?php  ?>"><?php  ?></option>
                                                                                <?php } */?>
                                                                                <option value="">Todos</option>
                                                                                <option style="color: green;" value="1">Activo</option>
                                                                                <option style="color: yellow;" value="2">Publicado</option>
                                                                                <option style="color: red;" value="3">Evaluación</option>
                                                                        </select>
                                                                </th>                                       
                                                        </tr>
                                                </thead>
                                        </table>
                                </div>
                                <h4 class="card-title">Ordenar por</h4>  
                                        <div class="col-10">

                                                        <table class="table">
                                                                <thead>
                                                                        <tr class="filters">
                                                                                <th>
                                                                                        Selecciona el orden
                                                                                        <select id="assigned-tutor-filter" id="orden" name="orden" class="form-control mt-2" style="border: #bababa 1px solid; color:#000000;" >
                                                                                                <?php /*if (true) { ?>
                                                                                                                        <option value="<?php  ?>">
                                                                                                                        <?php
                                                                                                                        ?>
                                                                                                                        </option>
                                                                                                <?php } */?>
                                                                                                <option value=""></option>
                                                                                                <option value="1">Ordenar por id de objeto / descripción</option>
                                                                                                <option value="4">Ordenar por estado</option>
                                                                                        </select>
                                                                                </th>
                                                                        </tr>
                                                                </thead>
                                                        </table>
                                                </div>
                                                <div class="col-2">
                                                        <input type="submit" class="btn " value="Ver" style="margin-top: 38px; background-color: #2D7DBC; color: white;">                     
                                                </div>
                                        </div>
                                <?php
                        /*FILTRO de busqueda////////////////////////////////////////////*/
                /* if (true) {
                        
                        }
                        //$aKeyword = explode(" ", $_POST['buscar']);


                        if ($_POST["buscar"] == '' and $_POST['buscadepartamento'] == '' and $_POST['color'] == '' and $_POST['buscafechadesde'] == '' and $_POST['buscafechahasta'] == '' and $_POST['buscapreciodesde'] == '' and $_POST['buscapreciohasta'] == '') {
                                $query = "SELECT * FROM datos_usuario ";
                        } else {


                                $query = "SELECT * FROM datos_usuario ";

                                if ($_POST["buscar"] != '') {
                                        $query .= "WHERE (nombre LIKE LOWER('%" . $aKeyword[0] . "%') OR apellidos LIKE LOWER('%" . $aKeyword[0] . "%')) ";

                                        for ($i = 1; $i < count($aKeyword); $i++) {
                                                if (!empty($aKeyword[$i])) {
                                                        $query .= " OR nombre LIKE '%" . $aKeyword[$i] . "%' OR apellidos LIKE '%" . $aKeyword[$i] . "%'";
                                                }
                                        }

                                }

                                if ($_POST["buscadepartamento"] != '') {
                                        $query .= " AND departamento = '" . $_POST['buscadepartamento'] . "' ";
                                }

                                if ($_POST["buscafechadesde"] != '') {
                                        $query .= " AND fecha BETWEEN '" . $_POST["buscafechadesde"] . "' AND '" . $_POST["buscafechahasta"] . "' ";
                                }

                                if ($_POST['buscapreciodesde'] != '') {
                                        $query .= " AND precio >= '" . $_POST['buscapreciodesde'] . "' ";
                                }

                                if ($_POST['buscapreciohasta'] != '') {
                                        $query .= " AND precio <= '" . $_POST['buscapreciohasta'] . "' ";
                                }

                                if ($_POST["color"] != '') {
                                        $query .= " AND color = '" . $_POST["color"] . "' ";
                                }

                                if ($_POST["orden"] == '1') {
                                        $query .= " ORDER BY nombre ASC ";
                                }

                                if ($_POST["orden"] == '2') {
                                        $query .= " ORDER BY departamento ASC ";
                                }

                                if ($_POST["orden"] == '3') {
                                        $query .= " ORDER BY color ASC ";
                                }

                                if ($_POST["orden"] == '4') {
                                        $query .= " ORDER BY precio ASC ";
                                }

                                if ($_POST["orden"] == '5') {
                                        $query .= " ORDER BY precio DESC ";
                                }

                                if ($_POST["orden"] == '6') {
                                        $query .= " ORDER BY fecha ASC ";
                                }

                                if ($_POST["orden"] == '7') {
                                        $query .= " ORDER BY fecha DESC ";
                                }


                        }


                        $sql = $conexion->query($query);

                        $numeroSql = mysqli_num_rows($sql);
                */
                        ?>
                        <p style="font-weight: bold; color:#2D7DBC;"><i class="mdi mdi-file-document"></i> <?php //echo $numeroSql; ?> Resultados encontrados</p>
                </form>
                <a type="button" style="background-color:#2D7DBC ; color: #ffff;" href="../Vista/exportarExcel.php" class="btn hor-grd btn-grd-inverse btn-round ">Exportar excel</a>
                                        <div class="table-responsive">
                                                <table class="table">
                                                                
                                                        <thead>
                                                                <tr style="background-color:#2D7DBC; color:#FFFFFF;">
                                                                        <th style=" text-align: center;"> ID Oferta </th>
                                                                        <th style=" text-align: center;"> Objeto </th>
                                                                        <th style=" text-align: center;"> Actividad </th>
                                                                        <th style=" text-align: center;"> Descripción </th>
                                                                        <th style=" text-align: center;"> Fecha de inicio </th>
                                                                        <th style=" text-align: center;"> Hora de inicio </th>
                                                                        <th style=" text-align: center;"> Fecha de cierre </th>
                                                                        <th style=" text-align: center;"> Hora de cierre </th>
                                                                        <th style=" text-align: center;"> Estado </th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php /**while ($rowSql = $sql->fetch_assoc()) { ?>
                                                 
                                                                                        <tr>
                                                                                        <td style="text-align: center;"><?php echo $rowSql["nombre"]; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql["departamento"]; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql["color"]; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql["precio"]; ?> €</td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql["fecha"]; ?></td>
                                                                                        </tr>
                                                
                                                <?php } */?>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>