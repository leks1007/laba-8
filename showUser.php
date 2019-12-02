<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця User</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM user')) {

        printf("Список адрес: <br><br>");
        printf("<table><tr><th>ID</th><th>Нік</th><th>День народження</th><th>ID команди</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['nickname'], $row['date_of_b'], $row['team_id']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showZvit.php">Звіт</a></li>
		<li><a href="insertUserForm.php">Вставити рядок</a><br></li>
		<li><a href="updateUserForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteUserForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
