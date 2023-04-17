<?php

/**
 * Representa la clase de la entidad Informacion_Basica - DTO
 */

class Informacion_Basica
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del Informacion de Basica de la oferta al que pertenece
     *
     * @return int
     */

    private $cod_info_bas;

    /**
     * Objeto en la Información de básica de la oferta
     *
     * @return String
     */

    private $objeto;

    /**
     * Código de actividad al que pertenece .
     *
     * @return int
     */

    private $cod_actividad;

    /**
     * Descripción de la Información básica de la oferta
     *
     * @return String
     */

    private $descripcion;

    /**
     * Código de moneda al que pertenece.
     *
     * @return int
     */

    private $cod_moneda;

    /**
     * Precio de presupuesto
     *
     * @return int
     */

    private $num_presupuesto;

    /**
     * Código de cronograma al que pertenece.
     *
     * @return int
     */

    private $cod_cronograma;

        /**
     * Código de estado al que pertenece.
     *
     * @return int
     */

     private $cod_estado;


    /**
     * Obtener el valor de cod_info_bas
     */

    public function getCod_info_bas()
    {
        return $this->cod_info_bas;
    }

    /**
     * Establecer el valor de cod_segmento
     *
     * @return  self
     */

    public function setCod_info_bas($cod_info_bas)
    {
        $this->cod_info_bas = $cod_info_bas;

        return $this;
    }

    /**
     * Obtener el valor de objeto
     */

    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Establecer el valor de cod_familia
     *
     * @return  self
     */

    public function setObjeto($objeto)
    {
        $this->objeto = $objeto;

        return $this;
    }

    /**
     * Obtener el valor de cod_clase
     */

    public function getCod_actividad()
    {
        return $this->cod_actividad;
    }

    /**
     * Establecer el valor de cod_clase
     *
     * @return  self
     */

    public function setCod_actividad($cod_actividad)
    {
        $this->cod_actividad = $cod_actividad;

        return $this;
    }

    /**
     * Obtener el valor de cod_producto
     */

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Establecer el valor de cod_producto
     *
     * @return  self
     */

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Obtener el valor de cod_moneda
     */

    public function getCod_moneda()
    {
        return $this->cod_moneda;
    }

    /**
     * Establecer el valor de cod_moneda
     *
     * @return  self
     */

    public function setCod_moneda($cod_moneda)
    {
        $this->cod_moneda = $cod_moneda;

        return $this;
    }

    /**
     * Obtener el valor de num_presupuesto
     */

    public function getNum_presupuesto()
    {
        return $this->num_presupuesto;
    }

    /**
     * Establecer el valor de num_presupuesto
     *
     * @return  self
     */

    public function setNum_presupuesto($num_presupuesto)
    {
        $this->num_presupuesto = $num_presupuesto;

        return $this;
    }

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
         $this->cod_cronograma = $cod_cronograma;
 
         return $this;
     }

         /**
     * Obtener el valor de cod_estado
     */

     public function getCod_estado()
     {
         return $this->cod_estado;
     }
 
     /**
      * Establecer el valor de cod_estado
      *
      * @return  self
      */
 
     public function setCod_estado($cod_estado)
     {
         $this->cod_estado = $cod_estado;
 
         return $this;
     }
}
