<?php
    /**
     * Import classes
     */	
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/EstadoDAO.php';
    
	

	class ManejoEstado{
		
        /**
         * Atributo para la conexión a la base de datos
         */
        private static $conexionBD;		

		function __construct(){
			
		}

        public static function consultEstado($codEstado){

            $estadoDAO = EstadoDAO::getEstadoDAO(self::$conexionBD);
            $estado = $estadoDAO->consult($codEstado);
            return $estado;
        }

        /**
         * Crear un estado
         * @param Estado Estado para crear
         * @return void
         */
        public static function createEstado($estado){
            $estadoDAO=EstadoDAO::getEstadoDAO(self::$conexionBD);
            $estadoDAO->create($estado);
        }

        /**
         * Modificar un estado
         * @param Estado Estado a modificar
         * @return void
         */
        public static function modifyEstado($estado){
            $estadoDAO=EstadoDAO::getEstadoDAO(self::$conexionBD);
            $estadoDAO->modify($estado);
        }
        /**
         * Eliminar un estado
         * @param Actividad Estado a eliminar
         * @return void
         */
        public static function deleteEstado($actividad){
            $estadoDAO=EstadoDAO::getEstadoDAO(self::$conexionBD);
            $estadoDAO->delete($actividad);
        }

        /**
         * Lista de estados
         * @return Actividad[] Lista de todos los estados en la BD
         */
        public  static function getList(){
            $estadoDAO=ActividadDAO::getActividadDAO(self::$conexionBD);
            $estado=$estadoDAO->getList();
            return $estado;
        }

	    /**
	    * Cambio de la conexión
	    */
	    public static function setConexionBD($conexionBD){
	                self::$conexionBD = $conexionBD;
	            }
	}
