    let valor = document.getElementByName('precoDoProduto');
    if(valor.value.includes('.'||',')){
        valor.replace(',','.');
    }
    Number(valor);