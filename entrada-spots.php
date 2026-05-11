<?php
$file = 'spots.txt';
$indi_activador = $_POST['fullCallsign'];
$frecuencia = $_POST['frequency'];
$cumbre = $_POST['summitName'];
$sota_ref = $_POST['summitRef'];


$longitud = strlen($indi_activador);

$icao = '';


$mensaje = "Sota en ".$frecuencia." Activa ".$indi_activador." desde ".$cumbre;


$timestamp = time();
$fecha = date('Y-m-d H:i:s', $timestamp)."EA";


$current = file_get_contents($file);
$current .= $fecha."/".$mensaje."\r\n";
file_put_contents($file, $current);

?>

