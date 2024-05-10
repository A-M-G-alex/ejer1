<?php 
 session_start();
 $_SESSION['Pregunta3']=$_POST['preg3'];
?>
<!DOCTYPE html> 
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 <link href="estilo.css" rel="stylesheet">
 </head>
 <body>
 <header>
 <?php include 'encabezado.php'; ?>
 </header>
 <section>
 <form method="POST" action="pregunta4.php">
 <table border="1" width="700" cellspacing="10" cellpadding="0">
 <tr>
 <th colspan="2">¿Qué estilo de arte de anime te atrae más?</th>
 </tr>
 <tr>
 <td></td>
 <td> 
 <input type="radio" name="preg4" 
 value="Estilo clásico y tradicional" />
 Estilo clásico y tradicional<br/> 
 <input type="radio" name="preg4" 
 value="Estilo moderno y vibrante" />
 Estilo moderno y vibrante<br/> 
 <input type="radio" name="preg4" 
 value="Estilo minimalista y abstracto" />
 Estilo minimalista y abstracto<br/> 
 <input type="radio" name="preg4" value="Estilo realista y detallado" />Estilo realista y detallado 
 </td>
 </tr>
 <tr>
 <td></td>
 <td> 
 <input type="submit" value="< Anterior" 
 onclick = "this.form.action = 'pregunta3.php'" />
 <input type="submit" value="Siguiente >" 
 onclick = "this.form.action = 'pregunta5.php'" />
 </td>
 </tr>
 </table>
 </form>
 </section> 
 <footer>
 <?php include 'pie.php';?>
 </footer> 
 </body>
</html>