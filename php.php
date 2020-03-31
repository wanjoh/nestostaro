<?php
	if(isset($_POST['submit'])){//to run PHP script on submit
	$ime = $_POST ['ime'];
	$mejl = $_POST ['mejl'];
	$datum = $_POST ['datum'];
	$rdb_value = $_POST['pol'];
	$zivotinje = $_POST['zivotinje'];
	$brzivotinje = $_POST['brz'];
	$brdana = $_POST['brd'];
	$skr=" ";
	$br=" ";
	$k=0;
	
	$dodaci = 'Nikakvi dodaci nisu potrebni';
	/*if (isset($_POST['chck'])){
	$dodaci=implode(',', $_POST['chck']);
	}*/
	if (isset($_POST['chck'])){
		switch($_POST['chck']){case 'ima_teskoca_sa_kretanjem':$dodaci="ima teškoća sa kretanjem";break;
		case 'stariji_je_od_8_godina': $dodaci="Stariji je od 8 godina" ;break;default:$dodaci="Stariji je od 8 godina i ima teškoća sa kretanjem";break;}
	/* if($_POST['chck'] =='ima_teskoca_sa_kretanjem') $dodaci="ima teškoća sa kretanjem";
	 if($_POST['chck'] == 'stariji_je_od_8_godina') $dodaci="Stariji je od 8 godina" ;
	else $dodaci="Stariji je od 8 godina i ima teškoća sa kretanjem";*/
	}
	$txt= "Ime i prezime klijenta je:".$ime."\n".
	"E-mejl klijenta je:".$mejl."\n".
	"Datum podnošenja prijave je:".$datum."\n".
	"Izabrani pol životinje je:".$rdb_value."\n".
	"Izabrana životinja je:".$zivotinje."\n".
	"Broj izabranih životinja je".$brzivotinje."\n".
	"Broj dana je:".$brdana."\n".
	$dodaci."\n";
	
	echo $txt;
	$myfile = fopen("tekst.txt", "a") or die("Unable to open file!");
	fwrite($myfile,$txt."\r\n");
	fclose($myfile);
	}
	header('Location: http://localhost:8013/Web/index.html');
?>