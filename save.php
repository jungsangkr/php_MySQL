<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title></title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php include 'db.php'; ?>
            <?php include 'api.php'; ?>
            <?php
                    if(!empty($_POST['new_parser_actions_give']) && !empty($_POST['new_parser_actions_get']) && !empty($_POST['id'])) {
                        $new_parser_actions_give = $_POST['new_parser_actions_give'];
                        $new_parser_actions_get = $_POST['new_parser_actions_get'];
                        $id = $_POST['id'];
                        saveExchange($db, $new_parser_actions_give, $new_parser_actions_get, $id);
                    }   else {
                        echo "<h1>Ошибка сохранения данных</h1>";
                    }
                    
             ?>
        </div>

        <footer>

        </footer>
    </body>
</html>
