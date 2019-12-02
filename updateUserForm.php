<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showUser.php")    
    ?>

<form action="updateUser.php" method="post">
        <label>ID, яке змінюємо</label><input name="id" type="text"><br>
        <label>Нік</label><input name="nickname" type="text"><br>
        <label>День народження</label><input name="date_of_b" type="text"><br>
        <label>ID команди</label><input name="team_id" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>