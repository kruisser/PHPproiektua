<?php
error_reporting(0);
include_once('lib/orm/entitymanagerfactory.php');
include_once('Vista.php');
$em=EntityManagerFactory::createEntityManager();
$v=new vista();

$i=$em->getRepository('entities\peliculas')->findAll();
$v->inicioFormulario("titulo", "#");
$v->inicioSelect("Titulo");
for($j=0;$j<count($i);$j++){
    $x=$i[$j];
    $v->option($x->getTitulo());
}
$v->finSelect();
$v->input("Director", "text", "director");
$v->input("Año", "number", "year");
$v->input("Género", "text", "genero");
$v->input("Stock", "number", "stock");
$v->boton("Alquilar");
$v->finFormulario();
/*if(isset($_POST)){
   $a1=new entities\alquileres($ccli, $cpeli);
}*/
?>

