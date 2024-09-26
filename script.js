
function downloadPDF() {
    const item = document.querySelector(".Content");
  
    var opt = {
      margin: [0,0,0,0],
      filename: "ficha.pdf",
      html2canvas: { scale: 2, dpi: 300, letterRendering: true },
      jsPDF: { unit: 'mm', orientation: 'portrait'},
      pageBreak: { mode: 'css'},
      compressPDF: true
    };
  
    html2pdf().set(opt).from(item).save();
  }