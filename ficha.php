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
                
                if($classe=="Bárbaro"&&$gen=="Masculino") {
                    echo "url(fundos/barbaro.jpg)";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino") {
                    echo "url(fundos/barbara.jpg)";
                }elseif($classe=="Bardo"&&$gen=="Masculino") {
                    echo "url(fundos/bardo.jpg)";
                }elseif($classe=="Bardo"&&$gen=="Feminino") {
                    echo "url(fundos/barda.jpg)";
                }elseif($classe=="Bruxo"&&$gen=="Masculino") {
                    echo "url(fundos/bruxo.jpg)";
                }elseif($classe=="Bruxo"&&$gen=="Feminino") {
                    echo "url(fundos/bruxa.jpg)";
                }elseif($classe=="Caçador"&&$gen=="Masculino") {
                    echo "url(fundos/cacador.jpg)";
                }elseif($classe=="Caçador"&&$gen=="Feminino") {
                    echo "url(fundos/cacadora.jpg)";
                }elseif($classe=="Clérigo"&&$gen=="Masculino") {
                    echo "url(fundos/clerigo.jpg)";
                }elseif($classe=="Clérigo"&&$gen=="Feminino") {
                    echo "url(fundos/cleriga.jpg)";
                }elseif($classe=="Druida"&&$gen=="Masculino") {
                    echo "url(fundos/druidam.jpg)";
                }elseif($classe=="Druida"&&$gen=="Feminino") {
                    echo "url(fundos/druidaf.jpg)";
                }elseif($classe=="Feiticeiro"&&$gen=="Masculino") {
                    echo "url(fundos/feiticeiro.jpg)";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino") {
                    echo "url(fundos/feiticeira.jpg)";
                }elseif($classe=="Guerreiro"&&$gen=="Masculino") {
                    echo "url(fundos/guerreiro.jpg)";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino") {
                    echo "url(fundos/guerreira.jpg)";
                }elseif($classe=="Ladino"&&$gen=="Masculino") {
                    echo "url(fundos/ladino.jpg)";
                }elseif($classe=="Ladino"&&$gen=="Feminino") {
                    echo "url(fundos/ladina.jpg)";
                }elseif($classe=="Mago"&&$gen=="Masculino") {
                    echo "url(fundos/mago.jpg)";
                }elseif($classe=="Mago"&&$gen=="Feminino") {
                    echo "url(fundos/maga.jpg)";
                }elseif($classe=="Monge"&&$gen=="Masculino") {
                    echo "url(fundos/monge.jpg)";
                }elseif($classe=="Monge"&&$gen=="Feminino") {
                    echo "url(fundos/monja.jpg)";
                }elseif($classe=="Paladino"&&$gen=="Masculino") {
                    echo "url(fundos/barbara.jpg)";
                }elseif($classe=="Paladino"&&$gen=="Feminino") {
                    echo "url(fundos/barbara.jpg)";
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
                <p id ="sobre">Descrição do personagem em até 300 caracteres...Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae ex omnis delectus enim blanditiis eligendi nesciunt odio aspernatur nemo? Iusto sunt molestiae natus officiis nesciunt quam doloribus vero impedit. Veritatis! Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <hr>
            </div>
            <div class="subitem">
                <h1>Atributos</h1>
                <p id="trib">
                    <img src="icones/forca.png" alt="ícone de força" class="icone"><span class="valor"> 5 |</span>
                    <img src="icones/destreza.png" alt="ícone de destreza" class="icone"><span class="valor"> 5 |</span>
                    <img src="icones/agilidade.png" alt="ícone de agilidade" class="icone"><span class="valor"> 5 |</span>
                    <img src="icones/inteligencia.png" alt="ícone de inteligência" class="icone"><span class="valor"> 5 |</span>
                    <img src="icones/devocao.png" alt="ícone de devoção" class="icone"><span class="valor"> 5 |</span>
                    <img src="icones/sorte.png" alt="ícone de sorte" class="icone"><span class="valor"> 5 |</span>
                </p>
                <hr>
                <h1>Bônus</h1>
                <p id="trib"><img src="icones/sorte.png" class="icone"> <span class="valor">+2</span> de sorte por ser Bardo</p>
                <hr>
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