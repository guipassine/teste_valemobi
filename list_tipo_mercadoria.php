<?php 
include_once 'models/db/connect.php';
$msg = $_GET['msg'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Tipos de Mercadorias - Plataforma de Negociação de Mercadorias</title>
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
                <div class="">
                    <?php
                    if($msg) {
                        echo "<p class='msg text-success bg-success'>{$msg}</p>";
                    }
                    ?>
                </div>
                <h4>TIPOS DE MERCADORIAS</h4>
                <table class="table table-striped table-responsive">
                    <a href="new_tipo_mercadoria.php" id="new" title="Adicionar"><img alt="Adicionar" src="images/plus_2.png" /></a>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tipo de Mercadoria</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM tipos_de_mercadorias";
                        
                        $result = $conn->query($sql);
                        
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>{$row['tipo_mercadoria_id']}</td>";
                                echo "<td>{$row['tipo_mercadoria_nome']}</td>";
                                
                                echo "<td>";
                                echo "<a href='edit_tipo_mercadoria.php?id={$row['tipo_mercadoria_id']}'>Atualizar</a>";
                                echo " | ";
                                echo "<a href='destroy_tipo_mercadoria.php?id={$row['tipo_mercadoria_id']}'>Excluír</a>";
                                echo "</td>";                                
                                echo "</tr>";
                            }
                        }
                                                
                        $conn->close();
                        ?>                        
                    </tbody>
                </table>                                
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