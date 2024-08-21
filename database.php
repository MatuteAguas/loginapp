<?php
$servername = "mysql://root:TNVyryshrfjKWLgfKbzLBRmPaOcXiglo@mysql.railway.internal:3306/railway";
$username = "root";
$password = "TNVyryshrfjKWLgfKbzLBRmPaOcXiglo";
$dbname = "railway";
$port = "3306"; // Especifica el puerto proporcionado por Railway

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
