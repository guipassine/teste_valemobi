<?php
include_once 'models/db/Connect.php';
$tipo_mercadoria = $_REQUEST['tipo_mercadoria'];
$sql = "INSERT INTO tipos_de_mercadorias(tipo_mercadoria_nome) VALUES('{$tipo_mercadoria}')";
$conn = Connect::getConn();
if($conn->query($sql) === TRUE) {
    header("Location: list_tipo_mercadoria.php?msg=Cadastrado com sucesso!");
} else {
    header("Location: erro.php?error=Ocorreu um problema");   
}
$conn->close();
?>