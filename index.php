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
                    $Tests = getAllTest($db);
             ?>
             <table class="table table-bordered">
                 <tr>
                     <th>ID</th>
                     <th>Направление</th>
                     <th>Курс 1</th>
                     <th>Курс 2</th>
                     <th>Give %</th>
                     <th>Get %</th>
                     <th>Сохранить</th>
                 </tr>
                  <?php foreach ($Tests as $test) { ?>
                    <tr>
                        <td><?php echo $test['id']; ?></td>
                        <td><?php echo $test['direction_name']; ?></td>
                        <td><?php echo $test['course_give']; ?></td>
                        <td><?php echo $test['course_get']; ?></td>
                        <form action="save.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $test['id'];?>">
                        <td><input type="text" class="form-control" id="name" name="name" value="<?php echo $test['new_parser_actions_give'];?>"></td>
                        <td><input type="text" class="form-control" id="name" name="name" value="<?php echo $test['new_parser_actions_get'];?>"></td>
                        <td><button type="submit" class="btn btn-default">Сохранить</td>
                        </form>
                    </tr>
                    <?php } ?>
             </table>
        </div>

        <footer>

        </footer>
    </body>
</html>
