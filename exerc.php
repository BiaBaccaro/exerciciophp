<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Operadores Lógicos</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $idade = intval($_POST["idade"]);

        if ($idade < 16) {
            $mensagem = "Você não pode votar.";
        } elseif ($idade >= 16 && $idade <= 18) {
            $mensagem = "O voto é facultativo.";
        } elseif ($idade >= 19 && $idade <= 65) {
            $mensagem = "O voto é obrigatório.";
        } else {
            $mensagem = "O voto é facultativo.";
        }

        echo "$mensagem";
    }
    ?>

    <form method="post">
        <label for="idade">Digite a sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
