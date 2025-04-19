<?php
class aerolineas{
    private string $identificacion;
    private string $nombre;
    private array $coleccionVuelosProgramados;
public function __construct(string $identificacionInicial, string $nombreInicial){
    $this->identificacion = $identificacionInicial;
    $this->nombre = $nombreInicial;
    $this->coleccionVuelosProgramados = [];
}
public function getIdentificacion(){
    return $this->identificacion;
}
public function getNombre(){
    return $this->nombre;;
}
public function getColeccionVuelosProgramados(){
    return $this->coleccionVuelosProgramados;
}
public function setIdentificacion(string $identificacionInicial){
    $this->identificacion = $identificacionInicial;
}
public function setNombre(string $nombreInicial){
    $this->nombre = $nombreInicial;
}
public function setColeccionVuelosProgramados(array $coleccionVuelosProgramadosInicial){
    $this->coleccionVuelosProgramados = $coleccionVuelosProgramadosInicial;
}
public function __toString(){
    return "identificacion:" . $this->getIdentificacion() . "nombre:" . $this->getNombre() . "coleccionVuelosProgramados:" . implode(",", $this->getColeccionVuelosProgramados());
}
public function darVueloADestino($destino,$cantAsientos){
    $colVuelos=[];
    $coleccionVuelosAerolinas = $this->getColeccionVuelosProgramados();
    foreach($coleccionVuelosAerolinas as $vuelo){

        if( $vuelo->getDestino() == $destino && $vuelo->getCantidadAsientosDisponibles>= $cantAsientos){
             $this->$colVuelos[]=$vuelo; 
        }
        return $colVuelos;
    }
}
    
public function incorporarVuelo($vuelo){
    $coleccionVuelosAerolinas = $this->getColeccionVuelosProgramados();
    $bandera = true;
    foreach($coleccionVuelosAerolinas as $vueloA){
         if($vueloA->getDestino == $vuelo->getDestino && $vueloA->getFecha == $vuelo->getFecha && $vueloA->getHorarioDePartida == $vuelo->getHorarioDePartida){
             $bandera = false;
         }
         return $bandera;
       }


}
      

}



// Implementar en la clase Aerolinea el método incorporarVuelo que recibe como parámetro un vuelo, verifica que no se encuentre registrado ningún otro vuelo al mismo destino, en la misma fecha y con el mismo horario de partida.

 //El método debe retornar verdadero si la incorporación del vuelo se realizó correctamente y falso en caso contrario.











?>