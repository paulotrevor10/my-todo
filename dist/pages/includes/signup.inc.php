<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    
    try {
    
        require_once "dbh.inc.php";
        require_once "model/signup_model.inc.php";
        require_once "controller/signup_contr.inc.php";
        
        // ERROR HANDLERS
        $errors = [];
        
        
        if (is_input_empty($username, $email, $password, $confirm_password)) {
            $errors["empty_input"] = "* Fill in all fields!";
       
        }
        
        else {
            if(is_username_length($username)){
                $errors["username_length"] = "* Username must be at least 6 characters!";
            }
            if(is_password_length($password)){
                $errors["password_length"] = "* Password must be at least 6 characters!";
            }
            if(!is_password_match($password, $confirm_password)){
                $errors["password_match"] = "* Passwords do not match!";
            }
            if (!is_email_invalid($email)) {
                $errors["invalid_email"] = "* Invalid email used!";
            }
            if(is_username_taken($pdo, $username)){
                $errors["username_taken"] = "* Username already taken!";
            }
            if(is_email_registered($pdo, $email)){
                $errors["email_used"] = "* Email already registered!";
            }
        }
       
       
        
        require_once "config_session.inc.php";
        
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("location: ../sign-up.php");
            die();
        }
        
        create_users($pdo, $username, $email, $password);
        
        header("location: ../sign-in.php");
        
        $pdo = null;
        $stmt = null;
        
        $response = "success";
        echo $response;
        die();
       
        
               
               
    } catch (PDOException $e) {
        die("Error connecting to database: " . $e->getMessage());
    }
    
    
    
    
} else {
    header("location: ../sign-up.php");
    die();
}