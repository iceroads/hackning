<?php


try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=hackning', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

return $pdo;