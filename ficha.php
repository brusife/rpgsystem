<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPG System - Ficha de Personagem</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="fichastyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.2/html2pdf.bundle.min.js" integrity="sha512-MpDFIChbcXl2QgipQrt1VcPHMldRILetapBl5MPCA9Y8r7qvlwx1/Mc9hNTzY+kS5kX6PdoDq41ws1HiVNLdZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <main id="content">
        <div class="item">
            <div class="item"id="moldura">
                <h1>Claire Fraser, a Curandeira</h1>
                <h1>Classe: <span id="sub">Druida</span></h1>
                <hr>
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
            </div>
            
        </div>
        
        <a href="javascript:history.back()" class="botao">Fazer outro personagem</a>
        <button id ="generate-pdf" class="botao">Gerar PDF</button>
    </main>  
</body>
</html>