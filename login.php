<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #8a2be2; 
      color: #fff; 
    }
    .container {
      padding-top: 50px;
      text-align: center;
    }
    .btn {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cadastro</h1>
    <form id="cadastroForm">
      <div class="mb-3">
        <input type="radio" id="pessoaFisica" name="tipoCadastro" value="pessoaFisica" checked>
        <label for="pessoaFisica" class="form-label">Pessoa Física</label>
        <input type="radio" id="pessoaJuridica" name="tipoCadastro" value="pessoaJuridica">
        <label for="pessoaJuridica" class="form-label">Pessoa Jurídica</label>
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
      </div>
      <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="number" class="form-control" id="cpf" placeholder="123.456.789-09">
      </div>
      <div class="mb-3" id="campoCnpj" style="display: none;">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="number" class="form-control" id="cnpj" placeholder="12.345.678/0001-00">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="exemplo@facasuafesta.com.br">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="number" class="form-control" id="telefone" placeholder="(__) _____-____">
      </div>
      <div class="mb-3">
        <label for="rua" class="form-label">Rua</label>
        <input type="text" class="form-control" id="rua" placeholder="Digite o nome da rua">
      </div>
      <div class="mb-3">
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" placeholder="Digite o número">
      </div>
      <div class="mb-3">
        <label for="complemento" class="form-label">Complemento</label>
        <input type="text" class="form-control" id="complemento" placeholder="Digite o complemento">
      </div>
      <div class="mb-3">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro" placeholder="Digite o nome do bairro">
      </div>
      <div class="mb-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="number" class="form-control" id="cep" placeholder="Digite o CEP">
      </div>
      <div class="mb-3">
        <label for="uf" class="form-label">UF</label>
        <select class="form-select" id="uf">
          <option selected disabled>Selecione o estado</option>
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
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
  
  <script>
    const pessoaFisicaRadio = document.getElementById("pessoaFisica");
    const pessoaJuridicaRadio = document.getElementById("pessoaJuridica");
    const campoCnpj = document.getElementById("campoCnpj");

    pessoaFisicaRadio.addEventListener("change", () => {
      if (pessoaFisicaRadio.checked) {
        campoCnpj.style.display = "none";
      }
    });

    pessoaJuridicaRadio.addEventListener("change", () => {
      if (pessoaJuridicaRadio.checked) {
        campoCnpj.style.display = "block";
      }
    });
  </script>
</body>
</html>


