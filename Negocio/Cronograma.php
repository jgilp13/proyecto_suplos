<?php

/**
 * Representa la clase de la entidad Cronograma - DTO
 */

class Cronograma
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del cronograma al que pertenece
     *
     * @return int
     */

    private $cod_cronograma;

    /**
     * Fecha de inicio del proceso
     *
     * @return date
     */

    private $fecha_inicio;

    /**
     * Hora de inicio del proceso.
     *
     * @return time
     */

    private $hora_inicio;

        /**
     * Fecha de cierre del proceso
     *
     * @return date
     */

     private $fecha_cierre;

     /**
      * Hora de cierre del proceso.
      *
      * @return time
      */
 
     private $hora_cierre;
   

    /**
     * Obtener el valor de cod_cronograma
     */

    public function getCod_cronograma()
    {
        return $this->cod_cronograma;
    }

    /**
     * Establecer el valor de cod_cronograma
     *
     * @return  self
     */

    public function setCod_cronograma($cod_cronograma)
    {
        $this->cod_cronograma= $cod_cronograma;

        return $this;
    }

    
    /**
     * Obtener el valor de fecha_inicio
     */

     public function getFecha_inicio()
     {
         return $this->fecha_inicio;
     }
 
     /**
      * Establecer el valor de fecha_inicio
      *
      * @return  self
      */
 
     public function setFecha_inicio($fecha_inicio)
     {
         $this->fecha_inicio= $fecha_inicio;
 
         return $this;
     }

    /**
     * Obtener el valor de hora_inicio
     */

     public function getHora_inicio()
     {
         return $this->hora_inicio;
     }
 
     /**
      * Establecer el valor de hora_inicio
      *
      * @return  self
      */
 
     public function setHora_inicio($hora_inicio)
     {
         $this->hora_inicio= $hora_inicio;
 
         return $this;
     }

    /**
     * Obtener el valor de fecha_cierre
     */

     public function getFecha_cierre()
     {
         return $this->fecha_cierre;
     }
 
     /**
      * Establecer el valor de fecha_inicio
      *
      * @return  self
      */
 
     public function setFecha_cierre($fecha_cierre)
     {
         $this->fecha_cierre= $fecha_cierre;
 
         return $this;
     }
  
         /**
     * Obtener el valor de fecha_inicio
     */

     public function getHora_cierre()
     {
         return $this->hora_cierre;
     }
 
     /**
      * Establecer el valor de fecha_inicio
      *
      * @return  self
      */
 
     public function setHora_cierre($hora_cierre)
     {
         $this->hora_cierre= $hora_cierre;
 
         return $this;
     }
}
