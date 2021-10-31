$(document).ready(function () {
    //this calculates values automatically
    sum();
    $("#num1, #num2").on("keydown keyup", function () {
        sum();
    });
});
function sum() {
    var num1 = document.getElementById('num1').value;
    var num2 = document.getElementById('num2').value;
    var result1 = parseInt(num2) - parseInt(num1);
}