const btnGenerate = document.querySelector("#generate-pdf");

btnGenerate.addEventListener("click", () => {
    const content = document.querySelector("#content");

    const options = {
        align: "center",
        margin: [-15,0,0,0],
        filename: "RPG System - Ficha.pdf",
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas: {scale: 1.5, dpi: 200, letterRendering: true, width:950, height: 1900,},
        jsPDF: {format: "a4", orientation: "portrait"},
    };

    html2pdf().set(options).from(content).save();

})