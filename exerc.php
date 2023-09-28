<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Função para obter a idade do usuário
function obterIdade() {
    echo "Digite a sua idade: ";
    $idade = intval(readline());
    return $idade;
}

// Obtém a idade do usuário
$idade = obterIdade();

// Verificar a idade e exibir a mensagem apropriada
if ($idade < 16) {
    echo "Você não pode votar.\n";
} elseif ($idade >= 16 && $idade <= 18) {
    echo "O voto é facultativo.\n";
} elseif ($idade >= 19 && $idade <= 65) {
    echo "O voto é obrigatório.\n";
} else {
    echo "O voto é facultativo.\n";
}
?>


</body>
</html>
