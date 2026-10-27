<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrar | Loja Virtual</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body class="pagina-login">

  <main class="login-caixa">
    <h1>Loja Virtual</h1>
    <p class="subtitulo">Entre com seu e-mail e senha para acessar o sistema.</p>

     
    <form method="post">
      <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="voce@exemplo.com" required>
      </div>

      <div class="campo">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
      </div>

      <button type="submit" class="botao">Entrar</button>
    </form>

    <p class="login-rodape">Esqueceu a senha? Fale com o administrador.</p>
  </main>

</body>
</html>