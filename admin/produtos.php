<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos | Loja Virtual</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="layout">
    <aside class="menu-lateral">
      <h2 class="logo">Loja Virtual</h2>
      <nav>
        <a href="painel.html">Painel</a>
        <a href="produtos.html" class="ativo">Produtos</a>
        <a href="clientes.html">Clientes</a>
        <a href="pedidos.html">Pedidos</a>
        <a href="index.html" class="sair">Sair</a>
      </nav>
    </aside>

    <main class="conteudo">
      <header class="cabecalho-pagina">
        <h1>Produtos</h1>
        <p>Cadastre e consulte os produtos da loja.</p>
      </header>

      <section class="cartao">
        <h2>Novo produto</h2>
        <form action="produtos.html" method="post">
          <div class="grade-form">
            <div class="campo">
              <label for="nome">Nome do produto</label>
              <input type="text" id="nome" name="nome" placeholder="Ex.: Mouse sem fio" required>
            </div>

            <div class="campo">
              <label for="categoria">Categoria</label>
              <select id="categoria" name="categoria" required>
                <option value="">Selecione...</option>
                <option value="informatica">Informática</option>
                <option value="papelaria">Papelaria</option>
                <option value="acessorios">Acessórios</option>
              </select>
            </div>

            <div class="campo">
              <label for="preco">Preço (R$)</label>
              <input type="number" id="preco" name="preco" step="0.01" min="0" placeholder="0,00" required>
            </div>

            <div class="campo">
              <label for="estoque">Estoque</label>
              <input type="number" id="estoque" name="estoque" min="0" placeholder="0" required>
            </div>

            <div class="campo campo-largo">
              <label for="descricao">Descrição</label>
              <textarea id="descricao" name="descricao" placeholder="Fale um pouco sobre o produto"></textarea>
            </div>
          </div>

          <div class="acoes-form">
            <button type="submit" class="botao">Salvar produto</button>
            <button type="reset" class="botao botao-secundario">Limpar</button>
          </div>
        </form>
      </section>

      <section class="cartao">
        <h2>Produtos cadastrados</h2>
        <div class="tabela-rolagem">
          <table class="tabela">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mouse sem fio</td>
                <td>Informática</td>
                <td>R$ 59,90</td>
                <td>30</td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Excluir</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Caderno 96 folhas</td>
                <td>Papelaria</td>
                <td>R$ 18,50</td>
                <td>80</td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Excluir</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Capa para notebook</td>
                <td>Acessórios</td>
                <td>R$ 79,00</td>
                <td>12</td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Excluir</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

</body>
</html>