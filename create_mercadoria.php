<?php
include_once 'models/Mercadoria.php';
$tipo_mercadoria_id = $_REQUEST['tipo_mercadoria_id'];
$mercadoria_nome = $_REQUEST['mercadoria_nome'];
$quantidade = $_REQUEST['quantidade'];
$preco = $_REQUEST['preco'];
$tipo_negocio_id = $_REQUEST['tipo_negocio_id'];
$mercadoria = new Mercadoria();
$mercadoria->setTipoMercadoriaId($tipo_mercadoria_id);
$mercadoria->getNome($mercadoria_nome);
$mercadoria->getQuantidade($quantidade);
$mercadoria->getPreco($preco);
$mercadoria->getTipoNegocioId($tipo_negocio_id);
if($mercadoria->save() === TRUE) {
    header("Location: index.php?msg=Cadastrado com sucesso!");
} else {
    header("Location: erro.php?error=Ocorreu um problema");   
}
?>