<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $p ="";
        
        echo count($_GET);
        if (count($_GET))
        {
           if (array_key_exists("p",$_GET))
           {
               $p = $_GET["p"];
           }
        }
       // echo 'testing';
        // $_POST = array();
        // $_GET = array();
        //$_GET["page"]= "index";
        //$_GET["title"] = "hello";
        //$key => hello";
         //echo $_GET ['page'], "<br />", $_GET["title"], "<br />", $_GET["p"];
         echo "<h1>", $_GET["page"], "</h1>";
         if(strlen($p) > 0 )
         {
             echo "<p>", $p, "</p>";
         }
         echo "<p>", $_GET["p"], "</p>";
        ?>
    </body>
</html>

