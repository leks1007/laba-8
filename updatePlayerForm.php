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
        include("showPlayer.php")    
    ?>

<form action="updatePlayer.php" method="post">
        <label>ID групи, яку змінюємо</label><input name="id" type="text"><br>
        <label>Прізвище</label><input name="lastname" type="text"><br>
        <label>ID позиції</label><input name="role_id" type="text"><br>
        <label>Рейтинг</label><input name="rating" type="text"><br>
        <label>ID команди</label><input name="team_id" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>