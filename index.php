<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo '<h1>Hello PHP and Apache!</h1>'; ?>

    <?php 
        $is_true = true;

        if ($is_true) {
            echo "the value is true!";
        } else {
            echo "the value is false!";
        }
    ?>

</body>
</html>