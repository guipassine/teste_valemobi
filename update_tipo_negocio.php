<?php
include_once 'models/db/connect.php';
$id = $_REQUEST['id'];
$tipo_negocio = $_REQUEST['tipo_negocio'];
$sql = "UPDATE tipos_de_negocios SET tipo_negocio_nome='{$tipo_negocio}' WHERE tipo_negocio_id={$id}";
if($conn->query($sql) === TRUE) {
    header("Location: list_tipo_negocio.php?msg=Registro atualizado!");
} else {
    header("Location: erro.php?error=Ocorreu um erro!");   
}
$conn->close();
?>