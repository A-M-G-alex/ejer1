<?php 
 session_start();
?>
<!DOCTYPE html> 
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 <link href="estilo.css" rel="stylesheet">
 <style>
body {
    background: linear-gradient(to bottom, #3498db, #f39c12);
    margin: 0;
    padding: 0;
}
</style>
 </head>
 <body>
 <header>
 <?php include 'encabezado.php'; ?>
 </header>
 <section>
 <form method="POST" action="pregunta1.php">
 <table border="1" width="700" 
 cellspacing="10" cellpadding="0">
 <tr>
 <td>Nombres y apellidos</td>
 <td><input type="text" name="txtNombres" 
 size="50" /></td>
 </tr>
 <tr>
 <td>Numero DNI</td>
 <td><input type="text" name="txtDNI" 
 size="30" maxlength="8" /></td>
 </tr>
 <tr>
 <td>Empezar con la encuesta >>> </td>
 <td><input type="submit" value="Encuesta" /></td>
 </tr>
 </table>
 </form>
 </section> 
 <footer>
 <?php include 'pie.php';?>
 </footer> 
 </body>
</html>
