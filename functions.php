<?php 
session_start();

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'atu_ilms_db');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //function to block user from logging in direct 
    //by typing index.php url in the address bar
    function isLoggedIn(){
        if (isset($_SESSION['user'])){
            return true;
        }else{
            return false;
        }
    }

    //log user out if logout button is clicked
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    
// function to check if an unauthorized user try to enter USER side with direct url
function isUser(){
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'user'){
            return true;
    }else{
       return false; 
    }
}

// function to check if an unauthorized user try to enter ADMIN side with direct url
function isAdmin(){
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin'){
            return true;
    }else{
       return false; 
    }
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







?>