<?php

require_once 'db_connection.php';

$title = $_GET['title'];
$year = $_GET['year'];
$stmt = $pdo->prepare('SELECT * FROM books WHERE title LIKE :title OR release_date=:year');
$stmt->execute(['year' => $year, 'title' => '%' . $title . '%']);

?>
<?php  include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index_style.css">
    <title>Document</title>
</head>
<body style="background-color:#ffa64d;">     
    <h1>Otsing</h1>
    <form action="index.php" method="get">
        <input type="text" name="title" placeholder="Pealkiri" style="border-radius: 5px; margin: 4px; border: none; padding: 4px;" value='<?=$title;?>'>
        <br>
        <input type="text" name="year" placeholder="Aasta" style="border-radius: 5px; margin: 4px; border: none; padding: 4px;" value='<?=$year;?>'>
        <br>
        <input type="submit" value="Code mad" style="padding: 5px; font-size: 15px; color: white; background: #4d2600; border: none; border-radius: 5px; margin-left: 5px; margin: 4px;">
    </form>
    <ul style="color: #4d2600; font-size: 25px;">

<?php

while ( $row = $stmt->fetch() ) {
    echo '<li><a href="./book.php?id=' . $row['id'] . '">' . $row['title'] . "</li>";
}
?>
</ul>
</body>
</html>

    


