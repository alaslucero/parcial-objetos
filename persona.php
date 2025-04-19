<?php
class persona{
    private string $nombre;
    private string $apellido;
    private string $direccion;
    private string $mail;
    private int $telefono;
public function __contruct(string $nombreInicial, string $apellidoInicial, string $direccionInicial, string $mailInicial, int $telefonoInicial){
    $this->nombre = $nombreInicial;
    $this->apellido = $apellidoInicial;
    $this->direccion = $direccionInicial;
    $this->mail = $mailInicial;
    $this->telefono = $telefonoInicial;
}
public function getNombre(){
    return $this->nombre;
}
public function getApellido(){
    return $this->apellido;
}
public function getDireccion(){
    return $this->direccion;
}
public function getMail(){
    return $this->mail;
}
public function getTelefono(){
    return $this->telefono;
}
public function setNombre(string $nombreInicial){
    $this->nombre = $nombreInicial;
}
public function setApellido(string $apellidoInicial){
    $this->apellido = $apellidoInicial;
}
public function setDireccion(string $direccionInicial){
    $this->direccion = $direccionInicial;
}
public function setMail(string $mailInicial){
    $this->mail = $mailInicial;
}
public function setTelefono(string $telefonoInicial){
    $this->telefono = $telefonoInicial;
}
public function __toString(){
    return "Nombre:" . $this->getNombre(). "Apellido:" . $this->getApellido() . "Direccion:" . $this->getDireccion() . "Mail:" . $this->getMail() . "Telefono:" . $this->getTelefono();
}


}



?>