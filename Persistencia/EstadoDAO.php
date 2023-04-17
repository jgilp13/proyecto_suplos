<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Estado.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Representa la DAO de la entidad Moneda
 */
class EstadoDAO implements DAO
{

    /**
     * Referencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * Referencia a un objeto estadoDAO
     * @var estadoDAO
     */
    private static $estadoDAO;

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
     * Método para consultar un estado por su tipo
     *
     * @param String $nom_estado
     * @return Estado
     */
    public function consultMoneda($nom_estado)
    {

        $sql = "SELECT * FROM ESTADO WHERE nom_estado = '" . $nom_estado."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $estado = new Estado();
        $estado->setCod_estado($row[0]);
        $estado->setNom_estado($row[1]);
        //echo $sql;
        return $estado;
    }


    /**
     * Método para consultar un estado por su código
     *
     * @param int $cod_estado
     * @return Estado
     */
    public function consult($cod_estado)
    {

        $sql = "SELECT * FROM ESTADO WHERE cod_estado = " . $cod_estado;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $estado = new Estado();
        $estado->setCod_estado($row[0]);
        $estado->setNom_estado($row[1]);

        return $estado;
    }

    /**
     * Método para crear un estado. 
     *
     * @param Estado
     * @return void
     */
    public function create($estado)
    {

        $sql = "INSERT INTO ESTADO (nom_estado) 
        VALUES (". $estado->getNom_estado() . ");";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para modificar un estado. 
     *
     * @param Estado 
     * @return void
     */
    public function modify($estado)
    {

        $sql = "UPDATE ESTADO SET cod_estado = " . $estado->getCod_estado() . ",
                                    nom_estado = '" . $estado->getNom_estado() . "'
                                    where cod_estado = " . $estado->getCod_estado() . ";";
        
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para obtener la lista de estado. 
     *
     * @param Object $conexion
     * @return Estado[]
     */
    public function getList()
    {

        $sql = "SELECT * FROM ESTADO";
        $estados = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $estado = new Estado();
            $estado->setCod_estado($row[0]);
            $estado->setNom_estado($row[1]);
            $estados[] = $estado;
        }
        return $estados;
    }


    /**
     * Método para eliminar un estado
     * @param $cod_estado
     * @return Estado
     */
    public function delete($cod_estado)
    {
        $sql = "DELETE FROM ESTADO WHERE cod_estado=" . $cod_estado;
        mysqli_query($this->conexion, $sql);
    }
   
    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return estadoDAO
     */
    public static function getEstadoDAO($conexion)
    {
        if (self::$estadoDAO == null) {
            self::$estadoDAO = new EstadoDAO($conexion);
        }

        return self::$estadoDAO;
    }
}
