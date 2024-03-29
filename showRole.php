<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Role</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Role</h1>

    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'rubchyk');
    $mysqli->set_charset("utf8");
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    if($result = $mysqli->query('SELECT * FROM role')) {

        printf("Список фото: <br><br>");
        printf("<table><th>ID</th><th>Позиція</th></tr>"); 
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['position']); 
        };
        printf("</table>");
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
		<li><a href="insertRoleForm.php">Вставити рядок</a><br></li>
		<li><a href="updateRoleForm.php">Редагувати рядок</a><br></li>
        <li><a href="deleteRoleForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
