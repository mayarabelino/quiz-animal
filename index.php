<?php session_start(); ?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cadastro.css">
</head>
<body>
    <div class="conteudo">
        <header>
            <h1>Quiz Animal Interior</h1>
            <h2>Realize seu cadastro</h2>
        </header>
        <form action="salvar_cadastro.php" method="post">
            <fieldset>
                <legend>Preencha todos os dados abaixo:</legend>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required><br>
                
                <label for="idade">Idade:</label>
                <select name="idade" id="idade" required>
                    <option value="" disabled selected>Selecione sua faixa etária</option>
                    <option value="15">Até 15 anos</option>
                    <option value="25">De 16 a 25 anos</option>
                    <option value="35">De 26 a 35 anos</option>
                    <option value="45">De 46 a 60 anos</option>
                    <option value="60">Acima de 60 anos</option>
                </select><br>

                <label for="sexo">Sexo:</label>
                <label><input type="radio" name="sexo" value="Feminino" required> Feminino</label>
                <label><input type="radio" name="sexo" value="Masculino" required> Masculino</label><br><br>
                
                <button type="submit">Iniciar Quiz</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
