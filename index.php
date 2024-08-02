<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Faça sua festa </title>
    <link href="css/style.css" rel="stylesheet"/>
    <style>
        #corpo{
            height: auto;
            margin: 0 20px;
            background: #fff;
            margin-top: 10px;
        }

        
    </style>
</head>
<body>
    <div id="Principal"> 
        <section id="topo"> 
        <?php include_once("cabecalho.php");?>
        </section>
        <section id="corpo">
        <?php include_once("detalhe.php");?>
        </section>
        <footer style="width: 100%;">
        <?php include_once("rodape.php");?>
        </footer>
    </div>
</body>
</html> 