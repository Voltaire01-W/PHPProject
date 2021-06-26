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

        $my_string_variable = "The quick brown fox jumps over the lazy dog.";

        $name = "Connor";

        $height = "6-0";
        
        echo $name . " is approximately " . $height . " feet tall ";

        $my_age = 21;

        $another_age = rand(1, 999999);

        $square_root = sqrt(100);

        echo $my_age - $another_age;
        echo pi();
    ?>

</body>
</html>