<?php
$servername = "192.168.1.30";  // ✅ Cambiado: "locahost" → "192.168.1.30" (tu servidor de BBDD)
$username = "root";
$password = "root";
$dbname = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}
//   f
?>
