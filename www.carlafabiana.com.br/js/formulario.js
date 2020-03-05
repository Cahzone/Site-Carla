
var enviar = document.getElementById("enviar")

enviar.setAttribute('onclick', 'exibirDadosDigitados()')

function exibirDadosDigitados() {
    var nome = document.getElementById("nome").value
    var email = document.getElementById("email").value
    var telefone = document.getElementById("tel").value
    var mensagem = document.getElementById("enviar").value

    alert (`
    - nome: ${nome} 
    - email: ${email} 
    - telefone: ${telefone}
    - mensagem: ${mensagem}
    `
    )
}
