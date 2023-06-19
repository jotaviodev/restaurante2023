let nome = document.querySelector('#nomeAtracao');
let data = document.querySelector('#dataAtracao');
let horario = document.querySelector('#horarioAtracao');
let descricao = document.querySelector('#descAtracao');
let form = document.querySelector('form');
form.addEventListener("submit",(w)=>{
    if(!nome.value||!data.value||!horario.value || !descricao.value){
        w.preventDefault();
        alert("Todos os campos devem estar preenchidos!");
    }
})


let nome1 = document.querySelector('#nome_atracao');
let data1 = document.querySelector('#data_atracao');
let horario1 = document.querySelector('#horario_atracao');
let descricao1 = document.querySelector('#descricao_atracao');
let form1 = document.querySelector('form');
form1.addEventListener("submit",(w)=>{
    if(!nome1.value||!data1.value||!horario1.value || !descricao1.value){
        w.preventDefault();
        alert("Todos os campos devem estar preenchidos!");
    }
})