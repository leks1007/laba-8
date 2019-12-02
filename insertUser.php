<?php

$mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$nickname = $_POST['nickname']; $date_of_b = $_POST['date_of_b']; $team_id = $_POST['team_id']; $id = $_POST['id'];

$sql = "INSERT INTO user (id, nickname, date_of_b, team_id) VALUES ('$id', '$nickname', '$date_of_b', '$team_id')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showUser.php")
?>
