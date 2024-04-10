<?php
include "Pasajero1.php";
include "Responsable1.php";



class Viaje {
    private $codigo;
    private $destino;
    private $cantidadMaximaPasajeros;
    private $pasajeros = [];
    private $responsable;

    public function __construct($codigo, $destino, $cantidadMaximaPasajeros, $responsable) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantidadMaximaPasajeros = $cantidadMaximaPasajeros;
        $this->responsable = $responsable;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getDestino() {
        return $this->destino;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function getCantidadMaximaPasajeros() {
        return $this->cantidadMaximaPasajeros;
    }

    public function setCantidadMaximaPasajeros($cantidadMaximaPasajeros) {
        $this->cantidadMaximaPasajeros = $cantidadMaximaPasajeros;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    public function agregarPasajero($pasajero) {
        if (count($this->pasajeros) < $this->cantidadMaximaPasajeros) {
            foreach ($this->pasajeros as $p) {
                if ($p->getNumeroDocumento() === $pasajero->getNumeroDocumento()) {
                    echo "El pasajero ya está registrado en el viaje.\n";
                    return;
                }
            }
            $this->pasajeros[] = $pasajero;
            echo "Pasajero agregado al viaje.\n";
        } else {
            echo "El viaje está completo, no hay mas espasio.\n";
        }
    }

    public function modificarPasajero($numeroDocumento, $nombre, $apellido, $telefono) {
        foreach ($this->pasajeros as $pasajero) {
            if ($pasajero->getNumeroDocumento() === $numeroDocumento) {
                $pasajero->setNombre($nombre);
                $pasajero->setApellido($apellido);
                $pasajero->setTelefono($telefono);
                echo "Datos  actualizados.\n";
                return;
            }
        }
        echo "El pasajero no está registrado \n";
    }

    public function verDatosViaje() {
        echo "Código del viaje: " . $this->codigo . "\n";
        echo "Destino: " . $this->destino . "\n";
        echo "Cantidad máxima de pasajeros: " . $this->cantidadMaximaPasajeros . "\n";
        echo "Responsable del viaje: " . $this->responsable . "\n";
        echo "Pasajeros del viaje:\n";
        foreach ($this->pasajeros as $pasajero) {
            echo $pasajero . "\n";
        }
    }
}


