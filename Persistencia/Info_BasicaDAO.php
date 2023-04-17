<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Informacion_Basica.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Representa la DAO de la entidad Informacion Básica
 */
class Info_BasicaDAO implements DAO
{

    /**
     * Referencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * Referencia a un objeto infoBasicaDAO
     * @var infoBasicaDAO
     */
    private static $infoBasicaDAO;

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
     * Método para consultar una informacion por su objeto
     *
     * @param int $objeto
     * @return Informacion_Basica
     */
    public function consultObjeto($objeto)
    {

        $sql = "SELECT * FROM INFORMACION_BASICA WHERE objeto = '" . $objeto."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

        $info = new Informacion_Basica();
        $info->setCod_info_bas($row[0]);
        $info->setObjeto($row[1]);
        $info->setCod_actividad($row[2]);
        $info->setDescripcion($row[3]);
        $info->setCod_moneda($row[4]);
        $info->setNum_presupuesto($row[5]);
        $info->setCod_cronograma($row[6]);
        $info->setCod_estado($row[7]);
        return $info;
    }

    /**
     * Método para consultar una informacion por su precio de presupuesto
     *
     * @param int $num_presupuesto
     * @return Informacion_Basica[]
     */
    public function consultPresupuesto($num_presupuesto)
    {

        $sql = "SELECT * FROM INFORMACION_BASICA WHERE num_presupuesto = '" . $num_presupuesto."'";

        $infos = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $info = new Informacion_Basica();
            $info->setCod_info_bas($row[0]);
            $info->setObjeto($row[1]);
            $info->setCod_actividad($row[2]);
            $info->setDescripcion($row[3]);
            $info->setCod_moneda($row[4]);
            $info->setNum_presupuesto($row[5]);
            $info->setCod_cronograma($row[6]);
            $info->setCod_estado($row[7]);
            $infos[] = $info;
        }
        return $infos;
    }

    
    /**
     * Método para consultar una informacion por su estado
     *
     * @param int $cod_estado
     * @return Informacion_Basica
     */
    public function consultEstado($cod_estado)
    {

        $sql = "SELECT i.objeto, i.descripcion, m.moneda, i.num_presupuesto, c.fecha_inicio, 
        c.hora_inicio, c.fecha_cierre, c.hora_cierre, e.nom_estado
        FROM INFORMACION_BASICA i, MONEDA m, CRONOGRAMA C, ESTADO e WHERE i.cod_estado = '" . $cod_estado."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $info = new Informacion_Basica();
        $info->setCod_info_bas($row[0]);
        $info->setObjeto($row[1]);
        $info->setCod_actividad($row[2]);
        $info->setDescripcion($row[3]);
        $info->setCod_moneda($row[4]);
        $info->setNum_presupuesto($row[5]);
        $info->setCod_cronograma($row[6]);
        $info->setCod_estado($row[7]);
        return $info;
    }


        /**
     * Método para consultar una informacion por su codigo
     *
     * @param int $cod_info_bas
     * @return Informacion_Basica
     */
    public function consult($cod_info_bas)
    {

        $sql = "SELECT * FROM INFORMACION_BASICA WHERE cod_info_bas = '" . $cod_info_bas."'";

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $info = new Informacion_Basica();
        $info->setCod_info_bas($row[0]);
        $info->setObjeto($row[1]);
        $info->setCod_actividad($row[2]);
        $info->setDescripcion($row[3]);
        $info->setCod_moneda($row[4]);
        $info->setNum_presupuesto($row[5]);
        $info->setCod_cronograma($row[6]);
        $info->setCod_estado($row[7]);
        return $info;
    }

    /**
     * Método para crear una información de básica
     *
     * @param Informacion_Basica
     * @return void
     */
    public function create($info)
    {

        $sql = "INSERT INTO INFORMACION_BASICA (objeto, cod_actividad, descripcion, cod_moneda, num_presupuesto, cod_estado) 
        VALUES ('". $info->getObjeto() . "',
                                            " . $info->getCod_actividad() . ",
                                            '" . $info->getDescripcion() . "',
                                            " . $info->getCod_moneda() . ",
                                            " . $info->getNum_presupuesto() . ",
                                            " . $info->getCod_estado() . ");";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

        /**
     * Método para crear la información básica con el cronograma. 
     *
     * @param Informacion_Basica
     * @return void
     */
    public function createxcronograma($info)
    {

        $sql = "INSERT INTO INFORMACION_BASICA (objeto, cod_actividad, descripcion, cod_moneda, num_presupuesto,cod_cronograma, cod_estado) 
        VALUES ('". $info->getObjeto() . "',
                                            " . $info->getCod_actividad() . ",
                                            '" . $info->getDescripcion() . "',
                                            " . $info->getCod_moneda() . ",
                                            " . $info->getNum_presupuesto() . ",
                                            " . $info->getCod_cronograma() . ",
                                            " . $info->getCod_estado() . ");";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para modificar una información básica
     *
     * @param Informacion_Basica 
     * @return void
     */
    public function modify($user)
    {

        $sql = "UPDATE INFORMACION_BASICA SET cod_info_bas = " . $user->getCod_info_bas() . ",
                                     objeto = " . $user->getObjeto() . ",
                                     cod_actividad = '" . $user->getCod_actividad(). "',
                                     descripcion = '" . $user->getDescripcion() . "',
                                     cod_moneda = '" . $user->cod_moneda() . "',
                                     num_presupuesto = '" . $user->num_presupuesto() . "',
                                     cod_cronograma = '" . $user->cod_cronograma() . "',
                                     cod_estado = '" . $user->cod_estado() . "'
                                    where cod_info_bas = " . $user->getCod_info_bas() . ";";
        
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para cambiar el estado de proceso es Publicado
     *
     * @param Informacion_Basica 
     * @return void
     */
    public function modifyEstadoxPublicado($info)
    {

        $sql = "UPDATE INFORMACION_BASICA SET 
                                     cod_estado = 2
                                    where cod_info_bas = " . $info;
        
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para cambiar el estado de proceso es Evaluación
     *
     * @param Informacion_Basica 
     * @return void
     */
    public function modifyEstadoxEvaluacion($info)
    {

        $sql = "UPDATE INFORMACION_BASICA SET 
                                     cod_estado = 3
                                    where cod_info_bas = " . $info ;
        
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para crear un evento para actualizar el estado PUBLICADO
     * @param Informacion_Basica 
     * @return void
     */
    public function createEventoxPublicado($cod_info, $fecha_inicio, $hora_inicio)
    {
        $sql = "CREATE DEFINER=`jgilp`@`localhost` EVENT crearEventoxPublicado".$cod_info."
        ON SCHEDULE AT '".$fecha_inicio. "  ".$hora_inicio.".000000'
        ON COMPLETION NOT PRESERVE ENABLE
        DO UPDATE INFORMACION_BASICA SET 
        cod_estado = 2
       where cod_info_bas = " . $cod_info."";
        //echo $sql;
        mysqli_query($this->conexion, $sql);
    } 

    /**
    * Método para crear un evento para actualizar el estado EVALUACIÓN
    * @param Informacion_Basica 
    * @return void
    */
   public function createEventoxEvaluacion($cod_info, $fecha_final, $hora_final)
   {
       $sql = "CREATE DEFINER=`jgilp`@`localhost` EVENT crearEventoxEvaluacion".$cod_info."
       ON SCHEDULE AT '".$fecha_final. "  ".$hora_final.".000000'
       ON COMPLETION NOT PRESERVE ENABLE
       DO UPDATE INFORMACION_BASICA SET 
       cod_estado = 3
       where cod_info_bas = " . $cod_info."";
       //echo $sql;
       mysqli_query($this->conexion, $sql);
   }   

    /**
     * Método para obtener la lista de información básica
     *
     * @param Object $conexion
     * @return Informacion_Basica[]
     */
    public function getList()
    {

        $sql = "SELECT * FROM INFORMACION_BASICA";
        $infos = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $info = new Informacion_Basica();
            $info->setCod_info_bas($row[0]);
            $info->setObjeto($row[1]);
            $info->setCod_actividad($row[2]);
            $info->setDescripcion($row[3]);
            $info->setCod_moneda($row[4]);
            $info->setNum_presupuesto($row[5]);
            $info->setCod_cronograma($row[6]);
            $info->setCod_estado($row[7]);
            $infos[] = $info;
        }
        return $infos;
    }

 
    /**
     * Método para eliminar una información básica
     * @param $cod_info
     * @return Informacion_Basica
     */
    public function delete($cod_info)
    {
        $sql = "DELETE FROM INFORMACION_BASICA WHERE cod_info_bas=" . $cod_info;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return Info_BasicaDAO
     */
    public static function getInfo_BasicaDAO($conexion)
    {
        if (self::$infoBasicaDAO == null) {
            self::$infoBasicaDAO = new Info_BasicaDAO($conexion);
        }

        return self::$infoBasicaDAO;
    }
}
