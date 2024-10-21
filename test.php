<?php

try {
    $db = new PDO('mysql:dbname=CuisineA;host=localhost', 'root', '');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
