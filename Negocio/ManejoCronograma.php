<?php
    /**
     * Import classes
     */	
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/CronogramaDAO.php';
    
	

	class ManejoCronograma{
		
        /**
         * Atributo para la conexión a la base de datos
         */
        private static $conexionBD;		

		function __construct(){
			
		}

        public static function consultCronograma($codCronograma){

            $cronogramaDAO = CronogramaDAO::getCronogramaDAO(self::$conexionBD);
            $cronograma = $cronogramaDAO->consult($codCronograma);
            return $cronograma;
        }
        
        /**
         *  Obtener el último creado de Cronograma
         * @return Cronograma[] último código de cronograma
         */
        public static function consultCronogramaUltimo(){
            $cronogramaDAO=CronogramaDAO::getCronogramaDAO(self::$conexionBD);
            $cronograma=$cronogramaDAO->consultUltimo();
            return $cronograma;
        }

        /**
         * Crear un cronograma
         * @param Cronograma Cronograma to create
         * @return void
         */
        public static function createCronograma($cronograma){
            $cronogramaDAO=CronogramaDAO::getCronogramaDAO(self::$conexionBD);
            $cronogramaDAO->create($cronograma);
        }

        /**
         * Modificar un cronograma
         * @param Cronograma Cronograma a modificar
         * @return void
         */
        public static function modifyCronograma($cronograma){
            $cronogramaDAO=CronogramaDAO::getCronogramaDAO(self::$conexionBD);
            $cronogramaDAO->modify($cronograma);
        }
        /**
         * Eliminar un cronograma
         * @param Cronograma Cronograma a modificar
         * @return void
         */
        public static function deleteCronograma($cronograma){
            $cronogramaDAO=CronogramaDAO::getCronogramaDAO(self::$conexionBD);
            $cronogramaDAO->delete($cronograma);
        }

        /**
         * Lista de cronogramas
         * @return Cronograma[] Lista de todos los Cronograma en la Base de Datos
         */
        public  static function getList(){
            $cronogramaDAO=CronogramaDAO::getCronogramaDAO(self::$conexionBD);
            $cronograma=$cronogramaDAO->getList();
            return $cronograma;
        }

	    /**
	    * Cambia la conexión
	    */
	    public static function setConexionBD($conexionBD){
	                self::$conexionBD = $conexionBD;
	            }
	}
