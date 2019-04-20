<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])){
            if(empty($_POST['username'])){
                echo "<p style='color:red'>Field Must Not Be Empty</p>";
            }else if (strlen($_POST['username'])<5 || strlen($_POST['username'])>10) {
                
                echo "<p style='color:red'>Field Must Between 5 Che and 10 Che</p>";
            }
            else {
                echo "Welcome".$_POST['username'];    
            }
        }
        ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Input Anything"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
