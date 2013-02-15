<?php
error_reporting(0);
include_once('lib/orm/entitymanagerfactory.php');
include_once('Vista.php');

$em=EntityManagerFactory::createEntityManager();

$v=new vista();

$v->li("Controlador.php", "Inicio");
$v->cabecera("Registro");
$v->inicioDiv();
$v->inicioFormulario("registro", "POST");
$v->input("Nombre", "text","");
$v->input("Apellido", "text","");
$v->input("Direccion", "text","");
$v->input("Telefono", "number","");
$v->input("DNI", "text","");
$v->input("Password", "password","");
$v->boton("Enviar","");
$v->finFormulario();
$v->finDiv();

if(isset($_POST)){
   $c1=new entities\clientes($_POST['Nombre'],$_POST['Apellido'],$_POST['Direccion'],$_POST['Telefono'],$_POST['DNI'],$_POST['Password']);
   try{
       $em->persist($c1);
       $em->flush();
       header ("Location: Controlador.php");
       }
   catch (Exception $e){
                        //echo ("<br>".$e->getMessage()."<br>");
                        }
}
?>
