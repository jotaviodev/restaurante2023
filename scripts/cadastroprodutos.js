let nome = document.querySelector('#nomeDoProduto');
let ingredientes = document.querySelector('#ingredientesDoProduto');
let preco = document.querySelector('#precoDoProduto');
let tipo = document.querySelector('#tipoDeAlimento');
let foto = document.querySelector('#fotoProduto');
let form = document.querySelector('form');
form.addEventListener("submit",(w)=>{
    if(!nome.value||!ingredientes.value||!preco.value||!tipo.value || !foto.value){
        w.preventDefault();
        alert("Todos os campos devem estar preenchidos!");
    }
})


let inValue = ""
preco.addEventListener('keyup',(e)=>{
    console.log(e);
    if (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 8 || e.keyCode == 190 || e.keyCode == 188 || e.keyCode >= 96 && e.keyCode <= 105) {
        inValue = preco.value
        preco.value = inValue;
    } else {
        preco.value = inValue
    }
})

preco.addEventListener("input", (e) => e.preventDefault())