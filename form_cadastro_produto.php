<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            text-align: center;
        }
        .btn-primary {
            width: 20%;
            background: linear-gradient(180deg, #5900AD 0%, #9900CC 100%);
        }
        .form-label {
            display: block;
            float: left; 
        }
    </style>
</head>
<body>

    <?php include 'cabecalho.php'; ?>

    <div class="container mt-5">
        <h1 class="mb-4">Cadastro de Produto</h1>
        <form action="banco.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="sku" class="form-label">Código do Produto (SKU)</label>
                    <input type="text" class="form-control" id="sku" name="sku" required>
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="category" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Preço de Venda</label>
                    <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="stock_quantity" class="form-label">Quantidade em Estoque</label>
                    <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" required>
                </div>
                <div class="col-md-6">
                    <label for="unit_of_measure" class="form-label">Unidade de Medida</label>
                    <input type="text" class="form-control" id="unit_of_measure" name="unit_of_measure" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dimensions" class="form-label">Tamanho/Dimensões</label>
                    <input type="text" class="form-control" id="dimensions" name="dimensions" required>
                </div>
                <div class="col-md-6">
                    <label for="weight" class="form-label">Peso</label>
                    <input type="text" class="form-control" id="weight" name="weight" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="detailed_description" class="form-label">Descrição Detalhada</label>
                <textarea class="form-control" id="detailed_description" name="detailed_description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Imagens do Produto</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple required>
            </div><br>
            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
        </form>
    </div><br><br>

    <?php include 'rodape.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
