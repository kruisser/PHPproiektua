<?php
//error_reporting(0);
include_once('lib/orm/entitymanagerfactory.php');
include_once('Vista.php');

$em=EntityManagerFactory::createEntityManager();

$v=new vista();

$v->inicioFormulario("registro", "#");
$v->input("Nombre", "text");
$v->input("Apellido", "text");
$v->input("Direccion", "");
$v->input("Telefono", "number");
$v->input("Usuario", "");
$v->input("Password", "password");
$v->boton("Enviar");
$v->finFormulario();
if(isset($_POST)){
   $c1=new entities\clientes($_POST['Nombre'],$_POST['Apellido'],$_POST['Direccion'],$_POST['Telefono'],$_POST['Usuario'],$_POST['Password']);
   echo "Entra";
   try{
       $em->persist($c1);
       
        }
        catch (Exception $e){
    echo ("<br>$e->getMessage()<br>");
}

}  else {
    echo "No Entra";
    $em->flush();
}

?>
