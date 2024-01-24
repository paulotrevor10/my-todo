<?php

declare(strict_types=1);

function check_signup_errors() {
    if(isset($_SESSION["errors_signup"])){
        $errors = $_SESSION["errors_signup"];
        
        echo "<br>";
        
        foreach ($errors as $error) {
            echo '<span class="form-error">' . $error . '</span>'; 
            echo "<br>";
        }
        
        unset($_SESSION["errors_signup"]);
  
    }
}