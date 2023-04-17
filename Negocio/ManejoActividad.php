<?php
    /**
     * Import classes
     */	
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/ActividadDAO.php';
    
	

	class ManejoActividad{
		
        /**
         * Atributo para la conexión a la base de datos
         */
        private static $conexionBD;		

		function __construct(){
			
		}

        public static function consultActividad($codActividad){

            $actividadDAO = ActividadDAO::getActividadDAO(self::$conexionBD);
            $actividad = $actividadDAO->consult($codActividad);
            return $actividad;
        }

        /**
         * Crear una actividad
         * @param Actividad Activiad para crear
         * @return void
         */
        public static function createActividad($actividad){
            $actividadDAO=ActividadDAO::getActividadDAO(self::$conexionBD);
            $actividadDAO->create($actividad);
        }

        /**
         * Modificar una actividad
         * @param Actividad Actividad para modificar
         * @return void
         */
        public static function modifyActividad($actividad){
            $actividadDAO=ActividadDAO::getActividadDAO(self::$conexionBD);
            $actividadDAO->modify($actividad);
        }
        /**
         * Eliminar una actividad
         * @param Actividad Actividad para eliminar
         * @return void
         */
        public static function deleteArticle($actividad){
            $actividadDAO=ActividadDAO::getActividadDAO(self::$conexionBD);
            $actividadDAO->delete($actividad);
        }

        /**
         * Lista de actividades
         * @return Actividad[] List of all the articles in the Data Base
         */
        public  static function getList(){
            $actividadDAO=ActividadDAO::getActividadDAO(self::$conexionBD);
            $actividad=$actividadDAO->getList();
            return $actividad;
        }

	    /**
	    * Cambiar la conexión
	    */
	    public static function setConexionBD($conexionBD){
	                self::$conexionBD = $conexionBD;
	            }
	}
