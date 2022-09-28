<?php
echo "<table bgcolor='yellowgreen' border='1' bordercolor='black' cellpadding='10'> <tr>";
for ($i=0; $i <= 9; $i++){
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

echo "<table bgcolor='yellowgreen' border='1' bordercolor='black' cellpadding='10'> <tr>";
for ($i=0; $i <= 10; $i++){
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

echo "<table bgcolor='yellowgreen' border='1' bordercolor='black' cellpadding='10'> <tr>";
for ($i=1; $i <= 10; $i++){
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

echo "<table bgcolor='yellowgreen' border='1' bordercolor='black' cellpadding='10'> <tr>";
for ($i=10; $i >= 0; $i--){
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

echo "<table bgcolor='yellowgreen' border='1' bordercolor='black' cellpadding='10'> <tr>";
for ($i=25; $i <= 50; $i=$i+5){
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

echo "<table bgcolor='yellowgreen' border='1' bordercolor='black' cellpadding='10'> <tr>";
for ($i=10; $i >= -10; $i=$i-3){
    echo "<td>" . $i . "</td>";
}
echo "</tr></table>";

$name = 'Darth Vader';
if ($name === 'Darth Vader' || $name === 'Darth Sidious') {
    echo "Sith";
}
elseif ($name === 'Yoda') {
    echo "Jedi";
}
else {
    echo "Probably a powerless person";
}


$jedis = [
'Obi-Wan Kenobi', 
'Yoda', 
'Luke Skywalker', 
'Windu', 
'Qui-gon Jinn',
];
$jedis[] = "Rey";

foreach ($jedis as $jedi){
    echo $jedi . " ";
}

$jedis2 = [
    "Yoda"=>"900", 
    "Leia"=>"19", 
    "Luke Skywalker"=>"19",
    "Darth Vader"=>"46", 
    "Chewbacca"=>"200",
    
];

$jedis2["Han Solo"] ="29";

asort($jedis2);
//var_dump($jedis2);
echo "<ul>";
foreach ($jedis2 as $jedi => $age){
    
    echo "<li>" . $jedi . ": ". $age . "</li>";
}
echo "</ul>";


ksort($jedis2);
echo "<ul>";
foreach ($jedis2 as $jedi => $age){
    
    echo "<li>" . $jedi . ": ". $age . "</li>";
}
echo "</ul>";

echo "<ul>";
foreach ($jedis2 as $jedi => $age){
    if ($age > 100){
    echo "<li>" . $jedi . ": ". $age . "</li>";
}
}
echo "</ul>";

$jedis3 = [
	'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
	'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
	'Gungan' => ['Jar Jar Binks'],
	'Human' => ['Han Solo', 'Leia'],
];


foreach ($jedis3 as $race => $name) {
    echo "<br><br><h2> The race '$race', we have : </h2><ul>";
    foreach ($name as $key){
        echo '<li>' . $key . '</li>'; 
}
echo "</ul>";
}


// foreach ($jedis3 as $race => $name) {
//     echo "<br><br><h2> The race '$race', we have : </h2><ul>";
//     foreach ($jedis3[$race] as $key => $name){
//         echo '<li>' . $name . '</li>'; 
// }
// echo "</ul>";
// }