<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG System - Ficha de Personagem</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php 
    $raca = $_GET["raca"];
    if ($raca=="Ogro"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
        echo "<link rel='stylesheet' href='fichadark.css'>";
    }else {
        echo "<link rel='stylesheet' href='fichastyle.css'>";
    }
    ?>
    <style>
        .item {
            background: <?php
                $classe = $_GET["classe"];
                $gen = $_GET["genero"];

                if($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$$raca=="Humano") {
                    echo "url(fundos/humana-barbara.jfif);";
                }elseif($classe=="Bárbaro"&&$gen=="Masculino"&&$$raca=="Elfo") {
                    echo "url(fundos/elfo-barbaro.jfif);";
                }
                ?>
        }
    </style>
    
</head>
<body class="Content">
    <main>
        <div class="item">
            <div class="item"id="moldura">
                <h1><?php
                 $nome = $_GET["nome"];
                 echo $nome; 
                 ?>
                 </h1>
                <h1 id="subt">Classe: <span id="sub"><?php echo $classe; ?></span> | Raça: <span id="sub"><?php echo $raca; ?></span></h1>
                
            </div>
        </div>
        <div class="baixo">
            <div class="subitem">
                <h1>Descrição</h1>
                <hr>
                <p id ="sobre"><?php 
                echo $_GET["info"];
                ?></p>
                <hr>
            </div>
            <div class="subitem">
                <h1>Atributos</h1>
                <p id="trib">
                    <?php
                    
                    if($classe=="Bárbaro"){
                        $pfor = "(+5)";
                        $pint = "(-4)";
                        $_GET["for"] =  $_GET["for"].$pfor;
                        $_GET["int"] = $_GET["int"].$pint;
                        $bonus = "<img src='icones/forca.png' class='icone'> <span class='valor'>+5</span> de Força </br> <img src='icones/inteligencia.png' class='icone'> <span class='valor'>-4</span> de Inteligência";
                    }elseif($classe=="Bardo"){
                        $pdex = "(+3)";
                        $psor = "(+3)";
                        $_GET["dex"] =  $_GET["dex"].$pdex;
                        $_GET["sor"] = $_GET["sor"].$psor;
                        $bonus = "<img src='icones/destreza.png' class='icone'> <span class='valor'>+3</span> de Destreza </br> <img src='icones/sorte.png' class='icone'> <span class='valor'>+3</span> de Sorte";
                    }elseif($classe=="Bruxo"){
                        $pint = "(+5)";
                        $pdev = "(-4)";
                        $_GET["int"] =  $_GET["int"].$pint;
                        $_GET["dev"] = $_GET["dev"].$pdev;
                        $bonus = "<img src='icones/inteligencia.png' class='icone'> <span class='valor'>+5</span> de Inteligência </br> <img src='icones/devocao.png' class='icone'> <span class='valor'>-4</span> de Devoção";
                    }elseif($classe=="Bruxo"){
                        $pint = "(+5)";
                        $pdev = "(-4)";
                        $_GET["int"] =  $_GET["int"].$pint;
                        $_GET["dev"] = $_GET["dev"].$pdev;
                        $bonus = "<img src='icones/inteligencia.png' class='icone'> <span class='valor'>+5</span> de Inteligência </br> <img src='icones/devocao.png' class='icone'> <span class='valor'>-4</span> de Devoção";
                    }elseif($classe=="Caçador"){
                        $pdex = "(+3)";
                        $pagi = "(+3)";
                        $_GET["dex"] =  $_GET["dex"].$pdex;
                        $_GET["agi"] = $_GET["agi"].$pagi;
                        $bonus = "<img src='icones/destreza.png' class='icone'> <span class='valor'>+3</span> de Destreza </br> <img src='icones/agilidade.png' class='icone'> <span class='valor'>+3</span> de Agilidade";
                    }elseif($classe=="Clérigo"){
                        $pint = "(+3)";
                        $pdev = "(+4)";
                        $_GET["int"] =  $_GET["int"].$pint;
                        $_GET["dev"] = $_GET["dev"].$pdev;
                        $bonus = "<img src='icones/inteligencia.png' class='icone'> <span class='valor'>+3</span> de Inteligência </br> <img src='icones/devocao.png' class='icone'> <span class='valor'>+4</span> de Devoção";
                    }elseif($classe=="Druida"){
                        $pint = "(+3)";
                        $psor = "(+3)";
                        $_GET["int"] =  $_GET["int"].$pint;
                        $_GET["sor"] = $_GET["sor"].$psor;
                        $bonus = "<img src='icones/inteligencia.png' class='icone'> <span class='valor'>+3</span> de Inteligência </br> <img src='icones/sorte.png' class='icone'> <span class='valor'>+3</span> de Sorte";
                    }elseif($classe=="Feiticeiro"){
                        $pint = "(+6)";
                        $pdev = "(-2)";
                        $_GET["int"] =  $_GET["int"].$pint;
                        $_GET["dev"] = $_GET["dev"].$pdev;
                        $bonus = "<img src='icones/inteligencia.png' class='icone'> <span class='valor'>+6</span> de Inteligência </br> <img src='icones/devocao.png' class='icone'> <span class='valor'>-2</span> de Devoção";
                    }elseif($classe=="Guerreiro"){
                        $pfor = "(+3)";
                        $pagi = "(+3)";
                        $_GET["for"] =  $_GET["for"].$pfor;
                        $_GET["agi"] = $_GET["agi"].$pagi;
                        $bonus = "<img src='icones/forca.png' class='icone'> <span class='valor'>+3</span> de Força </br> <img src='icones/agilidade.png' class='icone'> <span class='valor'>+3</span> de Agilidade";
                    }elseif($classe=="Ladino"){
                        $pagi = "(+3)";
                        $psor = "(+3)";
                        $_GET["agi"] =  $_GET["agi"].$pagi;
                        $_GET["sor"] = $_GET["sor"].$psor;
                        $bonus = "<img src='icones/agilidade.png' class='icone'> <span class='valor'>+3</span> de Agilidade </br> <img src='icones/sorte.png' class='icone'> <span class='valor'>+3</span> de Sorte";
                    }elseif($classe=="Mago"){
                        $pint = "(+5)";
                        $pfor = "(-4)";
                        $_GET["int"] =  $_GET["int"].$pint;
                        $_GET["for"] = $_GET["for"].$pfor;
                        $bonus = "<img src='icones/inteligencia.png' class='icone'> <span class='valor'>+5</span> de Inteligência </br> <img src='icones/forca.png' class='icone'> <span class='valor'>-4</span> de Força";
                    }elseif($classe=="Monge"){
                        $pagi = "(+3)";
                        $pdev = "(+3)";
                        $_GET["agi"] =  $_GET["agi"].$pagi;
                        $_GET["dev"] = $_GET["dev"].$pdev;
                        $bonus = "<img src='icones/agilidade.png' class='icone'> <span class='valor'>+3</span> de Agilidade </br> <img src='icones/devocao.png' class='icone'> <span class='valor'>+3</span> de Devoção";
                    }elseif($classe=="Paladino"){
                        $pfor = "(+3)";
                        $pdev = "(+3)";
                        $_GET["for"] =  $_GET["for"].$pfor;
                        $_GET["dev"] = $_GET["dev"].$pdev;
                        $bonus = "<img src='icones/forca.png' class='icone'> <span class='valor'>+3</span> de Força </br> <img src='icones/devocao.png' class='icone'> <span class='valor'>+3</span> de Devoção";
                    }
                    
                    ?>
                    <img src="icones/forca.png" alt="ícone de força" class="icone"><span class="valor"> <?php echo $_GET["for"]; ?> |</span>
                    <img src="icones/destreza.png" alt="ícone de destreza" class="icone"><span class="valor"> <?php echo $_GET["dex"]; ?> |</span>
                    <img src="icones/agilidade.png" alt="ícone de agilidade" class="icone"><span class="valor"> <?php echo $_GET["agi"]; ?> |</span>
                    <img src="icones/inteligencia.png" alt="ícone de inteligência" class="icone"><span class="valor"> <?php echo $_GET["int"]; ?> |</span>
                    <img src="icones/devocao.png" alt="ícone de devoção" class="icone"><span class="valor"> <?php echo $_GET["dev"]; ?> |</span>
                    <img src="icones/sorte.png" alt="ícone de sorte" class="icone"><span class="valor"> <?php echo $_GET["sor"]; ?> |</span>
                </p>
                <hr>
                <h1>Bônus de classe</h1>
                <p id="trib"><?php echo $bonus;?></p>
                <hr>
            </div>
            <div class="subitem" id="inst">
                    <p id="trib">Para gerar seu arquivo em PDF, clique em "Imprimir/Gerar PDF", depois você deve habilitar a impressão dos gráficos da página, tirar as margens e cabeçalhos, depois em "Salvar PDF"</p>
            </div>
            
        </div>
        <div class="final">
            <p class="print">Ficha feita pelo site RPG System, criado por Bruno Simon Ferreira, dev front-end aprendiz</p>
            <a href="javascript:history.back()" class="botao">Fazer outro personagem</a>
            <button class="botao" onclick="window.print()">Imprimir/Gerar PDF</button>
        </div>

    </main>  
</body>
</html>