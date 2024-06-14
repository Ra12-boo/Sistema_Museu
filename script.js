
const btnCadastrarNovo = document.getElementById("ver_dados")
const sectionCadastrarFormulario = document.querySelector(".Cadastrar-Formulario")
const sectiontabela = document.querySelector(".tabela")



btnCadastrarNovo.addEventListener("click", function () {
    sectionCadastrarFormulario.classList.toggle("show")
    sectiontabela.classList.toggle("show")
})

const btnVoltar = document.getElementById("btn-voltar")

btnVoltar.addEventListener("click", function () {
    sectionCadastrarFormulario.classList.toggle("show")
    sectiontabela.classList.toggle("show")
  
})
