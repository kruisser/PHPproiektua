<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="proiektucss.css"/>
        <script language="JavaScript" type="text/JavaScript">
            function comprobar_passwords() {
            var texto_1 = document.forms[0].pass.value;
            var texto_2 = document.forms[0].pass1.value;
            var tam_txt_1 = texto_1.length;
            var tam_txt_2 = texto_2.length;
            if (tam_txt_1 != tam_txt_2) {
                    alert('Error al repetir la contraseña');
            } else {
                    for (n = 0; n < tam_txt_1; n++) {
                            if (texto_1.charAt(n) != texto_2.charAt(n)) {
                                    alert('Error al repetir la contraseña');
                            }else include('PeliculaTitulo.php');
                    }
            }
            }            
        </script>
    </head>
    
    <body>
        <?php
        class vista
		{
                public function inicioFormulario($izena,$action)
			{
				echo "<form name='$izena' action='$action' method='POST'>";
			}
                public function finFormulario()
			{
				echo "</form>";	
			}
		public function input($izena,$type)
			{
                                echo "<p>".$izena.": <span><input type='$type' name='$izena' required></span></p>";
                                //*echo "<input type='radio' name='regalo' value='$n'/>$nomRegalo";
			}
                public function boton($izena,$onclick,$action)
                        {
                                echo "<input type='submit' name='$izena' value='$izena' onclick='$onclick' action='$action'/>";                                
                        }                
                public function li($direccion,$izena)
                        {
                                echo "<li><a href='$direccion'>".$izena."</a></li>";
                        }                
                public function inicioSelect($izena)
                        {
                        echo "<p>".$izena.": <span><select name='$izena'></span></p>";                    
                        }
                public function finSelect()
                        {
                        echo "</select>";    
                        }
                public function option($izena)
                        {
                        echo "<option name='$izena' value='$izena' >".$izena."</option>";
                        }                
                }
        ?>
    </body>
</html>