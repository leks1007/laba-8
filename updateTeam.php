<?php

$mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$name = $_POST['name']; $emblem = $_POST['emblem']; $id = $_POST['id'];

$sql = "UPDATE team SET name='$name', emblem='$emblem' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showTeam.php")
?>
