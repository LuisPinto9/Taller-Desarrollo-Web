<?php

require './model/Participant.php';

$numOne = $_REQUEST['numOne'];
$numTwo = $_REQUEST['numTwo'];


$participant = new Participant();

$out = new stdClass();

$out->numOne = $number->getNumOne();
$out->numTwo = $number->getNumTwo();



echo json_encode( $number->calcMCD() );

