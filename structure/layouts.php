<?php 
class Layouts{
    public function heading(){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            
        </body>
        </html>
        <?php
    }
    public function footer(){
        ?>
        <div class="footer">
            Copyright &copy; ICS <?php print date("Y"); ?>
        </div>
        <?php
    }
}
//$Obj = new fnc();
//Sharlet will invoke the method
//print $Obj->user_age("Alex",2005);
//print "Hi! My name is " . $Obj ->computer_user("Sharlet") . " and I am " . $Obj ->user_age(2005);
//print '<br>';
//print $Obj->hash_pass('123');
?>