<?php
    $text1 = "<h1> I Love PHP";
    $text2 = "<h1> My Team is The best </h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo "Team BackEnd"; ?></title>
</head>
<body>
    <div id="app">
    <?php
        // pass multi "" in Php Code
        echo "<h2 class=\"heading\"> PHP From Html </h2>",
        // use ''
        "<h2 class='heading'> PHP From Html </h2>",
        // use Concatenation
        "<h2 class=" . "heading" ."> PHP From Html </h2>",
        // use Tag In love and honor, the engineer, Amr Gamal, the team leader
        "<h2> Welcome Eng.Amr Gamal </h2>",
        $text1, $text2;
        $text1 = $text1 . ' 5 <h1/>';
        echo $text1, $text2;
    ?>
    </div>
</body>
</html>