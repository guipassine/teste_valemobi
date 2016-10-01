<?php
$error = $_GET['error'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Plataforma de Negociação de Mercadorias</title>
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
                <?php
                if($error) {
                    echo '<h4 style="font-size: 25px;" class="msg text-danger bg-danger">';
                    echo $error;
                    echo '</h4>';
                }    
                ?>              
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