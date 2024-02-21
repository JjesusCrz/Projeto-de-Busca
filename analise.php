<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Web</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <div>
                <h1>Programação Web</h1>
                <h1>STD Front-end LTDA</h1>
            </div>
        </header>

        <section class="main" id="inicio-site">
            <img src="source/images/img-site.png" alt="Erro de imagem" class="img-topo">
            <br>
            <h2>Resultado da pesquisa</h2>
            <br>
            <section class="section">
                <?php
                    $pesquisa = $_GET["pesquisa"];
                    
                    switch ($pesquisa) {
                        case 'Hatch':
                            echo "<h2>O que é tipo de veículo hatch?</h2>
                            <p>Carros do tipo hatch​ são divididos em dois volumes principais: a caixa do motor e o bloco dos passageiros, que fica junto com o porta-malas.</p>
                            <p>Na prática, isso significa apenas que o automóvel é mais compacto.</p>
                            
                            <p>Uma das primeiras vantagens do hatch é o seu tamanho compacto, que pode facilitar muito na hora de conseguir uma vaga. Além disso, o carro hatch oferece melhor percepção das dimensões do próprio veículo.</p>
                            ";
                            break;
                    
                        case 'Sedan':
                            echo "<h2>Carro para toda família</h2>

                            <p>Com seu espaço interno e um generoso porta-malas, sedans são a opção ideal para famílias que usam o carro para suas tarefas diárias ou para viagens de longa duração. Um sedan comporta confortavelmente as crianças e até mesmo animais de estimação, se necessário.</p>
                            
                            <p>As principal vantagem em adquirir um carro sedan é o conforto, oferecido por um espaço interno maior, e a capacidade do porta-malas — ideal para quem possui filhos e precisa de mais espaço para as bagagens.</p>
                            ";
                            break;
                    
                        case 'SUV':
                            echo "
                <article>
<h1>Descubra o Poder e a Elegância dos Carros SUV!</h1>
<p>Se você está pronto para elevar sua experiência de condução a um novo patamar, os carros SUV são a escolha perfeita para você. Combinando estilo elegante, desempenho excepcional e versatilidade incomparável, os SUVs são mais do que apenas veículos - são um estilo de vida.</p>

<h2>Estilo e Conforto</h2>
<p>Imagine-se dominando as estradas com confiança, enquanto desfruta do luxo e do conforto de um interior espaçoso e ricamente equipado. Os SUVs oferecem espaço de sobra para toda a família e suas aventuras, com assentos confortáveis, amplo espaço de carga e tecnologia de ponta para tornar cada viagem memorável.</p>

<h2>Desempenho Superior</h2>
<p>Com sua altura elevada e design imponente, os SUVs não apenas impressionam na estrada, mas também oferecem uma visão privilegiada do mundo ao seu redor. Conquiste todos os terrenos com facilidade, desde ruas urbanas até estradas sinuosas e trilhas off-road, graças à sua capacidade de tração nas quatro rodas e características de segurança avançadas.</p>

<h2>Estilo Incomparável</h2>
<p>Além disso, os SUVs não comprometem o estilo pela funcionalidade. Com linhas aerodinâmicas e detalhes sofisticados, esses veículos são verdadeiras obras de arte sobre rodas, projetados para chamar a atenção onde quer que vão.</p>

<h2>Escolha o Seu SUV Hoje!</h2>
<p>Prepare-se para uma experiência de condução emocionante e inigualável. Escolha um SUV hoje e embarque em uma jornada de luxo, conforto e aventura sem limites!</p>
</article>";
                            break;
                    
                    
                            default:
                            echo "Nenhuma informação disponível para a pesquisa: $pesquisa <br>";
                            echo "Digite o nome do modelo entre os que termos na nossa loja:<br>
                                <br><br>
                                1- SUV<br>
                                  2- Sedan
                                  <br>
                                  3- Hatch<br>";
                            break;
                    }
                    
                ?><br><br>
                <a href="index.php"><button id="voltar">Voltar</button></a>
            </section>
    </div>

    <footer >
        <h1>STD Front-end LTDA</h1>
        <h1>Programação Web com HTML, CSS e PHP</h1>
        <p>Contatos</p>
        <p>E-mail: xxx@gmail.com</p>
        <p>WhatsApp: +55 (11) 0758-3508</p>
    </footer>
</body>

</html>