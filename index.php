<?php

require_once 'db_connection.php';

$title = $_GET['title'];
$year = $_GET['year'];
$stmt = $pdo->prepare('SELECT * FROM books WHERE title LIKE :title OR release_date=:year');
$stmt->execute(['year' => $year, 'title' => '%' . $title . '%']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>          
    <h1>Otsing</h1>
    <form action="index.php" method="get">
        <input type="text" name="title" placeholder="Pealkiri" value='<?=$title;?>' style="margin: 4px">
        <br>
        <input type="text" name="year" placeholder="Aasta" value='<?=$year;?>'style="margin: 4px">'
        <br>
        <input type="submit" value="Code mad" style="margin: 4px">
    </form>
    <ul>

<?php

while ( $row = $stmt->fetch() ) {
    echo '<li><a href="./book.php?id=' . $row['id'] . '">' . $row['title'] . "</li>";
}
?>
</ul>
</body>
</html>

    


