<!DOCTYPE html>
<head>
<html lang="en">
<link href="css/style.css" rel="stylesheet"/>

<style>
    .categorias{
    width: 219px;
    height: auto;
    float: left;
    margin-right: 8px; 
    border:solid 1px #ccc;
    font-weight: bold;
    margin-top: 10px;
}

    .categorias h2{
     width: 208px;
     height: 19px;
     padding-left: 10px;
     margin-bottom: 10px;
     color: #fff;
     font-size: 16px;
    }

    .categorias ul{
        width: 219px;
        list-style: none;
    }

    .categorias ul a {
        font-size: 16px;
        color: #fff;
        text-decoration: none;
        margin-left: 8px;
    }

    .categorias ul li a:hover {
       color: gray;
       font-size: 18px;
    }

    .categorias ul ul{
        width: 100%;
        background: #fff;
    }

    .categorias ul ul li  {
     border-bottom: solid 1px #ccc;
     padding: 5px 0 5px 15px;
    }

    .categorias ul ul li a {
    color: #666; 
    font-size: 12px;
    }

    .categorias ul ul li a:hover {
    color: #5900AD; 
    font-size: 14px;
    }

    #lado-direito{
        width: 75%;
        height: auto;
        margin-top: 10px;
        float: left;
    }

    .vitrine{
        margin: 10px 0;
        padding: 5px;
        width: 960px;
        height: auto;
        float: left;
    }

    .cx-img-produto{
        width: 310px;
        height: 310px;
        padding: 5px;
        background: #FFF;
        float: left;
    }

    .titulo-produto{
        width: 370px;
        height: 30px;
        float: left;
        padding: 5px;
    }

    .titulo-produto a {
     color: #333;     
     font-size: 22px;
    padding: 5px;
    text-decoration: none;
    padding: 5px;
   
    }

    .titulo-produto a:hover {
     color: #5900AD; 
     text-decoration: underline;
    }

    .preco-produto{
        width: 370px;
        height: 30px;
        float: left;
        margin-top: 10px;
        padding: 5px;
    }

    .descricao{
        width: 370px;
        height: 100px;
        float: left;
        margin-top: 10px;
        padding: 5px;
    }

    .descricao h2 {
     width: 364px;
    }

    .comprar-produto{
    width: 370px;
    height: 49px;
    float: left;
    margin-top: 10px;
    padding-top: 4px;
    margin-bottom: 20px;
    }

    .comprar-produto input {
        width: 175px;
        height: 40px;
        background: #5900AD;
        color: #fff;
        border-radius: 10px;
        border: 0px;
        text-align: center;
        cursor: pointer;
        margin-right: 100px;
    }

    .comprar-produto input:hover {
        width: 178px;
        height: 45px;
        background: #8A4CC5;
        color: #fff;
    }

    .descricao-completa{

    }
    
</style>
</head>
<body>
<div id="corpo-loja">
<section class="categorias">
 <h2 class="fundo-roxo"> Categorias </h2>
 <nav> 
    <ul class="fundo-roxo">
     <li> <a href="#" > Categoria 1 </a>
        <ul>
            <li> <a href="#" > produto 1 </a>
            <li> <a href="#" > produto 2 </a>
            <li> <a href="#" > produto 3 </a>
        </ul>
    </li>
    <li> <a href="#" > Categoria 2 </a>
        <ul>
            <li> <a href="#" > produto 1 </a>
            <li> <a href="#" > produto 2 </a>
            <li> <a href="#" > produto 3 </a>
        </ul>
    </li>
    <li> <a href="#" > Categoria 3 </a>
        <ul>
            <li> <a href="#" > produto 1 </a>
            <li> <a href="#" > produto 2 </a>
            <li> <a href="#" > produto 3 </a>
        </ul>
    </li>
    </ul>
 </nav>
</section>
<div id="lado-direito"> 
<section class="vitrine">
<div class="cx-img-produto"> <img src="./imagens/bolos-festa.jpg" alt="" style="width: 300px;"> </div>
<div class="titulo-produto"> <h1> <a href="#"> Título </a> </h1> </div>
<div class="preco-produto"> <h2> Valor: R$ 50,00 </h2> </div>
<div class="descricao"> <h2> Descrição Rápida </h2>   </div>
<div class="comprar-produto"> 
    <form action="">
            <input type="submit" value="Comprar">
            </form> </div>
</section>
<div class="descricao-completa">
<h2> Descrição </h2>
<p> Bolo de festa com recheios diversos </p>
</div>
</div>
</div>
</body>
</html>