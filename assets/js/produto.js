var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valortamanho]');

// Funcao Anonima
inputTamanho.oninput = function() {
    outputTamanho.value = inputTamanho.value;
}
