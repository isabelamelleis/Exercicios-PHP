<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nameUpdate = $_POST['name_update'];
    $emailUpdate = $_POST['email_update'];
    $sql = "SELECT * FROM user WHERE name='$nameUpdate' AND email='$emailUpdate'";
    
    if($conn -> query($sql) === TRUE) {
        $sql = "UPDATE user SET name =  AND email";
        echo "Dados atualizados com sucesso.";
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
    <title>UPDATE</title>
</head>
<body>
    <h2>ATUALIZAR CADASTRO</h2>
    <p>Escreva seu nome de usuário e email cadastrados e que deseja atualizar:</p>
    <form method="POST" action="update.php"> <!--action é pra onde vai e method é como ele vai-->
        <label for="name_update">Nome:</label>
        <input type="text" name="name_update"></input>
        <br>
        <label for="email_update">Email:</label>
        <input type="email" name="email_update"></input>
        <br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>