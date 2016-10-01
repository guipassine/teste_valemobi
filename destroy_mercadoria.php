<?php
include_once 'models/db/connect.php';
$id = $_REQUEST['id'];
$sql = "DELETE FROM mercadorias WHERE mercadoria_id = {$id}";
if($conn->query($sql) === TRUE) {
    header("Location: index.php?msg=Registro excluído!");
} else {
    header("Location: erro.php?error=Ocorreu um problema");   
}
$conn->close();
?>