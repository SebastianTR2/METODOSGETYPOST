<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Envio de datos en PHP</h1>
 
<!-- Formulario GET -->
<h2>Enviar por GET</h2>
<form action="index.php" method="GET">
    <input type="text" name="nombre" placeholder="Nombre"> <br>
    <input type="text" name="telefono" placeholder="Teléfono"> <br>
    <input type="submit" name="submit_get" value="Enviar GET">
</form>
 
<!-- Formulario POST -->
<h2>Enviar por POST</h2>
<form action="" method="POST">
    <input type="text" name="nombre" placeholder="Nombre"> <br>
    <input type="text" name="telefono" placeholder="Teléfono"> <br>
    <input type="submit" name="submit_post" value="Enviar POST">
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET['submit_get'])) {
    // Procesamos GET
    $nombre  = htmlspecialchars($_GET["nombre"]);
    $telefono = htmlspecialchars($_GET["telefono"]);
    echo "<h3>Datos recibidos por GET</h3>";
    echo "Nombre: $nombre<br>";
    echo "Teléfono: $telefono<br>";
}
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Procesamos POST
    $nombre  = htmlspecialchars($_POST["nombre"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    echo "<h3>Datos recibidos por POST</h3>";
    echo "Nombre: $nombre<br>";
    echo "Teléfono: $telefono<br>";
}
?>
</body>
</html>