
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Arrays</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<p>The days of the week in English are:</p>";

    echo "<p>";
    foreach ($days as $day) {
        echo $day . " ";
    }
    echo "</p>";
   
$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

echo "<p>The days of the week in French are:</p>";

echo "<p>";
foreach ($days as $day) {
    echo $day . " ";
}
echo "</p>";
?>
</body>
</html>
