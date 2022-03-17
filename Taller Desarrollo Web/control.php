<?php

/*require './model/Participant.php';

$numOne = $_REQUEST['numOne'];
$numTwo = $_REQUEST['numTwo'];


$participant = new Participant();

$out = new stdClass();

$out->numOne = $number->getNumOne();
$out->numTwo = $number->getNumTwo();



echo json_encode( $number->calcMCD() );*/

$option = $_GET['option'];
if( $option == 1 ){

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
    $datos = fread($fp, filesize($file));
    /**
     * cierra el arcivo especificado en parametros
     */
    fclose($fp);
    /**
     * echo: imprimir variable
     */
    echo $datos;
}
else{
    $file = "./resources/files/towns.json";
    $fp = fopen($file, "r");
    $datos = fread($fp, filesize($file));
    fclose($fp);
    /**
     * Almacenar los datos JSON en una variable PHP, y luego decodificarlos en un objeto PHP:
     */
    $data = json_decode($datos);
    $towns = [];
    /**
     * recorre $data y guarda en $town
     */
    foreach ( $data as $town ){
        /**
         * strcmp — Comparación de string segura a nivel binario
         * Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.
         */
        if( strcmp( $town->department,$_GET['code']) == 0 ){
            $towns[] = ['code' => $town->code, 'department' => $town->department, 'name' => $town->name];
        }
    }
    echo (json_encode($towns));
}

