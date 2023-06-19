let nome = document.querySelector('#nomeEspaco');
let preco = document.querySelector('#precoEspaco');
let descricao = document.querySelector('#descEspaco');
let form = document.querySelector('form');
form.addEventListener("submit",(w)=>{
    if(!nome.value||!preco.value||!capacidade.value || !descricao.value){
        w.preventDefault();
        alert("Todos os campos devem estar preenchidos!");
    }
})


let inValue = ""
preco.addEventListener('keyup',(e)=>{
    if (e.keyCode >= 48 && e.keyCode <= 57 || e.keyCode == 8 || e.keyCode == 190 || e.keyCode == 188 || e.keyCode >= 96 && e.keyCode <= 105) {
        inValue = preco.value
        preco.value = inValue;
    } else {
        preco.value = inValue
    }
})
