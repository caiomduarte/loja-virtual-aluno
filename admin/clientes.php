<?php
// Importa o arquivo responsável pela conexão com o banco SQLite.
require_once __DIR__ . '/../config/conexao.php';

// Importa o arquivo que contém as funções relacionadas aos usuários.
require_once __DIR__ . '/../funcoes/banco-clientes.php';


//Carregando lista de clientes do banco de dados
$clientes = listarClientes($pdo);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientes | Loja Virtual</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="layout">
    <aside class="menu-lateral">
      <h2 class="logo">Loja Virtual</h2>
      <nav>
        <a href="painel.html">Painel</a>
        <a href="produtos.html">Produtos</a>
        <a href="clientes.html" class="ativo">Clientes</a>
        <a href="pedidos.html">Pedidos</a>
        <a href="index.html" class="sair">Sair</a>
      </nav>
    </aside>

    <main class="conteudo">
      <header class="cabecalho-pagina">
        <h1>Clientes</h1>
        <p>Cadastre e consulte os clientes da loja.</p>
      </header>

      <section class="cartao">
        <h2>Novo cliente</h2>
        <form action="clientes.html" method="post">
          <div class="grade-form">
            <div class="campo campo-largo">
              <label for="nome">Nome completo</label>
              <input type="text" id="nome" name="nome" placeholder="Ex.: Maria Souza" required>
            </div>

            <div class="campo">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" placeholder="maria@exemplo.com" required>
            </div>

            <div class="campo">
              <label for="telefone">Telefone</label>
              <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999">
            </div>

            <div class="campo">
              <label for="cpf">CPF</label>
              <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
            </div>

            <div class="campo">
              <label for="nascimento">Data de nascimento</label>
              <input type="date" id="nascimento" name="nascimento">
            </div>

            <div class="campo">
              <label for="cidade">Cidade</label>
              <input type="text" id="cidade" name="cidade" placeholder="Ex.: Santana de Parnaíba">
            </div>

            <div class="campo">
              <label for="estado">Estado</label>
              <select id="estado" name="estado">
                <option value="">Selecione...</option>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="MG">Minas Gerais</option>
              </select>
            </div>

            <div class="campo campo-largo">
              <label for="endereco">Endereço</label>
              <input type="text" id="endereco" name="endereco" placeholder="Rua, número e bairro">
            </div>
          </div>

          <div class="acoes-form">
            <button type="submit" class="botao">Salvar cliente</button>
            <button type="reset" class="botao botao-secundario">Limpar</button>
          </div>
        </form>
      </section>

      <section class="cartao">
        <h2>Clientes cadastrados</h2>
        <div class="tabela-rolagem">
          <table class="tabela">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
               <?php foreach ($clientes as $cliente): ?>

                    <tr>
                        <td>
                            <?= htmlspecialchars($cliente['id']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($cliente['nome']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($cliente['email']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($cliente['telefone']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($cliente['cidade']) ?>
                        </td>

                        <td class="acoes">
                            <a
                                href="editar-cliente.php?id=<?= (int) $cliente['id'] ?>"
                                class="botao botao-secundario botao-pequeno"
                            >
                                Editar
                            </a>

                            <a
                                href="excluir-cliente.php?id=<?= (int) $cliente['id'] ?>"
                                class="botao botao-perigo botao-pequeno"
                                onclick="return confirm('Deseja excluir este cliente?')"
                            >
                                Excluir
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>
              <!-- <tr>
                <td>1</td>
                <td>Maria Souza</td>
                <td>maria@exemplo.com</td>
                <td>(11) 98888-1111</td>
                <td>Santana de Parnaíba</td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Excluir</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>João Pereira</td>
                <td>joao@exemplo.com</td>
                <td>(11) 97777-2222</td>
                <td>Barueri</td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Excluir</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ana Lima</td>
                <td>ana@exemplo.com</td>
                <td>(11) 96666-3333</td>
                <td>Osasco</td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Excluir</a>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

</body>
</html>