function selecionar(){
	window.location.href='empresa/show/1';
}

function editarProduto( idProduto){	
	window.location.href='/produto/editar/'+ idProduto;
}

function novoProduto(){
	window.location.href='/produto/novo';
}

function cancelar(){
	//history.go(-1);
	window.location.href='/produto/lista';
}

function passarValor(produto){
	document.getElementById('campo').value = produto;
}

function deletar(id){
	window.location.href='/produto/delete/'+ id;
}

function valor(){
	return document.getElementById('campo').value;
}