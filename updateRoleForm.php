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
        include("showRole.php")    
    ?>

<form action="updateRole.php" method="post">
        <label>ID</label><input name="id" type="text"><br>
        <label>Позиція</label><input name="position" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>