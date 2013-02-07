<?php
include_once('Vista.php');

$v=new vista();

$v->li("PeliculaTitulo.php", "Titulo");
$v->li("PeliculaGenro.php", "Genero");
$v->inicioFormulario("genro", $action);
$v->inicioSelect("Género",$name);
$v->option($value, $ikusi);
$v->finSelect();
$v->finFormulario();
$v->li("PeliculaTitulo.php", $titulo_de_pelicula);
?>
