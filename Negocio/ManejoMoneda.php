<?php
    /**
     * Import classes
     */	
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/bd/Conexion.php';
    require_once ($_SERVER["DOCUMENT_ROOT"]) . '/proyecto_suplos/Persistencia/MonedaDAO.php';
    
	

	class ManejoMoneda{
		
        /**
         * Atributo para la conexión a la base de datos
         */
        private static $conexionBD;		

		function __construct(){
			
		}

        public static function consultMoneda($cod_Moneda){

            $monedaDAO = MonedaDAO::getMonedaDAO(self::$conexionBD);
            $moneda = $monedaDAO->consult($cod_Moneda);
            return $moneda;
        }

        /**
         * Crear una moneda
         * @param Moneda Moneda a crear
         * @return void
         */
        public static function createMoneda($moneda){
            $monedaDAO=MonedaDAO::getMonedaDAO(self::$conexionBD);
            $monedaDAO->create($moneda);
        }

        /**
         * Modificar una moneda
         * @param Moneda Moneda a modificar
         * @return void
         */
        public static function modifyEMoneda($moneda){
            $monedaDAO=MonedaDAO::getMonedaDAO(self::$conexionBD);
            $monedaDAO->modify($moneda);
        }
        /**
         * Eliminar una moneda
         * @param Moneda Moneda a eliminar
         * @return void
         */
        public static function deleteArticle($moneda){
            $monedaDAO=MonedaDAO::getMonedaDAO(self::$conexionBD);
            $monedaDAO->delete($moneda);
        }

        /**
         * Lista de monedas
         * @return Moneda[] Lista de todas las monedas en la BD
         */
        public  static function getList(){
            $monedaDAO=MonedaDAO::getMonedaDAO(self::$conexionBD);
            $moneda=$monedaDAO->getList();
            return $moneda;
        }

	    /**
	    * Cambio de la conexión
	    */
	    public static function setConexionBD($conexionBD){
	                self::$conexionBD = $conexionBD;
	            }
	}
