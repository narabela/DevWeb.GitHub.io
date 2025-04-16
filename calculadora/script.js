var caixaTexto = document.getElementById('resultado');
console.log(caixaTexto);

var memoria = " ";
function guardarValor (value){
    memoria += value;
    caixaTexto.value = memoria;
    console.log(memoria);
}
