<?php
include 'validator.php';


$fullname="";
$email="";
$comments="";
if (count ($_POST)){
          
       
       if (array_key_exists("fullname", $_POST)){
           $email= $_POST["fullname"];
       }
       if (array_key_exists("email", $_POST)){
           $email= $_POST["email"];           
       }
       
       if (array_key_exists("comments", $_POST)){
           $email= $_POST["comments"];          
       }
       }
       
       $valobj = new validator();
       if( $valobj->validateFullName($fullname)) {
           echo"<p>Fullname is valid. </p>";
       }
       else {
           echo "<p>Fullname is not valid.</p>";
       }
       
       if ( !empty($fullname) && !empty($email) && !empty($comments)) {
       
           $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
       
       try {
           $stmt = $dbh->prepare('insert into week3 set fullname = :fullnameValue, '
                   . 'email = :emailValue, comments = :commentsValue');
                   
                   $stmt->bindParam(':fullnameValue', $fullname, PDO::PARAM_STR);
                   $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
                   $stmt->bindParam(':commentsValue', $comments, PDO::PARAM_STR);
                   $stmt->execute();
                   
                   echo "<h3>Info Submitted</h3><p><a href='index.php'>Back to Form</a></p>";
       } 
       catch (Exception $e) {
           echo"Database Error";

       }
       
       }
       else 
       {
           echo "<h3> Info Not submitted</h3>";
       }
      
       
