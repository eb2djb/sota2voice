<?php
$file = 'spots.txt';
$indi_activador = $_POST['fullCallsign'];
$frecuencia = $_POST['frequency'];
$cumbre = $_POST['summitName'];
$sota_ref = $_POST['summitRef'];
$longitud = strlen($indi_activador);
$icao = '';
for ($i = 0; $i < $longitud; $i++) {
    // Accede al carácter en la posición $i
	switch ($indi_activador[$i]) {

        case 1:
                $icao .= "1 ";
                break;
        case 2:
                $icao .= "2 ";
                break;
        case 3:
                $icao .= "3 ";
                break;
        case 4:
                $icao .= "4 ";
                break;
        case 5:
                $icao .= "5 ";
                break;
        case 6:
                $icao .= "6 ";
                break;
        case 7:
                $icao .= "7 ";
                break;
        case 8:
                $icao .= "8 ";
                break;
        case 9:
                $icao .= "9 ";
                break;
    	case A:
        	$icao .= "Alfa ";
        	break;
    	case B:
        	$icao .= "Bravo ";
        	break;
    	case C:
        	$icao .= "Charlie ";
        	break;
	case D:
                $icao .= "Delta ";
                break;
	case E:
                $icao .= "Eco ";
                break;
	case F:
                $icao .= "Foxtrot ";
                break;
	case G:
                $icao .= "Golf ";
                break;
	case H:
                $icao .= "Hotel ";
                break;
	case I:
                $icao .= "India ";
                break;
	case J:
                $icao .= "Juliet ";
                break;
	case K:
                $icao .= "Kilo ";
                break;
	case L:
                $icao .= "Lima ";
                break;
	case M:
                $icao .= "Mike ";
                break;
	case N:
                $icao .= "November ";
                break;
	case O:
                $icao .= "Oscar ";
                break;
	case P:
		if (($longitud - $i) > 2) {
		$icao .= "Papa ";
		} else {
                $icao .= "Portable ";
		}
                break;
	case Q:
                $icao .= "Quebec ";
                break;
	case R:
                $icao .= "Romeo ";
                break;
	case S:
                $icao .= "Sierra ";
                break;
	case T:
                $icao .= "Tango ";
                break;
	case U:
                $icao .= "Uniform ";
                break;
	case V:
                $icao .= "Victor ";
                break;
	case W:
                $icao .= "Whisky ";
                break;
	case X:
                $icao .= "Xilofono ";
                break;
	case Y:
                $icao .= "Yanky ";
                break;
	case Z:
                $icao .= "Zulu ";
                break;
	case "/":
                $icao .= "Barra ";
                break;
        case 0:
                $icao .= "0 ";
                break;
    }
}
// cambiamos el . de la frecu por un espacio
$frecuencia = str_replace(".", " ", $frecuencia, $count);
// ponemos un punto al final de la frecuencia.
$frecuencia .= ".";
$mensaje = "Sota en ".$frecuencia." Activa ".$icao."desde ".$cumbre;
$timestamp = time();
$fecha = date('Y-m-d H:i:s', $timestamp)."EA";
$current =file_get_contents($file); $current .= $fecha."/".$mensaje."\r\n";
file_put_contents($file, $current);
?>
