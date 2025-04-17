var caixaTexto = document.getElementById('resultado');
console.log(caixaTexto);

let display = document.getElementById("display");

var memoria = " ";
function guardarValor (value){
    memoria += value;
    caixaTexto.value = memoria;
    console.log(memoria);
}
