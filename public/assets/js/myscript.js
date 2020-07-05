function selecionar(){
	window.location.href='empresa/show/1';
}

function editarProduto( idProduto){
	console.log(idProduto);
	window.location.href='/produto/editar/'+ idProduto;
}

function novoProduto(){
	window.location.href='/produto/novo';
}

function cancelar(){
	history.go(-1);
}