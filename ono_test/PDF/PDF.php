<!DOCTYPE html>
<html>
<head>
<title>jsPDFでh1を画像化</title>
<style>
  #capture {
    font-size: 36px;
  }
</style>
</head>
<body>

<h1 id="capture">こんにちは</h1>
<button onclick="captureH1()">画像として保存</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
function captureH1() {
  const element = document.getElementById('capture');
  const pdfWidth = 300; // PDFの幅 (必要に応じて調整)
  const pdfHeight = 1000; // PDFの高さ (必要に応じて調整)

  html2canvas(element, { width: pdfWidth, height: pdfHeight }).then(canvas => {
    const imgData = canvas.toDataURL('image/png');
    const pdf = new jspdf.jsPDF({
      orientation: (pdfWidth > pdfHeight) ? 'landscape' : 'portrait', // 横長ならlandscape、縦長ならportrait
      unit: 'px',
      format: [pdfWidth, pdfHeight]
    });
    pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
    pdf.save('konnichiwa.pdf');
  });
}
</script>

</body>
</html>