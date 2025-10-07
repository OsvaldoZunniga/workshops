<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        date_default_timezone_set('America/Costa_Rica');
        $date = date('Y-m-d H:i:s');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP using XAMPP</title>
</head>
<body>
    <p> 
        <?php echo $date ?>
    </p>
</body>
</html>