<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is my First Page</h2>
    <?php 
    require_once "load.php";
    print $Obj->user_age("Alex",2005);
    print '<br>';
    ?>
</body>
</html>