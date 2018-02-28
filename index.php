<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Домашнее задание к лекции 1.2 «Основы PHP»</title>
</head>
<body>
    <?php
    $x = rand(0,100);
    echo '<h1>Число: ' . $x . '</h1>';
    $n1 = 1;
    $n2 = 1;
    echo '<ul>';
    while (true)
    {
        if ($n1 > $x) {
            echo '<p>Задуманное число не входит в числовой ряд</p>';
            break;
        }
        if ($n1 === $x) {
            echo '<p>Задуманное число входит в числовой ряд</p>';
            break;
        }
        $n3 = $n1;
        $n1 = $n1 + $n2;
        $n2 = $n3;
        echo '<li>' . $n1 . '</li>';
    }
    echo '</ul>';
    ?>
</body>
</html>