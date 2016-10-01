<?php
include_once 'models/db/connect.php';
$id = $_GET['id'];
$name;
$sql = "SELECT * FROM tipos_de_mercadorias WHERE tipo_mercadoria_id={$id}";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $name = $row['tipo_mercadoria_nome'];
        $id = $row['tipo_mercadoria_id'];
    }
}
$conn->close();
if(!$name && !$id) {
    header("Location: erro.php?error=404");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Editar Tipo de Negócio - Plataforma de Negociação de Mercadorias</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" />
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css" />
        <link rel="stylesheet" href="css/jquery-ui.theme.min.css" />
        <link rel="stylesheet" href="css/default.css" />
    </head>
    
    <body>
        <main id="interface">
            <?php include("templates/site_header.php") ?>    
            <div id="content">
                <h4>EDITAR TIPO DE MERCADORIA</h4>
                <br />
                <form role="form" action="update_tipo_mercadoria.php?" method="post">
                    
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
                    
                    <div class="form-group">
                        <label for="tipo_mercadoria">Tipo Negócio</label>
                        <input value="<?php echo $name; ?>" class="form-control" id="tipo_mercadoria" name="tipo_mercadoria" placeholder="Digite aqui..." />
                    </div>
                    <button class="btn btn-default" id="create" name="create" type="submit">Atualizar</button>
                </form> 
                <br /><br />
                <a href="list_tipo_negocio.php">Voltar</a>
            </div>
            
            <div class="clear"></div>
            <?php include("templates/site_footer.php") ?>
        </main>
        
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/default.js"></script>
    </body>
</html>