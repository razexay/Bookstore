<?php

require_once 'db_connection.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM books b LEFT JOIN book_authors ba ON book_id = b.id LEFT JOIN authors a ON author_id = a.id WHERE b.id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <title><?= $book['title']; ?></title>
</head>
<body>
    <h1><?= $book['title']; ?></h1>
    <img src="<?= $book['cover_path']; ?>" alt="" class="center"> 
    <button id="back" onclick="history.back()"> ⫷ </button> 
    <div class="flex-container">
        <div> <?= $book['release_date']; ?></div>
        <p>KEEL: <?= $book['language']; ?></p>
        <p>LEHEKÜLJED: <?= $book['pages']; ?></p>
        <p>HIND: <?= round($book['price'], 2); ?>€</p>
        <p>SAADAVUS: <?= $book['stock_saldo']; ?></p>
        <p>OLEK: <?= $book['type']; ?></p>
        <p>AUTOR: <?= $book['first_name']; ?> <?= $book['last_name']; ?></p>
    </div>
        <div class="summary">KIRJELDUS: <?= $book['summary']; ?></div>
    
</body>
</html>

