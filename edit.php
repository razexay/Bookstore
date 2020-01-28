<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="edit.css">
    <title>Edit</title>
</head>
<body id="textplacement">
    <div align="center" id="divstyle">
        <p>Sisesta andmed</p>
            <form action="index.php" method="get">
                <input id="sisestus" type="text" name="title" placeholder="Sisesta pealkiri" value='<?=$title;?>'>
                <br>
                <input id="sisestus" type="text" name="title" placeholder="Sisesta autor" value='<?=$title;?>'>
                <br>
                <input id="sisestus" type="submit" value="Salvesta">
            </form>
    </div>
</body>
</html>