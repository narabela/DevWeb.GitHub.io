let display = document.getElementById("display");


function guardarValor (valor){
    display.value += valor;
}

function calcular() {
    try {
        display.value = eval(display.value);
    } catch {
        display.value = "Erro";
    }
}

function limpar(){
    display.value ="";
}
