<?php

$mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
$mysqli->set_charset("utf8");

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$lastname = $_POST['lastname']; $role_id = $_POST['role_id']; $rating = $_POST['rating']; $team_id = $_POST['team_id']; $id = $_POST['id'];

$sql = "UPDATE player SET lastname='$lastname', role_id='$role_id', rating='$rating', team_id='$team_id' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


$mysqli->close();

include("showPlayer.php")
?>
