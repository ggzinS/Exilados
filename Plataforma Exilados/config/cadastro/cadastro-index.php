<?php
if(isset($_POST['submit'])){
  print_r($_POST['nome']);
  print_r('<br>');
  print_r($_POST['email']);
  print_r('<br>');
  print_r($_POST['senha']);
  print_r('<br>');
  print_r($_POST['genero']);
  print_r('<br>');
  print_r($_POST['data_nascimento']);
  print_r('<br>');

  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $genero = $_POST['genero'];
  $data_nasc = $_POST['data_nascimento'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, genero, data_nasc)
  VALUES('$nome', '$email', '$senha', '$genero', '$data_nasc')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="cadastro-styles.css">
</head>
<body>
  <div class="telaCadastro">
    <form action="cadastro-index.php" method="POST">
      <fieldset>
        <legend><b>Insira as informações necessárias</b></legend>
        <br>
        <div class="inputCadastro">
          <input type="text" name="nome" id="nome" class="inputUser"
           maxlength="30" required>
          <label for="nome" class="labelInput">Nome de Usuário</label>
        </div>
        <br><br>
        
        <div class="inputCadastro">
          <input type="email" name="email" id="email" class="inputUser"
           min="10" maxlength="60" required>
          <label for="email" class="labelInput">Email</label>
        </div>
        <br><br>
        
        <div class="inputCadastro">
          <input type="password" name="senha" id="senha" class="inputUser"
           min="8" maxlength="30" required>
          <label for="senha" class="labelInput">Senha</label>
        </div>
        <br>
        
        <p>Gênero:</p>
        <input type="radio" name="genero" id="feminino" value="feminino" required>
        <label for="feminino">Feminino</label>
        <input type="radio" name="genero" id="masculino" value="masculino" required>
        <label for="masculino">Masculino</label>
        <input type="radio" name="genero" id="outro" value="outro" required>
        <label for="outro">Outro</label>
        <br><br><br>
        
        <div class="inputCadastro">
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required> 
        </div>
        <br><br>
        
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form>
  </div>
</body>
</html>
