<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 8 Q3</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }
    //sample
    $width = 4;
    $height = 2;
    $area = calculateArea($width, $height);
    ?>
    
    <div class="result">
        <h3>The area of a rectangle with a width of <?php echo $width; ?> and height of <?php echo $height; ?> is <?php echo $area; ?></h3>
    </div>
    
</body>
</html>