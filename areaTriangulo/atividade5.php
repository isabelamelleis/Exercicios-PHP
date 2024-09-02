<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h2>
        Cálculo de área de triângulo &#128314 :
    </h2>
    <form method="POST" action="">
        <label for="base_triangulo">Digite um número para ser a <strong>base</strong> do triângulo (em cm):</label>
        <br>
        <input type="number" id="base_triangulo" name="base_triangulo" required>
        <br>
        <label for="altura_triangulo">Digite um número para ser a <strong>altura</strong> do triângulo (em cm):</label>
        <br>
        <input type="number" id="altura_triangulo" name="altura_triangulo" required>
        <br>
        <button type="submit" name="calcular_area_triangulo">Calcular</button>
    </form>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['calcular_area_triangulo'])) {
            $baseTriangulo = $_POST['base_triangulo'];
            $alturaTriangulo = $_POST['altura_triangulo'];
            $areaTriangulo = ($baseTriangulo * $alturaTriangulo) / 2;
            echo '<p>A área do triângulo é de ', $areaTriangulo, ' cm².</p>';
            if ($areaTriangulo > 100) {
                
            }
        }
    }
    
    ?>

</body>
</html>

