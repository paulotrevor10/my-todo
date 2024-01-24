<?php
    $host = 'localhost';
    $dbname = 'my-todo';
    $dbusername = 'root';
    $dbpassword = 'admin';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        die("Error connecting to database: " . $e->getMessage());
    }

