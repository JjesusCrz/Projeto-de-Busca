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
                <h3>Programação Web</h3>
                <h4>STD Front-end LTDA</h4>
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
                        case 'Administrador de Banco de Dados':
                        case 'adm bancos de dados':
                            echo "<h2>Administrador de Banco de Dados</h2><br>
                                  <p>O Administrador de banco de dados (DBA - DataBase Administrator) é responsável por manter e gerenciar
                                  bancos de dados, ou sistema de banco de dados.</p>
                                  <p>Este profissional gerencia, atualiza, monitora o centro das informações de um sistema. Formação
                                  recomendada: Curso Superior em Ciência da Computação, Informática ou Engenharia da Computação ou
                                  qualquer outra área de base matemática. Atividades: Criação e testes de backup para garantir a
                                  recuperabilidade dos dados no caso de falha de hardware ou outros problemas severos. Verificar e
                                  zelar pela integridade do banco de dados.</p>
                                  <p>Ter um controle de acesso aos dados como quem pode acessar e o que pode acessar e talvez quando possa
                                  acessar. Garantir o acesso ao banco de dados no maior tempo possível. Garantir o máximo de
                                  desempenho para o banco de dados. Auxiliar a equipe de desenvolvimento e a equipe de testes a
                                  maximizar o uso e desempenho do banco de dados.</p>
                                  <p><b>Salário: Entre R$ 3.000 a R$ 9.000 reais.</b></p>
                                  <br><br>";
                            break;
                    
                        case 'Analista de Sistemas':
                            echo "O analista de sistemas ou atualmente mais conhecido como sistematizador de informações, é aquele que tem como finalidade realizar estudos de processos computacionais para encontrar o melhor e mais racional caminho para que a informação virtual possa ser processada.
                    
                                    Este profissional estuda os diversos sistemas existentes entre hardwares e softwares e o usuário final, incluindo seus comportamentos e aplicações.
                                    
                                    Formação recomendada: Curso Superior em Ciência da Computação, Informática ou Engenharia da Computação ou qualquer outra área de base matemática.
                                    
                                    Salário: Entre R$ 4.800 a R$ 9.100 reais.";
                            break;
                    
                        case 'Analista de Suporte':
                            echo "O analista de suporte é um profissional de TI especialista em tecnologias, constantemente atualizado com novidades mercadológicas de Hardware e Software.
                    
                                Cuida da manutenção da estrutura física de computadores, da estrutura de Rede de área local de computadores e de sistemas operacionais.
                                
                                Atividades: Instalar e manter os diversos Sistemas Operacionais; Instalar e manter a comunicação digital (correio eletrônico, WEB, FTP, VPN, etc.): Instalar e manter sistemas de gestão (ERP); Instalar e manter sistemas de banco de dados (SGBD); Suporte aos usuários da empresa
                                
                                Salário: Entre R$ 2.000 a R$ 7.000 reais.";
                            break;
                    
                        case 'Programador Web':
                            echo "Um profissional de programação web é responsável pelo desenvolvimento de sites, portais, fóruns e aplicações voltadas para o ambiente da internet.
                    
                                    Formação recomendada: 2o grau técnico ou faculdade de Informática/Processamento de Dados/Engenharia da Computação.
                                    
                                    Atividades: Programação do código de sites, portais, sistemas para a internet; Cuidar da segurança de uma aplicação na internet; Aplicar formas de melhorar a performance do site; Criar sistemas de backend de softwares; Portar aplicações desktop para a web.
                                    
                                    Salário: Entre R$ 2.500 a R$ 5.000.";
                            break;
                    
                        case 'Programador Desktop':
                            echo "Um programador pode ser alguém que desenvolve ou faz manutenção de software.
                    
                                    Formação recomendada: Para ser programador de computador é necessário diploma de curso técnico, que pode ser cursado paralelamente ou após a conclusão do ensino médio.
                                    
                                    Por ser um mercado competitivo, entretanto, cursos extras são importantes para diferenciar o currículo na hora da seleção.
                                    
                                    Atividades: listar ou ler as especificações de programas, detalhadas por um analista de sistemas, e que mostram passo a passo as tarefas que o computador precisa executar; analisar o problema e a melhor forma para solucioná-lo; preparar diagramas para mostrar a seqüência de procedimentos a ser adotada pela máquina; codificar essas instruções para uma linguagem de computador; depois de prontas e implantadas as instruções, o programador deve testar todo o sistema, através de simulação, para verificar falhas e possíveis adequações.
                                    
                                    Salário: Entre R$ 1.800 a R$ 9.000 reais.";
                            break;
                    
                            default:
                            echo "Nenhuma informação disponível para a pesquisa: $pesquisa <br>";
                            echo "Digite o nome da profissão entre as que termos no nosso banco de dados:<br>
                                <br><br>
                                1- Administrador de Banco de Dados<br>
                                  2- Analista de Sistemas<br>
                                  3- Analista de Suporte<br>
                                  4- Programador Web<br>
                                  5- Programador Desktop<br>";
                            break;
                    }
                    
                ?><br><br>
                <a href="index.php"><button id="voltar">Voltar</button></a>
            </section>
    </div>

    <footer style="background-color: #00539f;
         color: white;
         text-align: center;
         padding: 20px;
        margin-top: 20px;
        display: inline-block;
     width: 100%;">
        <h3>STD Front-end LTDA</h3>
        <h4>Programação Web com HTML, CSS e PHP</h4>
        <p>Contatos</p>
        <p>E-mail: xxx@gmail.com</p>
        <p>WhatsApp: +55 (11) 0758-3508</p>
    </footer>
</body>

</html>