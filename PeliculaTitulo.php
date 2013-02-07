<?php
include_once('lib/orm/EntityManagerFactory.php');
include_once('Vista.php');
$em=  EntityManagerFactory::createEntityManager();
$v=new vista();
$i=0;
$j=0;
$v->li("PeliculaTitulo.php", "Titulo");
$v->li("PeliculaGenro.php", "Genero");
$v->inicioFormulario("titulo", "#");
$v->inicioSelect("Titulo");
$i=$em->getRepository('entities\Peliculas')->findAll();
for($j=0;$j<count($i);$j++){
    $x=$i[$j];
    $v->option($x->getTitulo());
}
$v->finSelect();
$v->input("Director", "text", "director");
$v->input("Año", "number", "year");
$v->input("Género", "text", "genero");
$v->input("Stock", "number", "stock");
$v->finFormulario();
//$v->boton("alquilar", "Alquilar", $onclick, $action);
?>

