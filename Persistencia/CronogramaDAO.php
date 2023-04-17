<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Cronograma.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Represents the DAO of the user entity
 */
class CronogramaDAO implements DAO
{

    /**
     * RReferencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * RReferencia a un objeto cronogramaDAO
     * @var cronogramaDAO
     */
    private static $cronogramaDAO;

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
     * Método para consultar un cronograma por su fecha inicio
     *
     * @param date $fecha_inicio
     * @return Cronograma
     */
    public function consultCro_FechaInicio($fecha_inicio)
    {

        $sql = "SELECT * FROM CRONOGRAMA WHERE fecha_inicio = '" . $fecha_inicio."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $cronograma = new Cronograma();
        $cronograma->setCod_cronograma($row[0]);
        $cronograma->setFecha_inicio($row[1]);
        $cronograma->setHora_inicio($row[2]);
        $cronograma->setFecha_cierre($row[3]);
        $cronograma->setHora_cierre($row[4]);
        //echo $sql;
        return $cronograma;
    }

        /**
     * Método para consultar un cronograma por su hora inicio
     *
     * @param time $hora_inicio
     * @return Cronograma
     */
    public function consultCro_HoraInicio($hora_inicio)
    {

        $sql = "SELECT * FROM CRONOGRAMA WHERE hora_inicio = '" . $hora_inicio."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $cronograma = new Cronograma();
        $cronograma->setCod_cronograma($row[0]);
        $cronograma->setFecha_inicio($row[1]);
        $cronograma->setHora_inicio($row[2]);
        $cronograma->setFecha_cierre($row[3]);
        $cronograma->setHora_cierre($row[4]);
        //echo $sql;
        return $cronograma;
    }

    /**
     * Método para consultar un cronograma por su fecha de cierre
     *
     * @param date $fecha_cierre
     * @return Cronograma
     */
    public function consultCro_FechaCierre($fecha_cierre)
    {

        $sql = "SELECT * FROM CRONOGRAMA WHERE fecha_cierre = '" . $fecha_cierre."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $cronograma = new Cronograma();
        $cronograma->setCod_cronograma($row[0]);
        $cronograma->setFecha_inicio($row[1]);
        $cronograma->setHora_inicio($row[2]);
        $cronograma->setFecha_cierre($row[3]);
        $cronograma->setHora_cierre($row[4]);
        //echo $sql;
        return $cronograma;
    }

    /**
     * Método para consultar un cronograma por su hora de cierre
     *
     * @param time $hora_cierre
     * @return Cronograma
     */
    public function consultCro_HoraCierre($hora_cierre)
    {

        $sql = "SELECT * FROM CRONOGRAMA WHERE fecha_cierre = '" . $hora_cierre."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $cronograma = new Cronograma();
        $cronograma->setCod_cronograma($row[0]);
        $cronograma->setFecha_inicio($row[1]);
        $cronograma->setHora_inicio($row[2]);
        $cronograma->setFecha_cierre($row[3]);
        $cronograma->setHora_cierre($row[4]);
        //echo $sql;
        return $cronograma;
    }   

    /**
     * Método para consultar un código de cronogroma que se relaciona a la información básica
     *
     * @param int $cod_cronograma
     * @return Cronograma
     */
    public function consult($cod_cronograma)
    {

        $sql = "SELECT * FROM CRONOGRAMA WHERE cod_cronograma = " . $cod_cronograma;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $cronograma = new Cronograma();
        $cronograma->setCod_cronograma($row[0]);
        $cronograma->setFecha_inicio($row[1]);
        $cronograma->setHora_inicio($row[2]);
        $cronograma->setFecha_cierre($row[3]);
        $cronograma->setHora_cierre($row[4]);
        return $cronograma;
    }

        /**
     * Método para mostrar la última fila de la lista de cronograma que se relaciona a la creación de
     * información
     *
     * @param int $cod_cronograma
     * @return Cronograma
     */
    public function consultUltimo()
    {

        $sql = "SELECT * FROM CRONOGRAMA order by cod_cronograma desc limit 1";
        $cronogramas = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $cronograma = new Cronograma();
            $cronograma->setCod_cronograma($row[0]);
            $cronograma->setFecha_inicio($row[1]);
            $cronograma->setHora_inicio($row[2]);
            $cronograma->setFecha_cierre($row[3]);
            $cronograma->setHora_cierre($row[4]);
            $cronogramas[] = $cronograma;
        }
        return $cronogramas;
    }

    /**
     * Método para crear un cronograma
     *
     * @param Cronograma
     * @return void
     */
    public function create($cronograma)
    {

        $sql = "INSERT INTO CRONOGRAMA (fecha_inicio, hora_inicio, fecha_cierre, hora_cierre) 
        VALUES ('". $cronograma->getFecha_inicio() . "',
                 '".$cronograma->getHora_inicio()."',
                 '".$cronograma->getFecha_cierre()."',
                 '".$cronograma->getHora_cierre()."');";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para modificar un cronograma como fecha y hora
     *
     * @param Cronograma 
     * @return void
     */
    public function modify($cronograma)
    {

        $sql = "UPDATE CRONOGRAMA SET cod_cronograma = " . $cronograma->getCod_cronograma(). ",
                                      fecha_inicio = '" . $cronograma->getNom_moneda() . "',
                                      hora_inicio = '" . $cronograma->getHora_inicio() . "',
                                      fecha_cierre = '" . $cronograma->getFecha_cierre(). "',
                                      hora_cierre = '" . $cronograma->getHora_cierre(). "'
                                    where cod_usuario = " . $cronograma->getCod_cronograma(). ";";
        
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para obtener las listas de cronogramas
     *
     * @param Object $conexion
     * @return Cronograma[]
     */
    public function getList()
    {

        $sql = "SELECT * FROM CRONOGRAMA";
        $cronogramas = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $cronograma = new Cronograma();
            $cronograma->setCod_cronograma($row[0]);
            $cronograma->setFecha_inicio($row[1]);
            $cronograma->setHora_inicio($row[2]);
            $cronograma->setFecha_cierre($row[3]);
            $cronograma->setHora_cierre($row[4]);
            $cronogramas[] = $cronograma;
        }
        return $cronogramas;
    }


    /**
     * Método para eliminar un cronograma
     * @param $cod_cronograma
     * @return Cronograma
     */
    public function delete($cod_cronograma)
    {
        $sql = "DELETE FROM CRONOGRAMA WHERE cod_cronograma=" . $cod_cronograma;
        mysqli_query($this->conexion, $sql);
    }
   
    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return cronogramaDAO
     */
    public static function getCronogramaDAO($conexion)
    {
        if (self::$cronogramaDAO == null) {
            self::$cronogramaDAO = new CronogramaDAO($conexion);
        }

        return self::$cronogramaDAO;
    }
}
