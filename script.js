const btnGenerate = document.querySelector("#generate-pdf");

btnGenerate.addEventListener("click", () => {
    // Conteúdo do PDF
    const content = document.querySelector("#content");

    //Configuração do arquivo final em PDF
    const options = {
        margin: [0],
        filename: "ficha.pdf",
        jsPDF: {unit: "mm", format: "a4", orientation: "portrait"},
    };

    //Gerar e baixar o PDF
    html2pdf().set(options).from(content).save();
})