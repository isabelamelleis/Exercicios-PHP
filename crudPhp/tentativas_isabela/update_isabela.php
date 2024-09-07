<?php

include 'db_isabela.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_usuario'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = "SELECT * FROM user WHERE name = '$name' AND email = '$email'";
        $result = $conn -> query($sql);

        if ($result->num_rows > 0) {
            echo "
                <form method='POST' action='update_isabela.php'>
                    <input type='hidden' name='nome_antigo' value='$name'>
                    <input type='hidden' name='email_antigo' value='$email'>
                    <label for='novo_nome'>Novo nome:</label>
                    <input type='text' name='novo_nome' required>
                    <br>
                    <label for='novo_email'>Novo email:</label>
                    <input type='email' name='novo_email' required>
                    <br>
                    <button type='submit' name='atualizar_usuario'>Atualizar</button>
                </form>
            ";
        } else {
            echo "Usuário não encontrado. Verifique os dados e tente novamente.";
        }
    }

    if (isset($_POST['atualizar_usuario'])) {
        $nomeAntigo = $_POST['nome_antigo'];
        $emailAntigo = $_POST['email_antigo'];
        $novoNome = $_POST['novo_nome'];
        $novoEmail = $_POST['novo_email'];
        $sql = "UPDATE user SET name='$novoNome', email='$novoEmail' WHERE name='$nomeAntigo' AND email='$emailAntigo'";

        if ($conn -> query($sql) === TRUE) {
            echo "Dados atualizados com sucesso.";
        } else {
            echo "Erro ao atualizar os dados: " . $conn -> error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR CADASTRO</title>
</head>
<body>
    <h2>ATUALIZAR CADASTRO</h2>
    <form method="POST" action="update_isabela.php">
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit" name="verificar_usuario">Verificar</button>
    </form>
</body>
</html>