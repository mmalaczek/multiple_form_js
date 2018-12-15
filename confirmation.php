<?php

$post = $_POST;
if (!$post) {
    header('Location: index.html');
}

$color = 'silver';

?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>
<body>
<div style="background: <?php echo $color ?>">
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
            Kolor: <?php echo $post['colors'] ?>
        </div>
    <?php endif ?>
    <div>
        Czy umiesz pływać? <?php echo (isset($post['canSwim']) ? 'Tak' : 'Nie') ?>
    </div>
</div>
</body>
</html>

