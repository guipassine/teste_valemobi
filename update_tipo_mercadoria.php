<?php
include_once 'models/db/connect.php';
$id = $_REQUEST['id'];
$tipo_negocio = $_REQUEST['tipo_mercadoria'];
$sql = "UPDATE tipos_de_mercadorias SET tipo_mercadoria_nome='{$tipo_negocio}' WHERE tipo_mercadoria_id={$id}";
if($conn->query($sql) === TRUE) {
    header("Location: list_tipo_mercadoria.php?msg=Registro atualizado!");
} else {
    header("Location: erro.php?error=Ocorreu um erro!");   
}
$conn->close();
?>