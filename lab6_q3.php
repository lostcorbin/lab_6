
<!DOCTYPE html>
<html>
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<h2>Calculate Rectangle Area</h2>

<form method="post">
    Enter Width:
    <input type="number" name="width" required>
    <br><br>

    Enter Height:
    <input type="number" name="height" required>
    <br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php

function calculateArea($width, $height) {
    $area = $width * $height;
    return $area;
}

if (isset($_POST['calculate'])) {

    $width = $_POST['width'];
    $height = $_POST['height'];

    $result = calculateArea($width, $height);

    echo "<h3>The area of a rectangle with a width of "
         . $width . " and " . $height . " is " . $result . "</h3>";
}

?>

</body>
</html>
