function alteraCorMenu(option){
    option.style.backgroundColor="#ff6b01e2";
    option.style.borderRadius="2px";

}
function retornaCorMenu(option){
    option.style.backgroundColor=""
}
function confirmDelete(id){
    let confirmation = confirm('Você realmente deseja deletar este item?');
    if(confirmation){
        window.location.href="./deleteprodutos.php?id=" + id
    }
}