<?php session_start(); ?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quiz Seu Animal Interior</title>
    <meta name="description" content="Um quiz interativo para testar seus conhecimentos">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h1>Quiz: Qual seu animal interior?</h1>
        <p>Descubra qual animal representa sua essência!</p>
    </header>
    <main>
        <section>
            <h2>Sobre esse quiz</h2>
            <blockquote>
                <p>Embarque em um quiz divertido e revelador com 10 perguntas sobre sua personalidade, preferências e instintos.</p>
                <p>No final, descubra qual animal combina com você — <strong>e o resultado pode te surpreender!</strong></p>
            </blockquote>
        </section>

        <form action="salvar_resultado.php" method="post" id="formQuiz">
            <?php
            $perguntas = [
                "Qual a sua cor favorita?" => ["golfinho" => "Azul", "leao" => "Vermelho", "tartaruga" => "Verde", "coruja" => "Roxo"],
                "O que você prefere fazer no tempo livre?" => ["coruja" => "Ler um Livro", "leao" => "Praticar esportes", "golfinho" => "Ir à praia", "tartaruga" => "Meditar ou caminhar na natureza"],
                "Como você se descreve?" => ["tartaruga" => "Calmo(a) e observador(a)", "golfinho" => "Engraçado(a) e sociável", "leao" => "Determinado(a) e corajoso(a)", "coruja" => "Analítico(a) e curioso(a)"],
                "Qual dessas palavras te define melhor?" => ["coruja" => "Sabedoria", "golfinho" => "Liberdade", "leao" => "Força", "tartaruga" => "Persistência"],
                "Qual seu ambiente favorito?" => ["tartaruga" => "Floresta ou montanhas", "golfinho" => "Mar ou lugares abertos", "leao" => "Cidades movimentadas", "coruja" => "Lugares calmos para pensar"],
                "O que você valoriza mais?" => ["coruja" => "Conhecimento", "tartaruga" => "Lealdade", "golfinho" => "Espírito de equipe", "leao" => "Liderança"],
                "Qual tipo de filme você prefere?" => ["coruja" => "Documentários ou biografias", "leao" => "Ação e aventura", "golfinho" => "Comédia ou romance", "tartaruga" => "Drama ou filmes reflexivos"],
                "Como é seu papel entre os amigos?" => ["coruja" => "Conselheiro(a)", "leao" => "Líder do grupo", "golfinho" => "Animador(a) e leve", "tartaruga" => "Apoio constante e confiável"],
                "Como você lida com problemas?" => ["tartaruga" => "Com calma e paciência", "leao" => "Enfrentando de frente com coragem", "golfinho" => "Tentando ver o lado positivo", "coruja" => "Analisando antes de agir"],
                "Com qual elemento da natureza você mais se identifica?" => ["leao" => "Fogo", "golfinho" => "Água", "tartaruga" => "Terra", "coruja" => "Ar"]
            ];

            $i = 1;
            foreach ($perguntas as $pergunta => $opcoes) {
                echo "<section><h3>Pergunta $i: $pergunta</h3>";
                foreach ($opcoes as $valor => $texto) {
                    $id = "p{$i}{$valor}";
                    echo "<label><input type='radio' name='pergunta$i' value='$valor' required> $texto</label><br>";
                }
                echo "</section>";
                $i++;
            }
            ?>
            
            <input type="hidden" name="id" value="<?php echo $_SESSION['id_usuario'] ?? ''; ?>">
            <br><button type="submit">Ver Resultado</button><br>
        </form>
    </main>
    <footer>
        <p>&copy; Quiz seu animal interior. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
