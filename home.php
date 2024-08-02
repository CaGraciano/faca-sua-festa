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
        width: 100%;
        height: auto;
        border: solid 1px #ccc;
    }

    .vitrine h2 {
     width: 99%;
     height: 20px;
     border: solid 1px #ccc;
     padding: 2px;
     background: #fbfbfb;
    }

    
    .vitrine ul {
     width: 99%;
     height: auto;
     border: solid 1px #ccc;
     padding: 2px;
     background: #fbfbfb;
     margin-top: 10px;
     margin-bottom: 10px;
    }

    .vitrine li {
       width: 150px;
       margin: 2px;
       padding-bottom: 10px;
       text-align: center;
       display: inline-block;
       vertical-align: top;
    }

    .vitrine li a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
    }

    .vitrine span {
        color: #5900AD;
        font-size: 16px;
        margin-top: 10px;
        font-weight: bold;
    }

    .vitrine input {
        width: 92px;
        height: 30px;
        background: #5900AD;
        color: #fff;
        border-radius: 10px;
        border: 0px;
        margin-top: 10px;
    }

    .vitrine input:hover {
        width: 96px;
        height: 34px;
        background: #8A4CC5;
        color: #fff;
    }

    .titulo{
        width: 100%;
        height: 19px;
        padding-left: 10px;
        color: #fff;
    }

</style>
</head>
<body>
<div id="corpo-loja">
<section class="banner"  style="background-color: gray; width: 100%; height: 260px;" >
<p> Banner </p>
</section>
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
    <h3 class="titulo fundo-roxo"> Lista de produtos </h3>
<section class="vitrine">
<h2> Categoria do produto </h2>
<ul>
    <li>
        <a href="#">
            <figure>
            <img src="./imagens/bolos-festa.jpg" alt="" style="width: 110px; height: 110px;"/>
            <figcaption> Bolo de festa </figcaption>
            </figure>
            <span>
               R$ 50,00
            </span>
            <form action="">
                <input type="submit" value="Comprar">
            </form>
        </a>
    </li>
    <li>
        <a href="#">
            <figure>
            <img src="./imagens/bolos-festa.jpg" alt="" style="width: 110px; height: 110px;"/>
            <figcaption> Bolo de festa </figcaption>
            </figure>
            <span>
               R$ 50,00
            </span>
            <form action="">
            <input type="submit" value="Comprar">
            </form>
        </a>
    </li>
   <li>
        <a href="#">
            <figure>
            <img src="./imagens/bolos-festa.jpg" alt="" style="width: 110px; height: 110px;"/>
            <figcaption> Bolo de festa </figcaption>
            </figure>
            <span>
               R$ 50,00
            </span>
            <form action="">
            <input type="submit" value="Comprar">
            </form>
        </a>
    </li>
    <li>
        <a href="#">
            <figure>
            <img src="./imagens/bolos-festa.jpg" alt="" style="width: 110px; height: 110px;"/>
            <figcaption> Bolo de festa </figcaption>
            </figure>
            <span>
               R$ 50,00
            </span>
            <form action="">
            <input type="submit" value="Comprar">
            </form>
        </a>
    </li>
   <li>
        <a href="#">
            <figure>
            <img src="./imagens/bolos-festa.jpg" alt="" style="width: 110px; height: 110px;"/>
            <figcaption> Bolo de festa </figcaption>
            </figure>
            <span>
               R$ 50,00
            </span>
            <form action="">
            <input type="submit" value="Comprar">
            </form>
        </a>
    </li>
</ul>
</section>
</div>
</div>
</body>
</html>