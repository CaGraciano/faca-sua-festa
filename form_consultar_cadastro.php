<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meus Dados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      text-align: center;
    }
    .btn {
      margin-top: 10px;
      border-radius: 15px; 
      font-weight: bold;
      font-size: 16px;
    }
    .btn-primary {
      width: 20%;
      background: linear-gradient(180deg, #5900AD 0%, #9900CC 100%);
    }
    .btn-secondary {
      width: 20%;
      background-color: #ccc;
      color: #000;
      border: none;
    }
    .form-label {
      display: block;
      float: left;
    }
  </style>
</head>
<body>

  <?php include 'cabecalho.php'; ?>

  <div class="container"><br>
    <h1>Meus Dados</h1>
    <form id="dadosForm">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" value="João da Silva">
        </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="cpf" class="form-label">CPF</label>
          <input type="number" class="form-control" id="cpf" value="12345678909">
        </div>
        <div class="col-md-6">
          <label for="cnpj" class="form-label">CNPJ</label>
          <input type="number" class="form-control" id="cnpj" value="12345678000100">
        </div>
      </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="joao@facasuafesta.com.br">
          </div>
        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="number" class="form-control" id="telefone" value="11987654321">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="rua" class="form-label">Rua</label>
          <input type="text" class="form-control" id="rua" value="Av. Brasil">
        </div>
        <div class="col-md-4">
          <label for="numero" class="form-label">Número</label>
          <input type="text" class="form-control" id="numero" value="123">
        </div>
        <div class="col-md-4">
          <label for="complemento" class="form-label">Complemento</label>
          <input type="text" class="form-control" id="complemento" value="Apto 45">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" class="form-control" id="bairro" value="Centro">
        </div>
        <div class="col-md-4">
          <label for="cep" class="form-label">CEP</label>
          <input type="number" class="form-control" id="cep" value="12345678">
        </div>
        <div class="col-md-4">
          <label for="uf" class="form-label">UF</label>
          <select class="form-select" id="uf">
            <option selected>SP</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
          </select>
        </div>
      </div>
      <button type="button" class="btn btn-secondary" onclick="window.history.back()">Voltar</button>
      <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
  </div><br><br>

  <script>
    // Função para carregar os dados do usuário (exemplo)
    function carregarDadosUsuario() {
      // Aqui você poderia carregar os dados reais do usuário via AJAX ou outra forma de integração com o backend
      // Por enquanto, estamos usando valores estáticos como exemplo
    }

    // Função para salvar as alterações (exemplo)
    document.getElementById("dadosForm").addEventListener("submit", function(event) {
      event.preventDefault();
      alert("Dados alterados com sucesso!");
      // Aqui você enviaria os dados atualizados para o backend
    });

    // Carregar os dados do usuário quando a página for carregada
    window.onload = carregarDadosUsuario;
  </script>

<?php include 'rodape.php'; ?>

</body>
</html>
