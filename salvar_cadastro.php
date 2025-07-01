<?php
session_start();

// Realiza conexão com o banco de dados
$host = "localhost:3307";
$user = "root";
$pass = "";
$dbname = "quiz_animal";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebe os dados do cadastro
$nome = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';
$sexo = $_POST['sexo'] ?? '';

// Validar os dados
if (empty($nome) || empty($idade) || empty($sexo)) {
    die("Todos os campos são obrigatórios.");
}

// Inserir no banco de dados
$stmt = $conn->prepare("INSERT INTO usuarios (nome, idade, sexo) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $nome, $idade, $sexo);
$stmt->execute();

// Armazenar ID na sessão
$_SESSION['id_usuario'] = $conn->insert_id;

// Finaliza a conexão
$stmt->close();
$conn->close();

// Redirecionar para o quiz
header("Location: quiz.php");
exit();
?>
