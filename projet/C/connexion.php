<?php


try {
    $conn = new PDO('mysql:host=localhost;dbname=robotshop', 'root', '');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>