let nome1 = document.querySelector('#nome_espaco');
console.log(nome1);
let preco1 = document.querySelector('#preco_espaco');
let descricao1 = document.querySelector('#descricao_espaco');
let form1 = document.querySelector('form');
form1.addEventListener("submit",(w)=>{
    if(!nome1.value||!preco1.value|| !descricao1.value){
        w.preventDefault();
        alert("Todos os campos devem estar preenchidos!");
    }
})