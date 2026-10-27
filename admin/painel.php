
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel | Loja Virtual</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="layout">
    <aside class="menu-lateral">
      <h2 class="logo">Loja Virtual</h2>
      <nav>
        <a href="painel.html" class="ativo">Painel</a>
        <a href="produtos.html">Produtos</a>
        <a href="clientes.html">Clientes</a>
        <a href="pedidos.html">Pedidos</a>
        <a href="index.html" class="sair">Sair</a>
      </nav>
    </aside>

    <main class="conteudo">
      <header class="cabecalho-pagina">
        <h1>Painel</h1>
        <p>Resumo da loja.</p>
      </header>

      <section class="resumo">
        <div class="resumo-item">
          <span>Produtos</span>
          <strong>24</strong>
        </div>
        <div class="resumo-item">
          <span>Clientes</span>
          <strong>12</strong>
        </div>
        <div class="resumo-item">
          <span>Pedidos hoje</span>
          <strong>5</strong>
        </div>
        <div class="resumo-item">
          <span>Faturamento</span>
          <strong>R$ 1.250,00</strong>
        </div>
      </section>

      <section class="cartao">
        <h2>Últimos pedidos</h2>
        <div class="tabela-rolagem">
          <table class="tabela">
            <thead>
              <tr>
                <th>Nº</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1003</td>
                <td>Maria Souza</td>
                <td>R$ 350,00</td>
                <td><span class="selo selo-pendente">Pendente</span></td>
              </tr>
              <tr>
                <td>#1002</td>
                <td>João Pereira</td>
                <td>R$ 120,00</td>
                <td><span class="selo selo-pago">Pago</span></td>
              </tr>
              <tr>
                <td>#1001</td>
                <td>Ana Lima</td>
                <td>R$ 780,00</td>
                <td><span class="selo selo-cancelado">Cancelado</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

</body>
</html>