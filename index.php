<?php
$title = "Моя учебная страница";
$student = "Студент";
$topics = array("HTML", "CSS", "PHP");
$completed = 2;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <p>Лабораторная работа по PHP</p>
    </header>

    <main>
        <h2>О странице</h2>
        <p>Эту страницу сделал <?php echo $student; ?> для изучения основ PHP.</p>
        <p>Здесь часть HTML-кода выводится с помощью PHP.</p>

        <h2>Темы, которые мы изучаем</h2>
        <table>
            <tr>
                <th>№</th>
                <th>Тема</th>
            </tr>
            <?php
            $number = 1;
            foreach ($topics as $topic) {
                echo "<tr><td>$number</td><td>$topic</td></tr>\n";
                $number = $number + 1;
            }
            ?>
        </table>

        <p>Всего тем: <?php echo count($topics); ?></p>

        <h2>Результат</h2>
        <?php
        if ($completed >= count($topics)) {
            echo "<p>Все темы изучены.</p>\n";
        } else {
            echo "<p></p>\n";
        }
        ?>

        <p>Первая картинка:</p>
        <img src="pic1.png" alt="Картинка 1">

        <p>Вторая картинка:</p>
        <img src="pic2.png" alt="Картинка 2">
    </main>

    <footer>
        <p>Учебный сайт. Основы веб-технологий.</p>
    </footer>
</body>
</html>
