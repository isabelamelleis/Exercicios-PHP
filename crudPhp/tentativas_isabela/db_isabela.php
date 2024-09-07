<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "crud_system_isabela";

$conn = new mysqli($servername, $username, $password, $dbname); //faz a conexão com o banco

if($conn -> connect_error) { //a setinha é quase como um 'recebeu', ou seja, se a variável $conn recebeu um erro de conexão, vai informar o usuário esse erro
    die ("Conexão falhou: " . $conn -> connect_error); //o pontinho é um 'e'
}

?>