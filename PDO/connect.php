<?php
    declare(strict_types=1);

    $pdo = null;

    try {
        $pdo = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '12345');
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
    
    return $pdo;
?>