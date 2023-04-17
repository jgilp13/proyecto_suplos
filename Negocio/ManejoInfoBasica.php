<?php
    /**
     * Import classes
     */	
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/Info_BasicaDAO.php';
    
	

	class ManejoInfoBasica{
		
        /**
         * Atribute for the connection to  the database
         */
        private static $conexionBD;		

		function __construct(){
			
		}

        public static function consultInfoBascia($cod_info){

            $infoDAO = Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $info = $infoDAO->consult($cod_info);
            return $info;
        }

        /**
         * Crear una información de básica
         * @param Informacion_Basica 
         * @return void
         */
        public static function createInfoBasica($info){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->create($info);
        }

        /**
         * Crear una información de básica con cronograma
         * @param Informacion_Basica 
         * @return void
         */
        public static function createInfoBasicaxCronograma($info){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->createxcronograma($info);
        }

        /**
         * Crear eventos para publicado en Información de básica
         * @param Informacion_Basica 
         * @return void
         */
        public static function createEventoxPublicado($info, $fecha_inicio, $hora_inicio){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->createEventoxPublicado($info,$fecha_inicio,$hora_inicio);
        }

        /**
         * Crear eventos para evaluación en Información de básica
         * @param Informacion_Basica 
         * @return void
         */
        public static function createEventoxEvaluacion($info, $fecha_inicio, $hora_inicio){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->createEventoxEvaluacion($info,$fecha_inicio,$hora_inicio);
        }

        /**
         * Modificar una información de estado
         * @param Informacion_Basica Información de básica a modificar
         * @return void
         */
        public static function modifyInfoBasica($info){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->modify($info);
        }

        /**
         * Modificar un estado Publicado por la información básica
         * @param Informacion_Basica 
         * @return void
         */
        public static function modifyInfoEstadoxPublicado($info){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->modifyEstadoxPublicado($info);
        }

        /**
         * Modificar un estado Evaluación por la información básica
         * @param Informacion_Basica 
         * @return void
         */
        public static function modifyInfoEstadoxEvaluacion($info){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->modifyEstadoxEvaluacion($info);
        }

        /**
         * Eliminar una información básica
         * @param Informacion_Basica 
         * @return void
         */
        public static function deleteInfo_Basica($info){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $infoDAO->delete($info);
        }

        /**
         * Lista de información de básica 
         * @return Informacion_Basica[] Lista de todas las informaciones básicas en la BD
         */
        public  static function getList(){
            $infoDAO=Info_BasicaDAO::getInfo_BasicaDAO(self::$conexionBD);
            $info=$infoDAO->getList();
            return $info;
        }

	    /**
	    * Cambio de la conexión
	    */
	    public static function setConexionBD($conexionBD){
	                self::$conexionBD = $conexionBD;
	            }
	}
