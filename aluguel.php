<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Web</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div>
            <h1>Programação Web</h1>
            <h1>STD Front-end LTDA</h1>
        </div>
    </header>
    <hr>
    <section>
        <div class="form-container">
            <form action="analise.php" method="GET" target="self">
                <h1>Aluguel de Veiculos</h1>
                <h2>Pagina de exemplo</h2>
                <div class="form-group">
                    <label for="pesquisa">Pesquisar</label>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite aqui a sua pesquisa">
                    <input type="submit" name="enviar" value="enviar" id="enviar">
                </div>
            </form>
        </div>
    </section>
    <br><br>
    <section class="container" id="grid-container">
        <div class="grid">
            <div>
                <h2>Hatch</h2>
                <img src="img-carros/hatch.png" alt="Carro Hatch"><br>
                <a href="hatch.html">Alugue agora!</a>
            </div>
            <div>
                <h2>Sedan</h2>
                <img src="img-carros/sedan.png" alt="Carro Sedan"><br>
                <a href="sedan.html">Alugue agora!</a>
            </div>
            <div>
                <h2>SUV</h2>
                <img src="img-carros/suv.png" alt="Carro SUV"><br>
                <a href="suv.html">Alugue agora!</a>
            </div>
            <!--<div>Conteudo4</div>
            <div>Conteudo5</div>
            <div>Conteudo6</div>-->
        </div>
    </section>

    <?PHP
        $data = $_GET["data"];
        $tempo = $_GET["tempo"];
        $modelo = $_GET["modelo"];
        $nome = $_GET["nome"];
        $observação = $_GET["obs"];


        
        $modelo1 = $tempo*80;
        $modelo2 = $tempo*100;
        $modelo3 = $tempo*150;


        echo"Olá Sr(a) $nome, seja muito bem vindo a nossa pagina de processamento!<br><br><br>";
        echo"A sua escolha foi um veiculo do modelo $modelo <br><br><br>";
        echo"Data da Consulta $data OBS: Orçamento valido por 15 dias após esta data<br><br><br><br>";

        if($modelo == "HATCH"){
            echo "O valor total do orçamento é R$ $modelo1<br><br>";
        } elseif($modelo == "SEDAN"){
            echo "O valor total do orçamento é R$ $modelo2<br><br>";
        }else{
            echo "O valor total do orçamento é R$ $modelo3 <br><br>" ;
        }

        echo "<b>Observação adicional do cliente:</b> $observação <br><br><br><br>";
        echo"Agradecemos por sua consulta.<br>";

    ?>


    <br><br>
    <a href="index.php"><< Voltar</a><br><br><br><br>
    

    <footer>
        <h1>STD Front-end LTDA</h1>
        <h1>Programação Web com HTML, CSS e PHP</h1>
        <p><b>Contato:</b></p>
        <p>E-mail: xxx@gmail.com</p>
    </footer>
</body>

</html>