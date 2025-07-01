<?php
session_start();

// Conexão com o banco
$host = "localhost:3307";
$user = "root";
$pass = "";
$dbname = "quiz_animal";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Validar ID do usuário
$id = $_POST['id'] ?? ($_SESSION['id_usuario'] ?? null);
if (!$id) {
    die("ID do usuário não encontrado.");
}

// Coletar as respostas
$contador = ["leao" => 0, "golfinho" => 0, "tartaruga" => 0, "coruja" => 0];
for ($i = 1; $i <= 10; $i++) {
    $resposta = $_POST["pergunta$i"] ?? null;
    if ($resposta && isset($contador[$resposta])) {
        $contador[$resposta]++;
    } else {
        die("Pergunta $i não foi respondida corretamente.");
    }
}

// Calcular resultado com base no animal com mais pontos
arsort($contador);
$resultado = array_key_first($contador);

// Atualizar resultado no banco
$stmt = $conn->prepare("UPDATE usuarios SET resultado = ? WHERE id = ?");
$stmt->bind_param("si", $resultado, $id);
$stmt->execute();
$stmt->close();
$conn->close();

// Exibir mensagem final ou redirecionar
header("Location: resultado.php?animal=$resultado");
exit();
?>
