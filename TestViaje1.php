<?php
include "Pasajero1.php";
include "pruba.php";
include "Responsable1.php";
echo "Bienvenido al sistema de viajes\n";

$responsable = new ResponsableV("123", "ABC123", "Juan", "Perez");
$viaje = new Viaje("1234", "chile", 2, $responsable);

while (true) {
    echo "\nSeleccione una opción:\n";
    echo "1. Agregar pasajero\n";
    echo "2. Modificar datos de pasajero\n";
    echo "3. Ver datos del viaje\n";
    echo "4. Salir\n";

    $opcion = readline("Opción: ");

    switch ($opcion) {
        case '1':
            $nombre = readline("Nombre : ");
            $apellido = readline("Apellido : ");
            $numeroDocumento = readline("dni: ");
            $telefono = readline("Teléfono del pasajero: ");
            $pasajero = new Pasajero($nombre, $apellido, $numeroDocumento, $telefono);
            $viaje->agregarPasajero($pasajero);
            break;
        case '2':
            $numeroDocumento = readline("dni a modificar: ");
            $nombre = readline("Nuevo nombre: ");
            $apellido = readline("Nuevo apellido: ");
            $telefono = readline("Nuevo teléfono: ");
            $viaje->modificarPasajero($numeroDocumento, $nombre, $apellido, $telefono);
            break;
        case '3':
            $viaje->verDatosViaje();
            break;
        case '4':
            exit("Saliendo del programa.\n");
        
}
    

}