<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";

    if($conn -> query($sql) === TRUE) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn -> error;
    }

}

$conn->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <h2>CADASTRO</h2>
    <form method="POST" action="create.php"> <!--action é pra onde vai e method é como ele vai-->
        <label for="name">Nome:</label>
        <input type="text" name="name"></input>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email"></input>
        <br>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>