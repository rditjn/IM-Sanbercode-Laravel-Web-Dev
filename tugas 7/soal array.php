<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>
<?php
    echo "<h3> Soal 1 </h3>";

    $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
    $adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");

    echo "<h3> Soal 2</h3>";

echo "Cast Stranger Things:";
echo "<br><br>";

echo "Total Kids: " . count($kids);
echo "<br>";
echo "<ol>";
foreach ($kids as $kid) {
    echo "<li>$kid</li>";
}
echo "</ol>";

echo "Total Adults: " . count($adults);
echo "<br>";
echo "<ol>";
foreach ($adults as $adult) {
    echo "<li>$adult</li>";
}
echo "</ol>";

$characters = array(
    array(
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
    ),
    array(
        "Name" => "Mike Wheeler",
        "Age" => 12,
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"
    ),
    array(
        "Name" => "Jim Hopper",
        "Age" => 43,
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"
    ),
    array(
        "Name" => "Eleven",
        "Age" => 12,
        "Aliases" => "El",
        "Status" => "Alive"
    )
);

echo "<pre>";
print_r($characters);
echo "</pre>";
?>
?>
