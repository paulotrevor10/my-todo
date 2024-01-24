<?php

declare(strict_types=1);

function is_input_empty(string $username, string $email, string $password, string $confirm_password) {
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        return true;
    } else {
        return false;
    }

}

function is_email_invalid(string $email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }

}

function is_username_taken(object $pdo, string $username) {
    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }

}

function is_email_registered(object $pdo, string $email) {
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }

}

function is_password_match(string $password, string $confirm_password) {
    if($password === $confirm_password){
        return true;
    }else {
        return false;
    }
}

function is_password_length(string $password) {
    if(strlen($password) < 6){
        return true;
    }else {
        return false;
    }
}

function is_username_length(string $username) {
    if(strlen($username) < 6){
        return true; 
    }else {
        return false;
    }
}


function create_users(object $pdo, string $username, string $email, string $password) {
    insert_users($pdo, $username, $email, $password);
}