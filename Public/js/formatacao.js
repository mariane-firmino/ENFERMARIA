const inputCpf = document.querySelector("#cpf");
const inputTelefone = document.querySelector("#telefone");

inputCpf.addEventListener('keypress', () => {
    let inputLength = inputCpf.value.length;

    if (inputLength === 3 || inputLength === 7) {
        inputCpf.value += '.';
    } else if (inputLength === 11) {
        inputCpf.value += '-';
    }
})

inputTelefone.addEventListener('keypress', () => {
    let inputLength = inputTelefone.value.length;

    if (inputLength === 0) {
        inputTelefone.value += '(';
    } else if (inputLength === 3) {
        inputTelefone.value += ') ';
    } else if (inputLength === 10) {
        inputTelefone.value += '-';
    }
})