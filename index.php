<html>
 <head>
 <title>Mi primer proyecto PHP</title>
 </head>
 <body>
 <p>Hola mundo</p>
    <form method="post" action="index.php">
      <label for="message">Escribe un mensaje:</label><br>
      <input type="text" id="message" name="message"><br>
      <input type="submit" value="Enviar">
   </form>
 </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $message = $_POST["message"];
 echo "<p>Has escrito: $message</p>";
}
?>
