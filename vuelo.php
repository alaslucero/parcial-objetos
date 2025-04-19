<?php
class vuelo{
    private int $numero;
    private float $importe;
    private string $fecha;
    private string $destino;
    private string $horaDeArribo;
    private string $horaPartida;
    private int $cantAsientosTotales;
    private int $cantAsientosDisponibles;
    private persona $personaResponsable;
public function __construct(int $numeroInicial, float $importeInicial, string $fechaInicial, string $destinoInicial, string $horaDeArriboInicial, string $horaPartidaInicial, int $cantAsientosTotalesInicial, int $cantAsientosDisponiblesInicial, persona $personaResponsableInicial){
    $this->numero = $numeroInicial;
    $this->importe = $importeInicial;
    $this->fecha = $fechaInicial;
    $this->destino = $destinoInicial;
    $this->horaDeArribo = $horaDeArriboInicial;
    $this->horaPartida = $horaPartidaInicial;
    $this->cantAsientosTotales = $cantAsientosTotalesInicial;
    $this->cantAsientosDisponibles = $cantAsientosDisponiblesInicial;
    $this->personaResponsable =  $personaResponsableInicial;
}
public function getNumero(){
    return $this->numero;
}
public function getImporte(){
    return $this->importe;
}
public function getFecha(){
    return $this->fecha;
}
public function getDestino(){
    return $this->destino;
}
public function getHoraDeArribo(){
    return $this->horaDeArribo;
}
public function getHoraPartida(){
    return $this->horaPartida;
}
public function getCantAsientosTotales(){
    return $this->cantAsientosTotales;
}
public function getCantAsientosDisponibles(){
    return $this->cantAsientosDisponibles;
}
public function getPersonaResponsable(){
    return $this->personaResponsable;
}
public function setNumero( int $numeroInicial){
    $this->numero = $numeroInicial;
}
public function setImporte(float $importeInicial){
    $this->importe = $importeInicial;
}
public function setFecha(string $fechaInicial){
    $this->fecha = $fechaInicial;
}
public function setCantAsientosTotales(int $cantAsientosTotalesInicial){
    $this->cantAsientosTotales = $cantAsientosTotalesInicial;
}
public function setCantAsientosDisponibiles(int $cantAsientosDisponiblesInicial){
    $this->cantAsientosDisponibles = $cantAsientosDisponiblesInicial;
}
public function setPersonaResponsable(persona $personaResponsableInicial){
    $this->personaResponsable = $personaResponsableInicial;
}
public function asignarAsientosDisponibles($cant_Pasajeros){
    $respuesta = false;
    $cant_disp = $this->getCantAsientosDisponibles();
    if ( $cant_Pasajeros <= $cant_disp){
        $respuesta = true;
    }
    return $respuesta;
}
 
}

//número, importe, fecha, destino, hora arribo, hora partida, cantidad asientos totales y disponibles, y una referencia a la persona responsable del vuelo. 

?>