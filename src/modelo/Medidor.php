<?php


class Medidor
{

    private $marca;
    private $direccionInstalacion;
    private $costo;
    private $clave;


    public function __construct($marca, $direccionInstalacion, $costo, $clave)
    {
        $this->marca = $marca;
        $this->direccionInstalacion = $direccionInstalacion;
        $this->costo = $costo;
        $this->clave = $clave;
    }
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getDireccionInstalacion()
    {
        return $this->direccionInstalacion;
    }

    public function setDireccionInstalacion($direccionInstalacion)
    {
        $this->direccionInstalacion = $direccionInstalacion;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;
    }

    public function hacerArreglo (){
        $med['Marca'] = $this->marca;
        $med['Dir Instalacion'] = $this->direccionInstalacion;
        $med['Costo'] = $this->costo;
        $med['Clave'] = $this->clave;
        return $med;

    }

    

}