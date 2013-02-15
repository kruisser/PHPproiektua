<?php
error_reporting(0);
include_once('lib/orm/entitymanagerfactory.php');
include_once('Vista.php');
session_start();
$em=EntityManagerFactory::createEntityManager();

//Encontrar al cliente que se ha registrado
$k=$em->getRepository('entities\clientes')->findAll();
for($l=0;$l<count($k);$l++){
              $y=$k[$l];
              if($_SESSION['usuario']==$y->getDNI()){
                 $cliente=$y;                                                                       
              } 
}



//Creo una vista
$v=new vista();
$v->li("Controlador.php", "Inicio");
//Vuelvo a cargar la tabla peliculas
$i=$em->getRepository('entities\peliculas')->findAll();



$v->cabecera("Catalogo");
$v->Saludo($cliente->getNombre(), $cliente->getApellido());
$v->inicioDiv();
$v->inicioFormulario("mostrar","GET");
$v->inicioSelect("Titulo","select");
//Relleno la select con los titulos de las peliculas.
for($j=0;$j<count($i);$j++){
    $x=$i[$j];
    $v->option($x->getTitulo());
}
$v->finSelect();
$v->boton("Info");
$v->finFormulario();
//Lleno unas variables con los valores de la pelicula seleccionada.
for($j=0;$j<count($i);$j++){
            $x=$i[$j];
            if($_GET['select']==$x->getTitulo()){
                $pelicula=$x;
                $titu=$x->getTitulo();
                $dire=$x->getDirector();
                $aino=$x->getYear();
                $gene=$x->getgenero();
                $sto=$x->getStock();
            }
}
//Lleno los campos de formulario con las variables
echo "<br/>----------------------------------------";
$v->inicioFormulario("venta","POST");
$v->input("Titulo", "text",$titu);
$v->input("Director", "text",$dire);
$v->input("Año", "number",$aino);
$v->input("Género", "text",$gene);
$v->input("Stock", "number",$sto);
$v->boton("Comprar","myFunction()");
$v->finFormulario();
$v->finDiv();

if($_POST['Titulo']!=""){
     $pelicula->restarStock(); 
     $em->getRepository('entities\ventas')->findAll();     
     $v1=new entities\ventas($cliente,$pelicula);
     try{
       $em->persist($v1);
       $em->flush();       
       }
     catch (Exception $e){
                         //echo ("<br>".$e->getMessage()."<br>");
                         }
     $pelicula->anadirVenta($v1);
     $cliente->anadirVenta($v1);
     $crearArchivo = fopen("Factura.txt","w");
     fwrite($crearArchivo, "*******************".PHP_EOL."FilmStore".PHP_EOL."*******************".PHP_EOL."DNI cliente: ".$cliente->getDNI().PHP_EOL."Nombre: ".$cliente->getNombre().PHP_EOL."Apellido: ".$cliente->getApellido().PHP_EOL."Direccion: ".$cliente->getDireccion().PHP_EOL."Telefono: ".$cliente->getTelefono().PHP_EOL."Pelicula: ".$pelicula->getTitulo().PHP_EOL."*******************");
     fclose($crearArchivo);
     header ("Location: Controlador.php");
}
?>

