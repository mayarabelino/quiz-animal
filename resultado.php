<?php
$animal = $_GET['animal'] ?? null;

$mensagens = [
    "leao" => "🦁 Leão: Você é líder nato, corajoso(a), cheio de energia e iniciativa.<br> Não tem medo de desafios.",
    "golfinho" => "🐬 Golfinho: Você é sociável, divertido(a), e transmite boas vibrações.<br> Gosta de liberdade e conexão com os outros.",
    "tartaruga" => "🐢 Tartaruga: Você é calmo(a), resiliente e equilibrado(a).<br> Toma decisões com sabedoria e aprecia a simplicidade da vida.",
    "coruja" => "🦉 Coruja: Você é inteligente, introspectivo(a) e perceptivo(a).<br> Valoriza o conhecimento e a observação silenciosa."
];

$mensagem = $mensagens[$animal] ?? "Resultado não encontrado.";

$imagem = file_exists("img/$animal.jpg") ? "img/$animal.jpg" : null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Quiz</title>
    <link rel="stylesheet" href="style/resultado.css">
</head>
<body>
    <header>
        <h1>Resultado do Quiz</h1>
    </header>
    <p><?php echo $mensagem; ?></p>

    <?php if ($imagem): ?>
        <img src="<?php echo $imagem; ?>" alt="Imagem do animal">
    <?php endif; ?>

    <br><br><br>
    <a href="index.php">Realizar novo Quiz</a>
    <a href="estatistica.php">Visualizar Estatísticas do Quiz</a>
</body>
</html>
