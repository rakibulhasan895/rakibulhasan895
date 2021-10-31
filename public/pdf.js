
window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            $("p").css("font-size", "12px");
           var opt = {
                margin:1,
                fontsize:12,
                filename: 'padmaponno.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 4 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            }; 
            html2pdf().from(invoice).set(opt).then(function (pdf){
            $("p").css("font-size", "12px");
            }).save();
        })
}


