<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG System - Ficha de Personagem</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php 
    $raca = $_GET["raca"];
    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
        echo "<link rel='stylesheet' href='fichadark.css'>";
    }else {
        echo "<link rel='stylesheet' href='fichastyle.css'>";
    }
    ?>
    <style>
        .item {
            background-image: <?php
                $classe = $_GET["classe"];
                $gen = $_GET["genero"];
                $raca = $_GET["raca"];
                //BÁRBAROS
                if($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-barbara.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-barbara.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-barbara.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-barbara.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-barbara.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-barbaro.jpg);";
                }elseif($classe=="Bárbaro"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-barbara.jpg);";                    
                }
                //BARDO
                elseif($classe=="Bardo"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-bardo.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-barda.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-bardo.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-barda.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-bardo.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-barda.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-bardo.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-barda.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-bardo.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-barda.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-bardo.jpg);";
                }elseif($classe=="Bardo"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-barda.jpg);";                    
                }
                //BRUXO
                elseif($classe=="Bruxo"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-bruxo.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-bruxa.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-bruxo.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-bruxa.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-bruxo.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-bruxa.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-bruxo.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-bruxa.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-bruxo.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-bruxa.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-bruxo.jpg);";
                }elseif($classe=="Bruxo"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-bruxa.jpg);";                    
                }
                //CAÇADOR
                elseif($classe=="Caçador"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-cacador.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-cacadora.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-cacador.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-cacadora.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-cacador.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-cacadora.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-cacador.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-cacadora.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-cacador.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-cacadora.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-cacador.jpg);";
                }elseif($classe=="Caçador"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-cacadora.jpg);";                    
                }
                //CLÉRIGO
                elseif($classe=="Clérigo"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-clerigo.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-cleriga.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-clerigo.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-cleriga.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-clerigo.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-cleriga.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-clerigo.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-cleriga.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-clerigo.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-cleriga.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-clerigo.jpg);";
                }elseif($classe=="Clérigo"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-cleriga.jpg);";                    
                }
                //DRUIDA
                elseif($classe=="Druida"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-druida.jpg);";
                }elseif($classe=="Druida"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-druida.jpg);";                    
                }
                //FEITICEIRO
                elseif($classe=="Feiticeiro"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-feiticeiro.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-feiticeira.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-feiticeiro.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-feiticeira.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-feiticeiro.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-feiticeira.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-feiticeiro.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-feiticeira.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-feiticeiro.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-feiticeira.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-feiticeiro.jpg);";
                }elseif($classe=="Feiticeiro"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-feiticeira.jpg);";                    
                }
                //GUERREIRO
                elseif($classe=="Guerreiro"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-guerreiro.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-guerreira.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-guerreiro.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-guerreira.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-guerreiro.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-guerreira.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-guerreiro.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-guerreira.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-guerreiro.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-guerreira.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-guerreiro.jpg);";
                }elseif($classe=="Guerreiro"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-guerreira.jpg);";                    
                }
                //LADINO
                elseif($classe=="Ladino"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-ladino.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-ladina.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-ladino.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-ladina.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-ladino.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-ladina.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-ladino.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-ladina.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-ladino.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-ladina.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-ladino.jpg);";
                }elseif($classe=="Ladino"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-ladina.jpg);";                    
                }
                //MAGO
                elseif($classe=="Mago"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-mago.jpg);";
                }elseif($classe=="Mago"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-maga.jpg);";
                }elseif($classe=="Mago"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-mago.jpg);";
                }elseif($classe=="Mago"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-maga.jpg);";
                }elseif($classe=="Mago"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-mago.jpg);";
                }elseif($classe=="Mago"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-maga.jpg);";
                }elseif($classe=="Mago"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-mago.jpg);";
                }elseif($classe=="Mago"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-maga.jpg);";
                }elseif($classe=="Mago"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-mago.jpg);";
                }elseif($classe=="Mago"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-maga.jpg);";
                }elseif($classe=="Mago"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-mago.jpg);";
                }elseif($classe=="Mago"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-maga.jpg);";                    
                }
                //MONGE
                elseif($classe=="Monge"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-monge.jpg);";
                }elseif($classe=="Monge"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-monja.jpg);";
                }elseif($classe=="Monge"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-monge.jpg);";
                }elseif($classe=="Monge"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-monja.jpg);";
                }elseif($classe=="Monge"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-monge.jpg);";
                }elseif($classe=="Monge"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-monja.jpg);";
                }elseif($classe=="Monge"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-monge.jpg);";
                }elseif($classe=="Monge"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-monja.jpg);";
                }elseif($classe=="Monge"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-monge.jpg);";
                }elseif($classe=="Monge"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-monja.jpg);";
                }elseif($classe=="Monge"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-monge.jpg);";
                }elseif($classe=="Monge"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-monja.jpg);";                    
                }
                //PALADINO
                elseif($classe=="Paladino"&&$gen=="Masculino"&&$raca=="Humano") {
                    echo "url(fundos/humano-paladino.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Feminino"&&$raca=="Humano") {
                    echo "url(fundos/humana-paladina.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Masculino"&&$raca=="Elfo") {
                    echo "url(fundos/elfo-paladino.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Feminino"&&$raca=="Elfo") {
                    echo "url(fundos/elfa-paladina.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Masculino"&&$raca=="Anão") {
                    echo "url(fundos/anao-paladino.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Feminino"&&$raca=="Anão") {
                    echo "url(fundos/ana-paladina.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Masculino"&&$raca=="Orc") {
                    echo "url(fundos/orc-paladino.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Feminino"&&$raca=="Orc") {
                    echo "url(fundos/orcf-paladina.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Masculino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfon-paladino.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Feminino"&&$raca=="Elfo-Noturno") {
                    echo "url(fundos/elfan-paladina.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Masculino"&&$raca=="Goblin") {
                    echo "url(fundos/goblin-paladino.jpg);";
                }elseif($classe=="Paladino"&&$gen=="Feminino"&&$raca=="Goblin") {
                    echo "url(fundos/goblinf-paladina.jpg);";                    
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
                <h1>Atributos Físicos</h1>
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
                <h1>Bônus</h1>
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