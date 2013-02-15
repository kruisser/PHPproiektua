        <?php
        error_reporting(0);        
        include_once('lib/orm/entitymanagerfactory.php');
        include_once('Vista.php');
        session_start();
        
        if(isset($_SESSION['usuario']))
        unset($_SESSION['usuario']);

        $_SESSION['usuario'];
        
        $em=EntityManagerFactory::createEntityManager();
        
        //Creo peliculas si no están creadas
        $i=$em->getRepository('entities\peliculas')->findAll();
        if(count($i)==0){
                $p1=new entities\peliculas("El padrino", "Francis Ford Coppola", "1972", "Drama", "5");
                $p2=new entities\peliculas("Salvar al soldado Ryan", "Steven Sielberg", "1998", "Belica", "5");
                $p3=new entities\peliculas("Dersu Uzala","Akira Kurosawa", "1975", "Aventuras", "5");
                $p4=new entities\peliculas("El gran dictador","Charles Chaplin", "1936", "Comedia", "5");
                $p5=new entities\peliculas("Seven", "David Fincher", "1995", "Thriller", "5");
                try{
                    $em->persist($p1);
                    $em->persist($p2);
                    $em->persist($p3);
                    $em->persist($p4);
                    $em->persist($p5);
                }
                catch (Exception $e){
                                    echo ("<br>".$e->getMessage()."<br>");
                }
                $em->flush();
}
        //Creo una vista                
        $v=new vista;
        
        $i=$em->getRepository('entities\clientes')->findAll();        
        
        $v->cabecera("FilmStore");
        $v->inicioDiv();
        $v->inicioFormulario("inicio","POST");
        $v->input("DNI","text","");
        $v->input("Password","password","");
        $v->li("Registro.php", "Registrarse");
        $v->boton("Login","");
        $v->finFormulario();
        $v->finDiv();
        
        for($j=0;$j<count($i);$j++){
            $x=$i[$j];
            if($_POST['DNI']==$x->getDNI() && $_POST['Password']==$x->getPass()){
                $_SESSION['usuario']=$x->getDNI();
                header ("Location: PeliculaTitulo.php");                
            }
        }       
        ?>