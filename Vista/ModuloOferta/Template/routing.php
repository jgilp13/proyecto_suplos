<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == 'index') {
        include_once("../Vista/ModuloOferta/index.php");
    }
    if ($_GET['menu'] == 'crearOferta') {
        include_once("../Vista/ModuloOferta/crear.php");
    }
    if ($_GET['menu'] == 'listas') {
        include_once("../Vista/ModuloOferta/listaOfertas.php");
    }
    if ($_GET['menu'] == 'editUser') {
        include_once("../Vista/ModuloOferta/editProceso.php");
    }
    if ($_GET['menu'] == 'consultar') {
        include_once("../Vista/ModuloOferta/consultar.php");
    }
} else {
    include_once("../Vista/ModuloOferta/index.php");
}
?>