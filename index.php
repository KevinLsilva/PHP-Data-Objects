<?php

echo "MySQL";
echo "<br />";

// declaração das váriaveis de conexão
$host = "localhost";
$user = "root";
$password = "";
$database = "noite";

// criar um objeto de conexão (instancia)
$connect = new mysqli($host, $user, $password, $database);

// testar se a conexão foi bem sucedida
if ($connect->connect_error){
    die("Erro de conexão: " . $connect->connect_error);
}

echo "Conexão Orientada a Objetos bem sucedida!";

// encerrar 
$connect->close();
?>