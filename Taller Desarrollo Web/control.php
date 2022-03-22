<?php

require './model/Participant.php';

/*require './model/Participant.php';

$numOne = $_REQUEST['numOne'];
$numTwo = $_REQUEST['numTwo'];


$participant = new Participant();

$out = new stdClass();

$out->numOne = $number->getNumOne();
$out->numTwo = $number->getNumTwo();

echo json_encode( $number->calcMCD() );*/
$option = $_GET['option'];
if ($option == 1) {
    $file = "./source/participants.json";
    /**La función fopen() sirve para abrir ficheros (archivos)
     * fopen(fichero,modoDeApertura)
     * "r" solo lectura enpieza en el principio del archivo
     */
    $fp = fopen($file, "r");
    /**
     * La función fread() lee de un archivo abierto.
     * fread(file, legth)
     * filesize($file): devuelve el tamaño del archivo
     */
    $data = fread($fp, filesize($file));

    $object = json_decode($data);

//$participant = new Participant($object["name"], $object["id"], $object["discipline"], $object["disciplineType"], $object["events"]);
//$events = $object["events"];

    /*
     * cierra el arcivo especificado en parametros
     */
    fclose($fp);
    /**
     * echo: imprimir variable
     */

    echo json_encode($object);
}