<?php
include_once 'models/db/connect.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM tipos_de_mercadorias WHERE tipo_mercadoria_id = {$id}";
if($conn->query($sql) === TRUE) {
    header("Location: list_tipo_mercadoria.php?msg=Registro excluído!");
} else {
    header("Location: erro.php?error=Ocorreu um problema");   
}
$conn->close();
?>