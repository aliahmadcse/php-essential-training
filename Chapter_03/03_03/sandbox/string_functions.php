<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>
    <title>Strings</title>
</head>

<body>
    <?php
    $first = "The quick brown fox";
    $second = "Jumps over the lazy dog";
    $third = $first;
    $third .= " " . $second;

    echo strtolower($third) . "<br />";
    echo ucfirst($third) . "<br />";
    echo ucwords($third) . "<br />";
    echo strstr($third, "over") . "<br />";

    ?>

</body>

</html>