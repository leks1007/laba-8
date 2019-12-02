<?php

$mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$lastname = $_POST['lastname']; $role_id = $_POST['role_id']; $rating = $_POST['rating']; $team_id = $_POST['team_id'];

$sql = "INSERT INTO player (id, lastname, role_id, rating, team_id) VALUES ('', '$lastname', '$role_id', '$rating', '$team_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showPlayer.php")
?>
