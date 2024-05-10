<?php 
 session_start();
 $_SESSION['Pregunta2']=$_POST['preg2'];
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
 <form method="POST" action="pregunta3.php">
 <table border="1" width="700" cellspacing="10" cellpadding="0">
 <tr>
 <th colspan="2">¿Qué tipo de protagonista prefieres en un anime?</th>
 </tr>
 <tr>
 <td></td>
 <td> 
 <input type="radio" name="preg3" 
 value="El héroe valiente y decidido" />El héroe valiente y decidido<br/> 
 <input type="radio" name="preg3" 
 value="El anti-héroe sarcástico" />El anti-héroe sarcástico<br/> 
 <input type="radio" name="preg3" 
 value="La heroína optimista y determinada" />La heroína optimista y determinada<br/> 
 <input type="radio" name="preg3" 
 value="El protagonista misterioso y complejo" />El protagonista misterioso y complejo 
 </td>
 </tr>
 <tr>
 <td></td>
 <td> 
 <input type="submit" 
 value="< Anterior" 
 onclick = "this.form.action = 'pregunta2.php'" />
 <input type="submit" 
 value="Siguiente >" 
 onclick = "this.form.action = 'pregunta4.php'" />
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