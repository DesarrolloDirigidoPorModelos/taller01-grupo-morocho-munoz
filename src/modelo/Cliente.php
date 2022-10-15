<?php

//require('modelo/Medidor.php');

class Cliente
{

    private $nombre;
    private $apellido;
    private $cedula;
    private $correo;
    private $direccion;
    private $medidor = array ();

    public function __construct($nombre, $apellido, $cedula, $correo, $direccion)
    {
        $this->nombre=$nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->correo = $correo;
        $this->direccion=$direccion;
    }
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getMedidor()
    {
            return $this->medidor;
         
    }

    public function setMedidor($medidor){
        array_push($this->medidor, $medidor);
    }


   public function asignarMedidor($medidor){
    $nombre = $this->getNombre();
    $apellido = $this->getApellido();

    $existe = $this->verificarExisteMedidor($medidor->getClave());
    if($existe==false){
        $this->setMedidor($medidor);
        return 'Medidor : <b>'.ucfirst($medidor->getMarca()). '</b> -  Clave:'. $medidor->getClave().' <br>Agregado al cliente: '. $nombre . ' ' . $apellido;
    }else{
    return 'El medidor con clave # '.$medidor->getClave().' ya existe en la lista del cliente';
}

   
}

public function verificarExisteMedidor($clave)
{
    $lista = $this->medidor;

    foreach ($lista as $key => $value) {

        if($value->getClave()==$clave){
        return true;
        }else{
            return false;
        }
        # code...
    }
}

}
