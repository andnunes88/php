<?php

$banco = "intranet";
$usuario = "root";
$senha = "";
$servidor = "localhost";

// Create connection
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


?>