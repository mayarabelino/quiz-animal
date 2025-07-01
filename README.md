# Quiz Animal Interior 🐾

Este é um quiz interativo desenvolvido para um projeto da faculdade, feito em PHP com MySQL e XAMPP, que identifica qual animal representa a sua personalidade.

## 📦 Funcionalidades

- Tela de cadastro (nome, idade, sexo)
- 10 perguntas de multipla escolha
- Resultado calculado e salvo no banco
- Estatísticas dos jogadores

## 🚀 Como usar

1. Clone o repositório para `htdocs` do XAMPP.
2. Importe o banco de dados:
   - Acesse `phpMyAdmin`
   - Crie um banco chamado `quiz_animal`
   - Vá na aba **Importar** e envie o arquivo `db/banco_usuarios.sql`
3. Acesse `http://localhost/quiz-animal/index.php`

## 🗃️ Banco de Dados

Estrutura da tabela disponível em `db/banco_usuarios.sql`.

## 📁 Estrutura

- `index.php` — Tela de cadastro
- `salvar_cadastro.php` — Salva o cadastro no banco
- `quiz.php` — Exibe o quiz completo
- `salvar_resultado.php` — Processa o resultado
- `resultado.php` — Mostra o animal com imagem e descrição
- `estatistica.php` — Mostra as estatpisticas de todos os usuários
