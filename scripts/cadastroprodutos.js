let validaPreco = document.getElementsByName('precoDoProduto')[0];
validaPreco.addEventListener('input',(e)=>{
    console.log(e);
    if(e.key >=48 && e.key<=57){
        alert("Di")
    }
})