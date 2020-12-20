<?php
function afficheDateHeureFr($date)
{
	$dt = DateTime::createFromFormat('Y-m-d H:i:s', $date);
	$date = $dt->format('d F Y');
	$english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$french_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	$time = $dt->format('H:i:s');
	return str_replace($english_months, $french_months, $date) . " à " . $time;
}

function afficheDateFr($date)
{
	$dt = DateTime::createFromFormat('Y-m-d', $date);
	$date = $dt->format('l d F Y');
	$english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
	$french_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	$french_days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
	return str_replace($english_months, $french_months, str_replace($english_days, $french_days, $date));
}

function afficheDateUs($date)
{
	return DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');
}

function vide($var)
{
	return (!isset($var) or is_null($var) or $var == "" or $var == array()) ? true : false;
}

function is_empty($tab)
{
	$result = false;
	foreach ($tab as $t) {
		$result = (empty($t)) ? true : false;
	}
	return $result;
}

function is_connected()
{
	return (!is_empty($_SESSION) && isset($_SESSION['id']) && isset($_SESSION['nom'])) ? true : false;
}

function is_admin()
{
	return (is_connected() && isset($_SESSION['admin'])) ? true : false;
}

function debug($tab = array(), $die = false)
{
	echo "<pre>";
	foreach ($tab as $t) {
		var_dump($t);
	}
	echo "</pre>";
	if ($die) die();
}

function getExtension($fic)
{
	$parts = explode(".", $fic);
	return $parts[count($parts) - 1];
}

function slug($string)
{
	return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|copy|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
}

function excerpt($chaine, $longueur)
{
	$tab = explode(" ", $chaine);
	$long = count($tab);
	if ($long < $longueur)
		return $chaine;
	else {
		$result = "";
		for ($i = 0; $i <= $longueur; $i++) {
			$result .= $tab[$i] . " ";
		}
		return $result . "...";
	}
}

function includeTemplate($chemin)
{
	ob_start();
	include_once($chemin);
	$retour = ob_get_clean();
	return $retour;
}

function validateDate($date, $format = 'Y-m-d H:i:s')
{
	$d = DateTime::createFromFormat($format, $date);
	return $d && $d->format($format) == $date;
}
