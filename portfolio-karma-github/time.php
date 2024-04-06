<?php $data = json_decode(file_get_contents('php://input'), true);
$timezone = $data['timezone'];

// Définir le fuseau horaire
date_default_timezone_set($timezone);

// Obtenir l'heure actuelle
$heure = date("H");
$minutes = date("i");

// Construire l'heure au format HH h MM
$time = $heure . " " . "h" . " " . $minutes;

// Renvoyer l'heure au format JSON
echo json_encode($time);
?> ?>