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
        <script type="text/javascript">
        function myFunction()
        {
        window.alert("Archivo Factura.txt creado")
        }
        </script>
    </head>
    
    <body>
        <?php
        class vista
		{
                public function cabecera($texto)
                        {
                            echo "<h1>".$texto."</h1>";
                        }
                public function Saludo($nombre,$apellido)
                        {
                            echo "<h2>Hola,".$nombre." ".$apellido."</h2>";
                        }
                public function inicioDiv($id)
			{
				echo "<div id='$id'>";
			}
                public function finDiv()
			{
				echo "</div>";	
			}
                public function inicioFormulario($izena,$method)
			{
				echo "<form name='$izena' method='$method'>";
			}
                public function finFormulario()
			{
				echo "</form>";	
			}
		public function input($izena,$type,$value)
			{
                                echo "<p>".$izena.": <span><input type='$type' name='$izena' value='$value'></span></p>";
                                
			}
                public function radio($ikusi,$izena,$value)
			{
                                echo $ikusi.": <input type='radio' name='$izena' 'value='$value'><br/>";
                                
			}        
                public function boton($izena,$onclick)
                        {
                                echo "<input type='submit' name='$izena' value='$izena' onclick='$onclick'/>";                                
                        }                
                public function li($direccion,$izena)
                        {
                                echo "<li><a href='$direccion'>".$izena."</a></li>";
                        }                
                public function inicioSelect($texto,$izena)
                        {
                        echo "<p>".$texto.": <span><select name='$izena'></span></p>";                    
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