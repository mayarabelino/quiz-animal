<?php
// Conexão com banco
$conn = new mysqli("localhost:3307", "root", "", "quiz_animal");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Animais disponíveis
$animais = ['golfinho', 'tartaruga', 'coruja', 'leao'];
$sexos = ['Feminino', 'Masculino'];

// Inicializa matriz de contagem
$contagem = [];
$totais = ['Feminino' => 0, 'Masculino' => 0];

// Conta total por sexo
foreach ($sexos as $sexo) {
    $sqlTotal = "SELECT COUNT(*) as total FROM usuarios WHERE sexo = '$sexo'";
    $res = $conn->query($sqlTotal);
    $totais[$sexo] = $res->fetch_assoc()['total'];
}

// Conta por resultado e sexo
foreach ($animais as $animal) {
    foreach ($sexos as $sexo) {
        $sql = "SELECT COUNT(*) as total FROM usuarios WHERE sexo = '$sexo' AND resultado = '$animal'";
        $res = $conn->query($sql);
        $contagem[$animal][$sexo] = $res->fetch_assoc()['total'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estatísticas do Quiz</title>
    <link rel="stylesheet" href="style/estatistica.css">
</head>
<body>
    <div class="estrutura">
        <h1>Estatísticas de Resultados</h1>
        <table>
            <tr>
                <th colspan="2">Feminino</th>
                <th colspan="2">Masculino</th>
            </tr>
            <tr>
                <th>Animal</th>
                <th>%</th>
                <th>Animal</th>
                <th>%</th>
            </tr>
            <?php foreach ($animais as $animal): ?>
            <tr>
                <td><?= ucfirst($animal) ?></td>
                <td>
                    <?= $totais['Feminino'] > 0 
                        ? round(($contagem[$animal]['Feminino'] / $totais['Feminino']) * 100, 1) . '%' 
                        : '0%' ?>
                </td>
                <td><?= ucfirst($animal) ?></td>
                <td>
                    <?= $totais['Masculino'] > 0 
                        ? round(($contagem[$animal]['Masculino'] / $totais['Masculino']) * 100, 1) . '%' 
                        : '0%' ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table><br><br>
        <a href="index.php">Realizar novo Quiz</a>
    </div>
</body>
</html>
