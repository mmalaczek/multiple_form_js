<?php

$post = $_POST;
if (!$post) {
    header('Location: index.html');
}

const _MAN = 'Mężczyzna';
const _WOMAN = 'Kobieta';

$color = '#fff';

switch ($post['gender']) {
    case _MAN:
        $color = (isset($post['canSwim']) ? 'green' : 'blue');
        break;
    case _WOMAN:
        $color = (isset($post['canSwim']) ? 'white' : 'yellow');
        break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background: <?php echo $color ?>">
<div id="wrapper">
    <div>
        Imię: <?php echo $post['name'] ?>
    </div>
    <div>
        Płeć: <?php echo $post['gender'] ?>
    </div>
    <?php if (isset($post['age'])): ?>
        <div>
            Wiek: <?php echo $post['age'] ?>
        </div>
    <?php endif ?>
    <?php if (isset($post['colors'])): ?>
        <div>
            Kolor: <?php echo implode(",", $post['colors']) ?>
        </div>
    <?php endif ?>
    <div>
        Czy umiesz pływać? <?php echo (isset($post['canSwim']) ? 'Tak' : 'Nie') ?>
    </div>
    <div>
        <a href="index.html">Powrót</a>
    </div>
</div>
</body>
</html>

