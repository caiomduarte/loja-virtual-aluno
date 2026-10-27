<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos | Loja Virtual</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="layout">
    <aside class="menu-lateral">
      <h2 class="logo">Loja Virtual</h2>
      <nav>
        <a href="painel.html">Painel</a>
        <a href="produtos.html">Produtos</a>
        <a href="clientes.html">Clientes</a>
        <a href="pedidos.html" class="ativo">Pedidos</a>
        <a href="index.html" class="sair">Sair</a>
      </nav>
    </aside>

    <main class="conteudo">
      <header class="cabecalho-pagina">
        <h1>Pedidos</h1>
        <p>Registre novos pedidos e acompanhe o status de cada um.</p>
      </header>

      <section class="cartao">
        <h2>Novo pedido</h2>
        <form action="pedidos.html" method="post">
          <div class="grade-form">
            <div class="campo">
              <label for="cliente">Cliente</label>
              <select id="cliente" name="cliente" required>
                <option value="">Selecione...</option>
                <option value="1">Maria Souza</option>
                <option value="2">João Pereira</option>
                <option value="3">Ana Lima</option>
              </select>
            </div>

            <div class="campo">
              <label for="produto">Produto</label>
              <select id="produto" name="produto" required>
                <option value="">Selecione...</option>
                <option value="1">Mouse sem fio - R$ 59,90</option>
                <option value="2">Caderno 96 folhas - R$ 18,50</option>
                <option value="3">Capa para notebook - R$ 79,00</option>
              </select>
            </div>

            <div class="campo">
              <label for="quantidade">Quantidade</label>
              <input type="number" id="quantidade" name="quantidade" min="1" value="1" required>
            </div>

            <div class="campo">
              <label for="status">Status</label>
              <select id="status" name="status">
                <option value="pendente">Pendente</option>
                <option value="pago">Pago</option>
                <option value="cancelado">Cancelado</option>
              </select>
            </div>

            <div class="campo campo-largo">
              <label>Forma de pagamento</label>
              <div class="opcoes">
                <label><input type="radio" name="pagamento" value="pix" checked> Pix</label>
                <label><input type="radio" name="pagamento" value="cartao"> Cartão</label>
                <label><input type="radio" name="pagamento" value="boleto"> Boleto</label>
              </div>
            </div>

            <div class="campo campo-largo">
              <label for="observacao">Observação</label>
              <textarea id="observacao" name="observacao" placeholder="Ex.: entregar à tarde"></textarea>
            </div>
          </div>

          <div class="acoes-form">
            <button type="submit" class="botao">Registrar pedido</button>
            <button type="reset" class="botao botao-secundario">Limpar</button>
          </div>
        </form>
      </section>

      <section class="cartao">
        <h2>Pedidos registrados</h2>
        <div class="tabela-rolagem">
          <table class="tabela">
            <thead>
              <tr>
                <th>Nº</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Qtd.</th>
                <th>Total</th>
                <th>Pagamento</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1003</td>
                <td>Maria Souza</td>
                <td>Capa para notebook</td>
                <td>2</td>
                <td>R$ 158,00</td>
                <td>Pix</td>
                <td><span class="selo selo-pendente">Pendente</span></td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Cancelar</a>
                </td>
              </tr>
              <tr>
                <td>#1002</td>
                <td>João Pereira</td>
                <td>Mouse sem fio</td>
                <td>1</td>
                <td>R$ 59,90</td>
                <td>Cartão</td>
                <td><span class="selo selo-pago">Pago</span></td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Cancelar</a>
                </td>
              </tr>
              <tr>
                <td>#1001</td>
                <td>Ana Lima</td>
                <td>Caderno 96 folhas</td>
                <td>5</td>
                <td>R$ 92,50</td>
                <td>Boleto</td>
                <td><span class="selo selo-cancelado">Cancelado</span></td>
                <td class="acoes">
                  <a href="#" class="botao botao-secundario botao-pequeno">Editar</a>
                  <a href="#" class="botao botao-perigo botao-pequeno">Cancelar</a>
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