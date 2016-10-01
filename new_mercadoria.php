<?php 
include_once 'models/TipoNegocio.php';
include_once 'models/TipoMercadoria.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Nova Mercadoria - Plataforma de Negociação de Mercadorias</title>
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
                <h4>NOVA MERCADORIA</h4>
                <br />
                <form role="form" action="create_mercadoria.php" method="post">
                    <div class="form-group">
                        <label for="tipo_negocio">Tipo Mercadoria</label>
                        
                        <?php $tipos = TipoMercadoria::find(); ?>                        
                        <select class="form-control" id="tipo_mercadoria_id" name="tipo_mercadoria_id">    
                            <?php for($i = 0; $i < count($tipos); $i++) { ?>
                            <option value="<?php echo $tipos[$i]->getId(); ?>"><?php echo $tipos[$i]->getNome(); ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tipo_negocio">Nome da Mercadoria</label>
                        <input type="text" required class="form-control" id="mercadoria_nome" name="mercadoria_nome" placeholder="Qual o nome da mercadoria?" />
                    </div>
                              
                    <div class="form-group">
                        <label for="tipo_negocio">Quantidade</label>
                        <input type="number" required class="form-control" id="quantidade" name="quantidade" placeholder="Qual a quantidade?" />
                    </div>
                         
                    <div class="form-group">
                        <label for="tipo_negocio">Preço</label>
                        <input type="text" required class="form-control" id="preco" name="preco" placeholder="Qual o preço?" />
                    </div>
                    
                    <div class="form-group">
                        <label for="tipo_negocio">Tipo Negócio</label>
                        <?php $tipos = TipoNegocio::find(); ?>
                                                
                        <select class="form-control" id="tipo_negocio_id" name="tipo_negocio_id">    
                            <?php for($i = 0; $i < count($tipos); $i++) { ?>
                            <option value="<?php echo $tipos[$i]->getId(); ?>"><?php echo $tipos[$i]->getNome(); ?></option>
                            <?php } ?>
                        </select>
                        
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