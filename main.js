document.getElementById('div-pagina').style.display = 'none';
document.getElementById('div-novo-jogo').style.display = 'none';
const form = document.querySelector('#formularioo');

function selecionaForm() {

    let form = document.getElementById('doIt').value;

    if (form == 1) {
        document.getElementById('div-pagina').style.display = 'block';
        document.getElementById('div-novo-jogo').style.display = 'none';
    } else if (form == 2) {
        document.getElementById('div-pagina').style.display = 'none';
        document.getElementById('div-novo-jogo').style.display = 'block';
    } else {
        document.getElementById('div-pagina').style.display = 'none';
        document.getElementById('div-novo-jogo').style.display = 'none';
    }
}


function verificaForm() {
    erros = 0
    err = new Array(1); //lista

    if (document.getElementById('slc_pagina').value == "0") err[erros++] = "Página não informada";
    if (document.getElementById('txtAlt').value == "") err[erros++] = "Descrição não informada";
    if (erros == 0) {
        return true;
    } else {
        msg = 'Os seguintes erros foram encontrados: \n\n'
        for (i = 0; i < err.length; i++) {
            msg = msg + err[i] + '\n'

        }
        alert(msg);
        return false;
    }
};

form.addEventListener('submit', function (e) {
    e.preventDefault();
    verificaForm();
});

