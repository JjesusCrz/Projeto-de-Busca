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

    <section>
        <div class="form-container">
            <form action="analise.php" method="GET" target="self">
                <h1>Aluguel de Veículos</h1>
                <h2>Página de exemplo</h2>
                <div class="form-group">
                    <label for="pesquisa">Pesquisar</label>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite aqui a sua pesquisa">
                    <input type="submit" name="enviar" value="Enviar" id="enviar">
                </div>
            </form>
        </div>
    </section>
    <br><br>
    <section class="container" id="grid-container">
        <div class="grid">
            <div>
                <h2>Hatch</h2>
                <img src="img-carros/hatch.png" alt="Carro Hatch">
                <br>
                <a href="hatch.html">Alugue agora!</a>
            </div>
            <div>
                <h2>Sedan</h2>
                <img src="img-carros/sedan.png" alt="Carro Sedan">
                <br>
                <a href="sedan.html">Alugue agora!</a>
            </div>
            <div>
                <h2>SUV</h2>
                <img src="img-carros/suv.png" alt="Carro SUV">
                <br>
                <a href="suv.html">Alugue agora!</a>
            </div>
        </div>
    </section>
    <section>
        <fieldset>
            <legend>
                <h2>Faça seu orçamento de aluguel</h2>
            </legend>
            <form action="aluguel.php" method="GET" target="">
                <label for="data">Data do orçamento</label>
                <input type="date" id="data" name="data">
                <br><br>
                <label for="tempo">Tempo de Aluguel (Dias):</label><br>
                <input type="number" name="tempo" id="tempo" min="0">
                <br><br>
                <label for="">Escolha um Veículo (Modelo)</label><br>
                <select name="modelo" id="#">
                    <option>HATCH</option>
                    <option>SEDAN</option>
                    <option>SUV</option>
                </select>
                <br><br>
                <label for="nomeCliente">Insira Seu Nome Completo</label><br>
                <input type="text" id="nomecliente" name="nome" placeholder="Insira seu nome completo">
                <br><br>
                <label for="obs">Observações Adicionais</label><br>
                <input type="text" name="obs" id="obs" placeholder="Alguma Observação">
                <br><br>
                <input type="submit" name="enviar" id="enviar">
            </form>
        </fieldset>
    </section>
    <footer>
        <h1>STD Front-end LTDA</h1>
        <h1>Programação Web com HTML, CSS e PHP</h1>
        <p><b>Contato:</b></p>
        <p>E-mail: xxx@gmail.com</p>
    </footer>
</body>

</html>
