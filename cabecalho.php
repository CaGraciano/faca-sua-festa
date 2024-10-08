<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background: linear-gradient(180deg, #5900AD 0%, #9900CC 100%);
            padding: 10px 0;
            color: white;
        }

        .logo img {
            width: 100px;
        }

        .search-bar {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }

        .search-bar input {
            width: 100%;
            border-radius: 20px;
            padding: 10px 20px;
            padding-right: 40px;
        }

        .search-bar img {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            cursor: pointer;
        }

        .header .list-inline-item img {
            width: 24px;
        }

        .header .list-inline-item {
            margin: 0 10px;
        }

        .header .list-inline-item img:hover {
            filter: brightness(0.8);
        }

        .dropdown-menu {
            background-color: #9900CC;
            border: none;
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            background-color: #5900AD;
        }
    </style>
    <title>Cabeçalho</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="logo">
                        <img src="img/logos/FaçaSuaFesta-Logo-Branco-2.png" alt="LOGO">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search-bar">
                        <input type="text" class="form-control" placeholder="O que você procura?">
                        <img src="img/icones/pesquisar-2.png" alt="Pesquisar">
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><img src="img/icones/user-2.png" alt="Entrar">&nbsp Entrar</li>
                        <li class="list-inline-item">&nbsp&nbsp<img src="img/icones/shopping-3.png" alt="Carrinho de compras"></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row mt-3">
                <div class="col text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item dropdown">
                            <a href="#" class="dropdown-toggle" id="categoriasDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                                <a class="dropdown-item" href="#"><img src="img/icones/balões-1.png" alt="Balões">&nbsp Doces</a>
                                <a class="dropdown-item" href="#"><img src="img/icones/tema-1.png" alt="Temas">&nbsp Salgados</a>
                                <a class="dropdown-item" href="#"><img src="img/icones/tema-1.png" alt="Temas">&nbsp Bebidas</a>
                                <a class="dropdown-item" href="#"><img src="img/icones/óculos-1.png" alt="Acessórios">&nbsp Acessórios</a>
                                <a class="dropdown-item" href="#"><img src="img/icones/decoração-1.png" alt="Decoração">&nbsp Decoração</a>
                                <a class="dropdown-item" href="#"><img src="img/icones/copo-1.png" alt="Descartáveis">&nbsp Descartáveis</a>
                            </div>
                        </li>
                        <li class="list-inline-item"><img src="img/icones/estrela-2.png" alt="Acessórios">Favoritos</li>
                        <li class="list-inline-item"><img src="img/icones/porcentagem-2.png" alt="Balões">Promoções</li>
                        <li class="list-inline-item"><img src="img/icones/home.png" alt="Decoração">Locação</li>
                        <li class="list-inline-item"><img src="img/icones/ponto-de-interrogação-2.png" alt="Descartáveis">Quem Somos</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
