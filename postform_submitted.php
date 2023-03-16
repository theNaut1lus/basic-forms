<?php
echo "welcome";
$name = $_POST["name"];
$movie = $_POST["movie"];
$degree = $_POST["degree"];
$gender = $_POST["gender"];
$subjects = $_POST["subjects"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Hello <?php echo $name; ?> <br>
        Movie: <?php echo $movie; ?> <br>
        Degree: <?php echo $degree; ?> <br>
        Gender: <?php echo $gender; ?> <br>
        Subject: <?php echo $subjects; ?> <br>
    </p>
</body>
</html>