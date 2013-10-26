<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
       $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
       $stmt = $dbh->prepare('SELECT * FROM week3');
       $stmt->execute();
       
       $result = $stmt->fetchAll();
       
       if (count($result)) {
           foreach ($reult as $row) {
               print_r($row);
               echo "<br />";
               
           }
           
       }
       else {
           echo "No Rows returned";
       }
        ?>
        
        <form name="mainform" action="processform.php" method="post">
         Full Name: <input type="text" name="fullname"  value="<?php echo $fullname; ?>" /><br />
         Email: <input type="text" name="email" value=""/><br />
         Comments: <br /> <textarea cols="20" rows="5" name="comments"></textarea><br />
         <input type ="submit" value="submit" />
            
        </form>
    </body>
</html>