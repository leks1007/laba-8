<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT p.lastname, p.rating, r.position, t.name, t.emblem FROM player AS p INNER JOIN role AS r ON (p.role_id=r.id) INNER JOIN team AS t ON (p.team_id=t.id)')) {

        printf("Список: <br><br>");
        printf("<table><th>Логін</th><th>Пароль</th><th>Нік</th><th>Дата народження</th><th>Команда</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 

            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['lastname'], $row['rating'], $row['position'], $row['name'], $row['emblem']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
