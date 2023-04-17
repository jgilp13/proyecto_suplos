<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Moneda.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Representa la DAO de la entidad Moneda
 */
class MonedaDAO implements DAO
{

    /**
     * Referencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * Referencia a un objeto userDAO
     * @var monedaDAO
     */
    private static $monedaDAO;

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
     * Método para consultar una moneda por su divisa
     *
     * @param String $nom_moneda
     * @return Moneda
     */
    public function consultMoneda($nom_moneda)
    {

        $sql = "SELECT * FROM MONEDA WHERE nom_moneda = '" . $nom_moneda."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $moneda = new Moneda();
        $moneda->setCod_moneda($row[0]);
        $moneda->setNom_moneda($row[1]);

        //echo $sql;
        return $moneda;
    }


    /**
     * Método para consultar un tipo de moneda
     *
     * @param int $cod_moneda
     * @return Moneda
     */
    public function consult($cod_moneda)
    {

        $sql = "SELECT * FROM MONEDA WHERE cod_moneda = " . $cod_moneda;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $moneda = new Moneda();
        $moneda->setCod_moneda($row[0]);
        $moneda->setNom_moneda($row[1]);
        return $moneda;
    }

    /**
     * Método para crear una moneda
     *
     * @param Moneda
     * @return void
     */
    public function create($moneda)
    {

        $sql = "INSERT INTO MONEDA (nom_moneda) 
        VALUES (". $moneda->getNom_moneda() . ");";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para modificar una moneda
     *
     * @param Moneda 
     * @return void
     */
    public function modify($moneda)
    {

        $sql = "UPDATE USUARIO SET cod_moneda = " . $moneda->getCod_moneda() . ",
                                    nom_moneda = '" . $moneda->getNom_moneda() . "'
                                    where cod_usuario = " . $moneda->getCod_usuario() . ";";
        
        pg_Exec($this->conexion, $sql);
    }

    /**
     * Método para obtener la lista de monedas
     *
     * @param Object $conexion
     * @return Moneda[]
     */
    public function getList()
    {

        $sql = "SELECT * FROM MONEDA";
        $monedas = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $moneda = new Moneda();
            $moneda->setCod_moneda($row[0]);
            $moneda->setNom_moneda($row[1]);
            $monedas[] = $moneda;
        }
        return $monedas;
    }


    /**
     * Método para eliminar una moneda
     * @param $cod_moneda
     * @return Moneda
     */
    public function delete($cod_moneda)
    {
        $sql = "DELETE FROM MONEDA WHERE cod_usuario=" . $cod_moneda;
        mysqli_query($this->conexion, $sql);
    }
   
    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return monedaDAO
     */
    public static function getMonedaDAO($conexion)
    {
        if (self::$monedaDAO == null) {
            self::$monedaDAO = new MonedaDAO($conexion);
        }

        return self::$monedaDAO;
    }
}
