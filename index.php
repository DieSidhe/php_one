<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? => не строгое равенство, string приводится к number
    var_dump((int)'012345');     // Почему 12345? => первый ноль в десятиричной системе не имеет смысла
    var_dump((float)123.0 === (int)123.0); // Почему false? => строгое равенство, разные типы
    var_dump((int)0 === (int)'hello, world'); // Почему true? => строгое равенство, заданы одинаковые типы
    ?>
//no.4
//не понял постановку вопроса
<script>
//no.5
    let a = 1;
    let b = 2;
    alert('a = '+ a +'; b = '+ b);
    a = a + b;
    b = a - b;
    a = a - b;
    alert('a = '+ a +'; b = '+ b);
</script>

</body>
</html>