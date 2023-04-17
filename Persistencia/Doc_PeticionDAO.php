<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Doc_Peticion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/Util/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Represents the DAO of the Documento de Peticion entity
 */
class Doc_peticionDAO implements DAO
{

    /**
     * Referencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * RReferencia a un objeto docPeticionDAO
     * @var docPeticionDAO
     */
    private static $docPeticionDAO;

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
     * Método para consultar un documento de petición de la oferta por su fecha inicio
     *
     * @param String $nom_titulo
     * @return Doc_Peticion
     */
    public function consultNom_titulo($nom_titulo)
    {

        $sql = "SELECT * FROM DOC_PETICION_OFERTA WHERE nom_titulo = '" . $nom_titulo."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $doc_peticion = new Doc_Peticion();
        $doc_peticion->setCod_peticion($row[0]);
        $doc_peticion->setNom_titulo($row[1]);
        $doc_peticion->setDesc_peticion($row[2]);
        //echo $sql;
        return $doc_peticion;
    }

    /**
     * Método para consultar un documento de petición por su código
     *
     * @param int $cod_peticion
     * @return Moneda
     */
    public function consult($cod_peticion)
    {

        $sql = "SELECT * FROM DOC_PETICION_OFERTA WHERE cod_peticion = " . $cod_peticion;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $doc_peticion = new Doc_Peticion();
        $doc_peticion->setCod_peticion($row[0]);
        $doc_peticion->setNom_titulo($row[1]);
        $doc_peticion->setDesc_peticion($row[2]);
        //echo $sql;
        return $doc_peticion;
    }

    /**
     * Método para crear un documento
     *
     * @param Doc_Peticion
     * @return void
     */
    public function create($doc_peticion)
    {

        $sql = "INSERT INTO DOC_PETICION_OFERTA (nom_titulo, desc_contenido) 
        VALUES ('". $doc_peticion->getNom_titulo() . "',
                 '".$doc_peticion->getDesc_peticion()."');";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para modificar un documento
     *
     * @param Doc_Peticion 
     * @return void
     */
    public function modify($doc_peticion)
    {

        $sql = "UPDATE DOC_PETICION_OFERTA SET cod_peticion = " . $doc_peticion->getCod_peticion(). ",
                                      nom_titulo = '" . $doc_peticion->getNom_titulo() . "',
                                      desc_peticion = '" . $doc_peticion->getDesc_peticion() . "',
                                    where cod_peticion = " . $doc_peticion->getCod_peticion(). ";";
        
        pg_Exec($this->conexion, $sql);
    }

    /**
     * Método para obtener las listas de documentos de peticiones de procesos.
     *
     * @param Object $conexion
     * @return Doc_Peticion[]
     */
    public function getList()
    {

        $sql = "SELECT * FROM DOC_PETICION_OFERTA";
        $doc_peticiones = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $doc_peticion = new Doc_Peticion();
            $doc_peticion->setCod_peticion($row[0]);
            $doc_peticion->setNom_titulo($row[1]);
            $doc_peticion->setDesc_peticion($row[2]);
            $doc_peticiones[] = $doc_peticion;
        }
        return $doc_peticiones;
    }


    /**
     * Método para eliminar un documento de petición
     * @param $cod_peticion
     * @return Doc_Peticion
     */
    public function delete($cod_cronograma)
    {
        $sql = "DELETE FROM DOC_PETICION_OFERTA WHERE cod_peticion=" . $cod_cronograma;
        mysqli_query($this->conexion, $sql);
    }
   
    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return doc_peticion1DAO
     */
    public static function getDoc_PeticionDAO($conexion)
    {
        if (self::$docPeticionDAO == null) {
            self::$docPeticionDAO = new Doc_peticionDAO($conexion);
        }

        return self::$docPeticionDAO;
    }
}
