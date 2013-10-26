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
        // put your code here
        session_start();
        session_regenerate_id(true);
        
        $token = uniqid();
        if ( !isset($_SESSION["token"]) )
        {
            $_SESSION["token"] = $token;
        }
        else
        {
         if ( !isset($_POST["token"]) && $_SESSION["token"] != $_POST["token"] )
         {
             header("login.php");
             exit();
         }
        }
        
        
        
        
        ?>
        
        <form name="mainform" action="login.php" method="post">
            username: <input type="text" name="username" /><br />
            password: <input type="password" name="password" /><br />
          
            <input type="hidden" name="token" value="<?php echo $token; ?>" />
            <input type="submit" value="Submit" />
            
            
        </form>
    </body>
</html>
