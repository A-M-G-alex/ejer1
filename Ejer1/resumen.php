<?php 
 session_start();
 $_SESSION['Pregunta5']=$_POST['preg5'];
?>
<!DOCTYPE html> 
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 <link href="estilo.css" rel="stylesheet">
 <style>
    section {
        width: 700px;
        margin: 0 auto; /* Esto centra el contenido horizontalmente */
    }
    h3 {
        text-align: center; /* Esto centra el título horizontalmente */
    }
 </style>
 </head>
 <body>
 <header>
 <?php include 'encabezado.php'; ?>
 <h3>INFORME DE ENCUESTA</h3>
 </header>
 <?php
 $nombres = $_SESSION['nombres'];
 $dni = $_SESSION['dni'];
 $pregunta1 = $_SESSION['Pregunta1'];
 $pregunta2= $_SESSION['Pregunta2'];
 $pregunta3 = $_SESSION['Pregunta3'];
 $pregunta4 = $_SESSION['Pregunta4'];
 $pregunta5 = $_SESSION['Pregunta5'];
 ?>
 <section>
 <form method="POST" action="resumen.php">
 <table border="1" width="700" cellspacing="10" cellpadding="0">
 <tr>
 <td>Nombre del ciudadano</td>
 <td><?php echo $nombres; ?></td>
 </tr>
 <tr>
 <td>DNI</td>
 <td><?php echo $dni; ?></td>
 </tr>
 <tr>
 <td>¿Cuál es tu género de anime favorito?
 </td>
 <td><?php echo $pregunta1; ?></td>
 </tr>
 <tr>
 <td>¿Cuál es tu serie de anime favorita de todos los tiempos?</td>
 <td><?php echo $pregunta2; ?></td>
 </tr>
 <tr>
 <td>¿Cuál es tu serie de anime favorita de todos los tiempos?</td>
 <td><?php echo $pregunta3; ?></td>
 </tr>
 <tr>
 <td>¿Qué tipo de protagonista prefieres en un anime?</td>
 <td><?php echo $pregunta4; ?></td>
 </tr>
 <tr>
 <td>¿Qué estilo de arte de anime te atrae más?</td>
 <td><?php echo $pregunta5; ?></td>
 </tr>
 <tr>
 <td> 
 <input type="submit" value="< Anterior" 
 onclick = "this.form.action = 'pregunta5.php'" />
 <input type="submit" value="Volver a encuestar" 
 onclick = "this.form.action = 'index.php'" />
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