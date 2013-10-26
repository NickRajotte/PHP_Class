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
        
        include 'Validator.php';
        include 'Config.php';
        include 'Session.php';
        $testEmail = " ";
                
                    if (Validator::emailIsValid($testEmail))
                        {
                        echo "Email is Valid";
                        
                        }
                    else {
                        echo "email is <strong>Not</strong> valid";
                    }
                    
      /* $dbh = new PDO(Config::DB_DNS,Config::DB_USER,Config::DB_PASSWORD);
       $stmt = $dbh->prepare('SELECT * FROM week3');
       $stmt->execute();
       
       $result = $stmt->fetchAll();*/
     //  print_r($result);
       // echo"<h1>",$_SESSION["counter"], "</h1>";
       ?>
        
      
    </body>
</html>
