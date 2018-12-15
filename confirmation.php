<?php

$post = $_POST;

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
    <div>
        Czy umiesz pływać? <?php echo (isset($post['canSwim']) ? 'Tak' : 'Nie') ?>
    </div>
</div>
</body>
</html>

