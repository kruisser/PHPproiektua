<form name="registro" method='POST'>
<?php
include_once('Vista.php');

$v=new vista();
//$v->inicioFormulario("registro", "");
/*$v->input("Nombre", "text","nombre" );
$v->input("Apellido", "text","apellido" );
$v->input("Dirección", "","direccion" );
$v->input("Telefono", "number","telefono" );
$v->input("Usuario", "","usuario" );*/
$v->input("Password", "password","pass" );
$v->input("Repetir password", "password","pass1" );
$v->boton("enviar", "Enviar", "comprobar_passwords(registro)","");
//$v->finFormulario();

?>
</form>