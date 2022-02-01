<?php
$eleve = [
	'Prénom' => 'Marc', 
	'Nom' => 'Doe', 
	'Notes' => [12, 10, 14]
];

$eleve['Notes'][3] = 15;
print_r($eleve['Notes']);
?>