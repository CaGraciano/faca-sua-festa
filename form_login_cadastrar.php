<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastre-se</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container {
      text-align: center;
    }

    .btn-primary {
      width: 20%;
      background: linear-gradient(180deg, #5900AD 0%, #9900CC 100%);
    }

    .nome-label,
    .cpf-label,
    .cnpj-label,
    .email-label,
    .telefone-label,
    .cep-label,
    .rua-label,
    .numero-label,
    .complemento-label,
    .bairro-label,
    .uf-label {
      display: block;
      float: left;
    }

    .tipo-cadastro-radio {
      display: none;
    }

    .form-check-label {
      margin-right: 10px;
    }

    .form-check-input {
      margin-right: 5px;
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>

  <?php include 'cabecalho.php'; ?><br>

  <div class="container">
    <h1>Cadastro</h1><br>
    <form id="cadastroForm">
      <div class="mb-3 radio-group">
        <input type="radio" id="pessoaFisica" name="tipoCadastro" value="pessoaFisica" class="form-check-input" checked>
        <label for="pessoaFisica" class="form-check-label">Pessoa Física</label>&nbsp&nbsp&nbsp
        <input type="radio" id="pessoaJuridica" name="tipoCadastro" value="pessoaJuridica" class="form-check-input">
        <label for="pessoaJuridica" class="form-check-label">Pessoa Jurídica</label>
      </div>

      <div class="row-mb-3">
        <div class="col-md-4">
          <label for="nome" class="form-label nome-label">Nome</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="col-md-4">
          <label for="cpf" class="form-label cpf-label">CPF</label>
          <input type="text" class="form-control" id="cpf" placeholder="123.456.789-09">
        </div>
        <div class="col-md-4" id="campoCnpj" style="display: none;">
          <label for="cnpj" class="form-label cnpj-label">CNPJ</label>
          <input type="text" class="form-control" id="cnpj" placeholder="12.345.678/0001-00">
        </div>
      </div>

      <div class="row-mb-3">
        <div class="col-md-4">
          <label for="email" class="form-label email-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="exemplo@facasuafesta.com.br">
        </div>
        <div class="col-md-4">
          <label for="telefone" class="form-label telefone-label">Telefone</label>
          <input type="number" class="form-control" id="telefone" placeholder="(__) _____-____">
        </div>
      </div>

      <div class="row-mb-3">
        <div class="col-md-4">
          <label for="rua" class="form-label rua-label">Rua</label>
          <input type="text" class="form-control" id="rua" placeholder="Digite o nome da rua">
        </div>
        <div class="col-md-4">
          <label for="numero" class="form-label numero-label">Número</label>
          <input type="text" class="form-control" id="numero" placeholder="Digite o número">
        </div>
        <div class="col-md-4">
          <label for="complemento" class="form-label complemento-label">Complemento</label>
          <input type="text" class="form-control" id="complemento" placeholder="Digite o complemento">
        </div>
      </div>

      <div class="row-mb-3">
        <div class="col-md-4">
          <label for="bairro" class="form-label bairro-label">Bairro</label>
          <input type="text" class="form-control" id="bairro" placeholder="Digite o nome do bairro">
        </div>
        <div class="col-md-4">
          <label for="cep" class="form-label cep-label">CEP</label>
          <input type="number" class="form-control" id="cep" placeholder="Digite o CEP">
        </div>
        <div class="col-md-4">
          <label for="uf" class="form-label uf-label">UF</label>
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
      </div>

      <div class="row-mb-3 tipo-cadastro-radio">
        <label class="form-label">Você deseja ser:</label>&nbsp&nbsp
        <input type="radio" id="vendedor" name="tipoCadastroPessoaJuridica" value="vendedor" class="form-check-input">
        <label for="vendedor" class="form-check-label">Vendedor</label>&nbsp&nbsp
        <input type="radio" id="cliente" name="tipoCadastroPessoaJuridica" value="cliente" class="form-check-input">
        <label for="cliente" class="form-check-label">Cliente</label>
      </div>
      <div class="row-mb-3 checkbox-group">
        <input type="checkbox" class="form-check-input" id="aceitoTermos" required>
        <label class="form-check-label" for="aceitoTermos">Eu aceito os termos e condições</label>
      </div><br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div><br><br>

  <script>
    const pessoaFisicaRadio = document.getElementById("pessoaFisica");
    const pessoaJuridicaRadio = document.getElementById("pessoaJuridica");
    const campoCnpj = document.getElementById("campoCnpj");
    const tipoCadastroRadio = document.querySelector(".tipo-cadastro-radio");

    pessoaFisicaRadio.addEventListener("change", () => {
      if (pessoaFisicaRadio.checked) {
        campoCnpj.style.display = "none";
        tipoCadastroRadio.style.display = "none";
      }
    });

    pessoaJuridicaRadio.addEventListener("change", () => {
      if (pessoaJuridicaRadio.checked) {
        campoCnpj.style.display = "block";
        tipoCadastroRadio.style.display = "block";
      }
    });
  </script>

  <?php include 'rodape.php'; ?>

</body>

</html>