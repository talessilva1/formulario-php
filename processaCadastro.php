<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"> <!-- Padrão global para mostrar letras -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajustar a largura da página automaticamente -->
  <title>Formulário</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Cadastro Lojas Brincos e Companhia</h1>

  <?php
  // Pegar os valores do formulário com POST e exibir tudo
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  $profissao = $_POST['profissao'];
  $salario = $_POST['salario'];
  $experiencia = $_POST['experiencia'];

  echo "Nome: $nome <br>";
  echo "Idade: $idade <br>";
  echo "Profissão: $profissao <br>";
  echo "Salário: $salario <br>";
  echo "Experiência: $experiencia <br><br>";

  echo "Olá, $nome! Seja bem-vindo, a sua profissão é $profissao e você escreveu, como sua experiência, \"$experiencia\".<br><br>";
  ?>

  <a href="cadastro.html"><button>Clique aqui para retornar ao formulário</button></a>
</body>
</html>
