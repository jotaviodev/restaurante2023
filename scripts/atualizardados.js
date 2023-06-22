let nome = document.querySelector('#nome_cliente');
let sexo = document.querySelector('#sexo_cliente');
let email = document.querySelector('#email_cliente');
let senha = document.querySelector('#senha_cliente');
let telefone = document.querySelector('#telefone_cliente');
let form = document.querySelector('form');
form.addEventListener("submit",(w)=>{
    if(!nome.value||!ingredientes.value||!preco.value||!tipo.value || !foto.value){
        w.preventDefault();
        alert("Todos os campos devem estar preenchidos!");
    }
})

telefone.addEventListener("change",(t)=>{
    let inValue = telefone.value
    if(inValue.lenght == 0 && inValue.lenght == 3){
        telefone.push("(");
    }
})
