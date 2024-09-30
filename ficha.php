<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG System - Ficha de Personagem</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.2/html2pdf.bundle.min.js" integrity="sha512-MpDFIChbcXl2QgipQrt1VcPHMldRILetapBl5MPCA9Y8r7qvlwx1/Mc9hNTzY+kS5kX6PdoDq41ws1HiVNLdZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scripts.js" defer></script>
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
<body>
    <main id="content">
        <div class="item">
            <div class="item"id="moldura">
                <h1><?php
                 $nome = $_GET["nome"];
                 echo $nome; 
                 ?>
                 </h1>
                <h1 id="subt">Raça: <span id="sub"><?php echo $raca; ?></span> | Classe: <span id="sub"><?php echo $classe; ?></span></h1>
                
            </div>
        </div>
        <div class="baixo">
            <div class="subitem">
                <h1>Atributos Físicos</h1>
                <p id="trib">
                    <?php
                    if($raca == "Humano"){
                        $sraca = "Humanos";
                        $csraca= "Sendo a mais versátil dentre todas as raças, os humanos são marcados por sua ambição e sua busca pelo progresso. Eles estão sendo tentando aproveitar suas vidas ao máximo, sendo mais curtas do que a da maioria das raças e marcadas de emoções e desejos intermináveis.<br>Existem humanos de todos os tipos de personalidade que se possa imaginar: bons, maus, leais e caóticos. Cada ser humano procura deixar algum tipo de marca em algo que considera importante ou, pelo menos, deixar uma boa herança para seus filhos e netos.";
                    }elseif($raca == "Anão"){
                        $sraca = "Anões";
                        $csraca = "Os anões são famosos por sua eficiência militar, sua habilidade para resistir a castigos físicos e mágicos, seu conhecimento sobre os segredos da terra, seu trabalho árduo e sua capacidade de beber cerveja.<br> Seus reinos misteriosos, escavados no interior das montanhas, são famosos pelos tesouros maravilhosos que a raça produz como presentes ou para o comércio.";
                    }elseif($raca == "Elfo"){
                        $sraca = "Elfos";
                        $csraca = "Livres e selvagens, os elfos protegem suas florestas utilizando furtividade e disparando flechas mortíferas em meio às árvores. <br>Eles constroem seus lares em plena harmonia com a natureza, com tanta perfeição que os viajantes muitas vezes não percebem que invadiram uma comunidade élfica até ser tarde demais.";
                    }elseif($raca == "Orc"){
                        $sraca ="Orcs";
                        $csraca = "Os orcs são criaturas bestiais e beligerantes, que habitam o subterrâneo ou regiões selvagens. Esses seres monstruosos são, quase sem exceção, saqueadores e assassinos, atacando comunidades civilizadas para roubar e matar. <br>São onívoros e de hábitos noturnos, preferindo viver no subterrâneo - o que lhes provoca um ódio especial dos anões. Possuem traços selvagens, como presas, focinho e pêlos.";
                    }elseif($raca == "Elfo-Noturno"){
                        $sraca = "Elfos Noturnos";
                        $csraca = "Elfos noturnos são de origem desconhecida, no entanto algumas lendas dizem que os elfos foram criados para governar dia e os elfos noturnos para governar a noite. A tempos atrás as duas raças eram unidas e fortes, mas com o tempo começaram a surgir disputas por terras entre as duas raças e no fim separaram as terras, os elfos noturnos acabaram com as terras mais pobres e escuras, mas sobrevivem bem naquela zona e sua cidade é  considerada quase impenetrável graças a isso.<br> São graciosos e mais gentis que os elfos, mas quando irritados são capazes de causar tamanha destruição, a cor de sua pele varia entre tons normais ou puxados para o roxo.";
                    }elseif($raca == "Goblin"){
                        $sraca = "Goblins";
                        $csraca = "Não se sabe ao certo quando esses pequenos surgiram. Engenhosos por natureza, sempre compensando a falta de força física com astúcia e covardia, os goblins não aparentam ser criados por nenhum deus, ou pelo menos nenhum deles assumiu a responsabilidade pela criação, ainda mais que, tirando a aparência, eles se assemelham levemente aos gnomos.<br>Mesmo que consigam viver em comunidade, muitos saem de suas tribos, seja para se aventurar ou por medo de morrer para aventureiros. Afinal de contas, conhece o ditado: Se não pode vencê-los, junte-se a eles.";
                    }



                    if($classe=="Bárbaro"){
                        $sclasse = "Furiosos e agressivos";
                        $csclasse = "O bárbaro é um ser que rejeita as regras e costumes da sociedade, adotando uma vida livre das leis e da ordem. Pode também estar ligado aos espíritos da selvageria dos animais. <br> Costumam estar sempre atentos à sua volta em um campo de batalha, e utilizam combate corpo-a-corpo.";
                    }elseif($classe=="Bardo"){
                        $sclasse = "Charmosos e ágeis";
                        $csclasse = "Os bardos podem atacar com suas armas ágeis ou usar a música para conjurar magias de suporte e cura sobre seus aliados! Também podem lançar magias de encantamento e ilusão sobre seus inimigos. <br>Costumam ser caóticos, galantes, bravos e malandros em sua essência!";
                    }elseif($classe=="Bruxo"){
                        $sclasse = "Forças do Patrono";
                        $csclasse = "O Bruxo é um conjurador de magias, em que seu poder é trazido por um pacto com uma entidade transcendental. <br>Esse contato pode vir por parte do bruxo, ou da própria entidade, que é chamada de Patrono. Este patrono permite que o Bruxo consiga utilizar magias de outras classes, além de receber poderes diretamente ligados à natureza do patrono.";
                    }elseif($classe=="Caçador"){
                        $sclasse = "Sorrateiros e mortais";
                        $csclasse = "São exploradores dos ermos da natureza e caçadores de monstros que ameaçam as margens da civilização. Sorrateiros, rastream suas presas movendo-se silenciosamente nas florestas e se escondendo. Possuem um combate selvagem, que aproxima eles um pouco do druida. São famosos por utilizarem arco e flecha ou uma arma corpo-a-corpo em cada mão.";
                    }elseif($classe=="Clérigo"){
                        $sclasse = "Sacerdotes das divindades";
                        $csclasse = "Os clérigos são os grandes representantes dos deuses na terra, e podem ser deuses bondosos ou malignos.Eles são sacerdotes, cuja devoção é tão grande que os permite realizar milagres.<br> Dentro do combate, ele atua protegendo e curando os aliados, e punindo os inimigos da sua fé, conforme a vontade de um deus maior.";
                    }elseif($classe=="Druida"){
                        $sclasse = "Guardiões da Natureza";
                        $csclasse = "O Druida é um guardião de toda a natureza. De tudo que é vivo, puro e primordial. Muitos deles rejeitam boa parte da civilização e suas invenções, como armaduras e escudos metálicos. Seus melhores amigos costumam ser os animais e as plantas.<br> Em geral, possuem uma Forma Selvagem, em que se transformam em animais exóticos, recebendo habilidades extras. Também podem ter um animal companheiro, que o defende ou serve como montaria.";
                    }elseif($classe=="Feiticeiro"){
                        $sclasse = "Magia de sangue";
                        $csclasse = "O feiticeiro tem a magia como uma habilidade inata que corre em seu sangue. Eles possuem o poder arcano dentro deles, os tendo recebido hereditariamente, ou em um evento extraordinário.<br> Normalmente, os feiticeiros possuem uma flexibilidade maior que os magos para lançar magias. Eles não precisam preparar ou memorizar suas magias, elas apenas saem. Mas em compensação, feiticeiros costumam conhecer um numero menor de magias.";
                    }elseif($classe=="Guerreiro"){
                        $sclasse = "Fronte da Batalha";
                        $csclasse = "Os Guerreiros são cavaleiros, gladiadores, campeões, membros de uma infantaria… Todos aqueles com maestria em armas, armaduras, dano físico e técnicas de combate.Combatem com armas ágeis, com uma arma grande, focado em defesa, em manobras, esgrima… até mesmo ataque à distância!<br> São aqueles que fazem a fronte, e que estão ali para mostrar do que são capazes!";
                    }elseif($classe=="Ladino"){
                        $sclasse = "Furtivos";
                        $csclasse = "Um Ladino é alguém furtivo, sorrateiro, trapaceiro, astuto e bom com armadilhas e mecanismos.<br> Normalmente não possuem boa reputação nem boa intenção. Costumam levar a vida de assaltantes, assassinos, ladrões e vigaristas. São pragmáticos, e utilizam táticas julgadas como 'desleais', tanto em combate quanto fora dele.";
                    }elseif($classe=="Mago"){
                        $sclasse = "Magia do Conhecimento";
                        $csclasse = "O mago conjura magias por meio de anos de estudo sobre os segredos arcanos do universo. São noites em claro estudando cada gesto e cada compontente. A magia para o mago é uma ciência, com escolas nas quais ele pode se especializar (como evocação, ilusão, necromancia…)<br> Normalmente, o mago possui um grimório, um livro onde ele anota as magias e seus requisitos. É de onde ele lê, memoriza, e prepara as magias que ele irá utilizar durante o dia.";
                    }elseif($classe=="Monge"){
                        $sclasse = "A força do Chi";
                        $csclasse = "O monge é alguém que aperfeiçoou a si mesmo a níveis quase sobrenaturais, treinando corpo e mente para funcionarem beirando a perfeição. Eles não costumam utilizar nada além do corpo e da mente para se defender.<br> Os monges estudam uma energia que flui através dos corpos vivos, chamada de Chi. Essa energia permite que se crie efeitos mágicos e que uma pessoa exceda a capacidade física de seu corpo.";
                    }elseif($classe=="Paladino"){
                        $sclasse = "Guerreiros da Justiça";
                        $csclasse = "Os paladinos são verdadeiros guereiros da justiça, defensores da bondade e destruidores das forças do mal.<br> Suas armas e seu poder em combate são pouco comparados ao poder mágico que ele possui: De curar os doentes e feridos, de detectar/destruir os cruéis e mortos-vivos, e de proteger os inocentes e os que se redimiram. Eles não são necessariamente servos dos deuses como os clérigos, mas seguem regras como eles.";
                    }
                    


                    ?>
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/constituicaob.png' alt='ícone de força de constituição' class='icone'>";
                    }else {
                        echo "<img src='icones/constituicao.png' alt='ícone de força de constituição' class='icone'>";
                    }
                    ?> CON </strong><span class="valor"> <?php echo $_GET["con"] ?> |</span>
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/forcab.png' alt='ícone de força de força' class='icone'>";
                    }else {
                        echo "<img src='icones/forca.png' alt='ícone de força de força' class='icone'>";
                    }
                    ?> FOR </strong><span class="valor"> <?php echo $_GET["for"]; ?> |</span>
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/destrezab.png' alt='ícone de destreza' class='icone'>";
                    }else {
                        echo "<img src='icones/destreza.png' alt='ícone de destreza' class='icone'>";
                    }
                    ?> DES </strong><span class="valor"> <?php echo $_GET["dex"]; ?> |</span>
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/agilidadeb.png' alt='ícone de agilidade' class='icone'>";
                    }else {
                        echo "<img src='icones/agilidade.png' alt='ícone de agilidade' class='icone'>";
                    }
                    ?> AGI </strong><span class="valor"> <?php echo $_GET["agi"]; ?> |</span>
                </p>
                <hr>
                <h1>Atributos Mentais</h1>
                    <p id="trib">
                    
                    
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                     echo "<img src='icones/inteligenciab.png' alt='ícone de inteligência' class='icone'>";
                    }else {
                        echo "<img src='icones/inteligencia.png' alt='ícone de inteligência' class='icone'>";
                    }
                    ?> <strong> INT </strong><span class="valor"> <?php echo $_GET["int"] ?> |</span>
                    
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/forcadevontadeb.png' alt='ícone de força de vontade' class='icone'>";
                    }else {
                        echo "<img src='icones/forcadevontade.png' alt='ícone de força de vontade' class='icone'>";
                    }
                    ?><strong> FVE </strong><span class="valor"> <?php echo $_GET["forv"]; ?> |</span>
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/carismab.png' alt='ícone de força de carisma' class='icone'>";
                    }else {
                        echo "<img src='icones/carisma.png' alt='ícone de força de carisma' class='icone'>";
                    }
                    ?>
                    <strong> CAR </strong><span class="valor"> <?php echo $_GET["car"]; ?> |</span>
                    <?php
                    if ($raca=="Orc"||$raca=="Elfo-Noturno"||$raca=="Goblin"){
                        echo "<img src='icones/percepcaob.png' alt='ícone de força de percepção' class='icone'>";
                    }else {
                        echo "<img src='icones/percepcao.png' alt='ícone de força de percepção' class='icone'>";
                    }
                    ?>  
                    PER </strong><span class="valor"> <?php echo $_GET["per"]; ?> |</span>
                    </p>

                <hr>
                <div class="subitem">
                <h1>Descrição:</h1>
                <p id ="sobre">"<?php 
                echo $_GET["info"];
                ?>"</p>
                <hr>
            </div>
                <h1>Os <?php echo $sraca; ?>:</h1>
                <p id="trib">"<?php echo $csraca;?>"</p>
                <hr>
                <h1><?php echo $sclasse; ?>:</h1>
                <p id="trib">"<?php echo $csclasse;?>"</p>
                <hr>
            </div>
            
        </div>
        <div class="final">
            <p class="print">Ficha feita pelo site RPG System, criado por Bruno Simon Ferreira, dev front-end aprendiz</p>
            <a href="javascript:history.back()" class="botao">Fazer outro personagem</a>
            <button class="botao" id="generate-pdf">Gerar PDF</button>
        </div>

    </main>  
</body>
</html>