<?php
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Negocio/Usuario.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/Util/Conexion.php';
require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/DAO.php';

/**
 *Representa la DAO de la entidad Usuario
 */
class UsuarioDAO implements DAO
{

    /**
     * Referencia a la conexión con la base de datos
     * @var Object
     */
    private $conexion;

    /**
     * Referencia a un objeto userDAO
     * @var userDAO
     */
    private static $userDAO;

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
     * Método para consultar un usuario por su nombre
     *
     * @param String $nomCompleto
     * @return Usuario
     */
    public function consultName($nomCompleto)
    {

        $sql = "SELECT * FROM USUARIO WHERE nomCompleto = " . $nomCompleto;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $user = new Usuario();
        $user->setCod_usuario($row[0]);
        $user->setNom_usuario($row[1]);
        $user->setNom_completo($row[2]);
        $user->setCorreo($row[3]);
        $user->setClave($row[4]);
        //echo $sql;
        return $user;
    }


    /**
     * Método para consultar un usuario por su correo
     *
     * @param String $correo
     * @return User
     */
    public function consultEmail($correo)
    {

        $sql = "SELECT * FROM USUARIO WHERE correo = '" . $correo . "';";

        if ($resultado = mysqli_query($this->conexion, $sql)) {

            $row = mysqli_fetch_array($resultado);

            $user = new Usuario();
            $user->setCod_usuario($row[0]);
            $user->setNom_usuario($row[1]);
            $user->setNom_completo($row[2]);
            $user->setCorreo($row[3]);
            $user->setClave($row[4]);
            return $user;
        } else {

            return false;
        }
    }

    /**
     * Método para consultar a un usuario por su tipo de código
     *
     * @param int $cod_usuario
     * @return User
     */
    public function consult($cod_usuario)
    {

        $sql = "SELECT * FROM USUARIO WHERE cod_usuario = " . $cod_usuario;

        if (!$resultado = mysqli_query($this->conexion, $sql));
        $row = mysqli_fetch_array($resultado);

        $user = new Usuario();
        $user->setCod_usuario($row[0]);
        $user->setNom_usuario($row[1]);
        $user->setNom_completo($row[2]);
        $user->setCorreo($row[3]);
        $user->setClave($row[4]);
        return $user;
    }

    /**
     * Método para crear un usuario
     *
     * @param Usuario
     * @return void
     */
    public function create($user)
    {

        $sql = "INSERT INTO USUARIO (nom_usuario, nomCompleto, correo, 
        clave) 
        VALUES ('". $user->getNom_usuario() . "',
                                            '" . $user->getNomCompleto() . "',
                                            '" . $user->getCorreo() . "',
                                            '" . $user->getClave() . "');";
        //echo  $sql;
        mysqli_query($this->conexion, $sql);
    }

    /**
     * Método para modificar un usuario
     *
     * @param User 
     * @return void
     */
    public function modify($user)
    {

        $sql = "UPDATE USUARIO SET cod_usuario = " . $user->getCod_usuario() . ",
                                    nom_usuario = " . $user->getNom_usuario() . ",
                                    nomCompleto = '" . $user->getNomCompleto(). "',
                                    correo = '" . $user->getCorreo() . "',
                                    clave = '" . $user->getClave() . "',
                                    where cod_usuario = " . $user->getCod_usuario() . ";";
        
        pg_Exec($this->conexion, $sql);
    }

    /**
     * Método para obtener la lista de usuarios
     *
     * @param Object $conexion
     * @return Usuario[]
     */
    public function getList()
    {

        $sql = "SELECT * FROM USUARIO";
        $users = array();
        if (!$resultado = mysqli_query($this->conexion, $sql));


        while ($row = mysqli_fetch_array($resultado)) {
            $user = new Usuario();
            $user->setCod_usuario($row[0]);
            $user->setNom_usuario($row[1]);
            $user->setNom_completo($row[2]);
            $user->setCorreo($row[3]);
            $user->setClave($row[4]);
            $users[] = $user;
        }
        return $users;
    }


    /**
     * Método para eliminar un usuario
     * @param $cod_usuario
     * @return User
     */
    public function delete($cod_usuario)
    {
        $sql = "DELETE FROM USUARIO WHERE cod_usuario=" . $cod_usuario;
        mysqli_query($this->conexion, $sql);
    }
   
    /**
     * Obtiene el objeto de esta clase. En caso de ser nulo, lo crea
     *
     * @param Object $conexion
     * @return UsuarioDAO
     */
    public static function getUsuarioDAO($conexion)
    {
        if (self::$userDAO == null) {
            self::$userDAO = new UsuarioDAO($conexion);
        }

        return self::$userDAO;
    }
}
