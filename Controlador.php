
        <!--<div id="pricipal">
        <div id="menu">
            <ul>
                <li><a href="Imagenes/Colinas azules.jpg">Colinas azules</a></li>
                <li><a href="Imagenes/Invierno.jpg">Invierno</a></li>
                <li><a href="Imagenes/Nenúfares.jpg">Nenúfares</a></li>
                <li><a href="Imagenes/Puesta de sol.jpg">Puesta de sol</a></li>             
            </ul>
        </div>
        </div>
        <div id="login">
            <form action="kontraseina.php" method="post">
                <p>Usuario: <span><input name="erabiltzailea" required></span></p><br>
                <p>Password: <span><input type="password" name="pasahitza" required></span></p><br>
                <li><a href="Imagenes/Colinas azules.jpg">Registrarse</a></li>
                <!--<select name="aukera">
                    <option value="gehi">+</option>
                    <option value="ken">-</option>
                    <option value="bider">*</option>
                    <option value="zati">/</option>
                <input type="number" name="zen2" required>-->
                <!--<input type="submit" value="Login">
            </form>
        </div>-->       
        <?php
        //error_reporting(0);
        include_once('Vista.php');
        
        $v=new vista;
        
        ?>
        <div id="login">
        <?php
        
        $v->inicioFormulario("inicio","PeliculaTitulo.php");
        $v->input("Usuario","text");
        $v->input("Password","password");
        $v->li("Registro.php", "Registrarse");
        $v->boton("Login", "", "");
        $v->finFormulario();        
        ?>
        </div>

