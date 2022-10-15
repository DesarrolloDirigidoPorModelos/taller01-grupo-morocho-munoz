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

    $existe = $this->verificarExiste($medidor->getClave());
    if($existe==false){
        $this->setMedidor($medidor);
        return 'Medidor : <b>'.ucfirst($medidor->getMarca()). '</b> <br>Agregado al cliente: '. $nombre . ' ' . $apellido;
    }else{
    return 'EL MEDIDOR # '.$medidor->getClave().' YA EXISTE EN LA LISTA DEL CLIENTE';
}

   
}

public function verificarExiste($clave)
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
