<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Novo Tipo de Mercadoria - Plataforma de Negociação de Mercadorias</title>
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
                <h4>NOVO TIPO DE MERCADORIA</h4>
                <br />
                <form role="form" action="create_tipo_mercadoria.php" method="post">
                    <div class="form-group">
                        <label for="tipo_negocio">Tipo Mercadoria</label>
                        <input required class="form-control" id="tipo_mercadoria" name="tipo_mercadoria" placeholder="Digite aqui..." />
                    </div>
                    <button class="btn btn-default" id="create" name="create" type="submit">Criar</button>
                </form>     
                <br /><br />
                <a href="list_tipo_mercadoria.php">Voltar</a>
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