<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Actividad.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Representa la DAO de la entidad Actividad
 */
class ActividadDAO implements DAO
{

    /**
     * Referencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * Referencia a un objeto actividadDAO
     * @var actividadDAO
     */
    private static $actividadDAO;

    //------------------------------------------
    // Constructor
    //------------------------------------------

    /**
     * Constructor de la clase
     *
     * @param Object $conexion
     */
    private function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

 
    /**
     * Método para consultar una actividad por su codigo
     *
     * @param int $cod_actividad
     * @return Actividad
     */
    public function consult($cod_actividad)
    {

        $sql = "SELECT * FROM ACTIVIDAD WHERE cod_producto = " . $cod_actividad;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $actividad = new Actividad();
        $actividad->setCod_segmento($row[0]);
        $actividad->setNom_segmento($row[1]);
        $actividad->setCod_familia($row[2]);
        $actividad->setNom_familia($row[3]);
        $actividad->setCod_clase($row[4]);
        $actividad->setNom_clase($row[5]);
        $actividad->setCod_producto($row[6]);
        $actividad->setNom_producto($row[7]);
        return $actividad;
    }

    /**
     * Métodos para crear una nueva actividad
     *
     * @param Actividad
     * @return void
     */
    public function create($actividad)
    {

        $sql = "INSERT INTO ACTIVIDAD (cod_segmento, nom_segmento, cod_familia, nom_familia, cod_clase, nom_clase, 
        nom_producto) 
        VALUES (". $actividad->getCod_segmento() . ",
                                            '" . $actividad->getNom_segmento() . "',
                                            " . $actividad->getCod_familia() . ",
                                            '" . $actividad->getNom_familia() . "',
                                            " . $actividad->getCod_clase() . ",
                                            '" . $actividad->getNom_clase() . "',
                                            '" . $actividad->getNom_producto() . "');";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Métodos para modificar una actividad
     *
     * @param Actividad 
     * @return void
     */
    public function modify($user)
    {

        $sql = "UPDATE ACTIVIDAD SET cod_producto = " . $user->getCod_producto() . ",
                                     cod_segmento = " . $user->getCod_segmento() . ",
                                     nom_segmento = '" . $user->getNom_segmento(). "',
                                     cod_familia = '" . $user->getCod_familia() . "',
                                     nom_familia = '" . $user->getNom_familia() . "',
                                     cod_clase = '" . $user->getCod_clase() . "',
                                     nom_clase = '" . $user->getNom_clase() . "',
                                     nom_producto = '" . $user->getNom_producto() . "',
                                    where cod_producto = " . $user->getCod_producto() . ";";
        
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Métodos para consultar las actividades
     *
     * @param Object $conexion
     * @return Actividad[]
     */
    public function getList()
    {

        $sql = "SELECT cod_producto, nom_producto FROM ACTIVIDAD;";
        $actividades = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $actividad = new Actividad();
            $actividad->setCod_producto($row[0]);
            $actividad->setNom_producto($row[1]);
            $actividades[] = $actividad;
        }
        return $actividades;
    }


    /**
     * Métodos para eliminar una actividad. 
     * @param $cod_actividad
     * @return Actividad
     */
    public function delete($cod_actividad)
    {
        $sql = "DELETE FROM ACTIVIDAD WHERE cod_producto=" . $cod_actividad;
        mysqli_query($this->conexion, $sql);
    }
   
    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return ActividadDAO
     */
    public static function getActividadDAO($conexion)
    {
        if (self::$actividadDAO == null) {
            self::$actividadDAO = new ActividadDAO($conexion);
        }

        return self::$actividadDAO;
    }
}
