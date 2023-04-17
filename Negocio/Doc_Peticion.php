<?php

/**
 * Representa la clase de la entidad Doc_Peticion - DTO
 */

class Doc_Peticion
{
    //----------------------------
    //Atributos
    //----------------------------

    /**
     * Código del documento de petición de oferta al que pertenece
     *
     * @return int
     */

    private $cod_peticion;

    /**
     * Titulo del documento de petición de oferta
     *
     * @return String
     */

    private $nom_titulo;

    /**
     * Descripcion del documento de petición de oferta.
     *
     * @return String
     */

    private $desc_peticion; 

    /**
     * Obtener el valor de cod_peticion
     */

    public function getCod_peticion()
    {
        return $this->cod_peticion;
    }

    /**
     * Establecer el valor de cod_cronograma
     *
     * @return  self
     */

    public function setCod_peticion($cod_peticion)
    {
        $this->cod_peticion= $cod_peticion;

        return $this;
    }

    /**
     * Obtener el valor de nom_titulo
     */

     public function getNom_titulo()
     {
         return $this->nom_titulo;
     }
 
     /**
      * Establecer el valor de nom_titulo
      *
      * @return  self
      */
 
     public function setNom_titulo($nom_titulo)
     {
         $this->nom_titulo= $nom_titulo;
 
         return $this;
     }


    /**
     * Obtener el valor de desc_peticion
     */

     public function getDesc_peticion()
     {
         return $this->desc_peticion;
     }
 
     /**
      * Establecer el valor de desc_peticion
      *
      * @return  self
      */
 
     public function setDesc_peticion($desc_peticion)
     {
         $this->desc_peticion= $desc_peticion;
 
         return $this;
     }
}
