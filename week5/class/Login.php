<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author GFORTI
 */
class Login {
    //put your code here
    
    public static function processLogin(){ 
        if( $_SESSION["allowGuestbookAccess"] = false){
             header("Location:login.php");  
        }
                 
        else if ( isset($_POST["passcode"]) && $_POST["passcode"] == "test" ) {
            $_SESSION["allowGuestbookAccess"] = true;
            header("Location:guestbook.php");                
        }
    }
    
    public static function confirmAccess() {
        if ( ! isset($_SESSION["allowGuestbookAccess"]) 
                || $_SESSION["allowGuestbookAccess"] != true ) {
            header("Location:login.php");
        }
    }
    
}
