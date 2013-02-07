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
                                echo "<p>".$izena.": <span><input type='$type' name='$izena'id='$izena' required></span></p>";
                                //*echo "<input type='radio' name='regalo' value='$n'/>$nomRegalo";
			}
                public function boton($izena)
                        {
                                echo "<input type='submit' name='$izena' value='$izena'/>";                                
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