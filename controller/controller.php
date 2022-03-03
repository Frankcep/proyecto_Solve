<?php 
require_once('C:\xampp\htdocs\ABP_Francisco_Gonzalez\app\Clases\ciclos.php');
require_once('C:\xampp\htdocs\ABP_Francisco_Gonzalez\app\Clases\cursos.php');
require_once('C:\xampp\htdocs\ABP_Francisco_Gonzalez\app\Clases\frutitas.php');

$ciclo1 = new frutitas("1", "Daw", "desarollo we");
$ciclo2 = new frutitas("Platano", "amarillo", "es como eso que comen los monos");
$fruta3 = new frutitas("coco", "marron", "tiene pelo pero esta rico");

$array_objetos= [];

array_push($array_objetos, $pera, $fruta2, $fruta3);


/*
$curso1 = new curso("1", "dam1a", "Diseño de aplicacion multi", "dam");
$curso2 = new curso("2", "dam1b", "Diseño de aplicacion multi", "dam");
$curso3 = new curso("3", "daw1a", "Diseño de aplicacion WEB", "daW");


$curso= [];
$ciclos= [];
array_push($curso, $curso1, $curso2, $curso3);
*/


?>
