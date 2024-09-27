<?php
//This is an introduction course to PHP
/*
* Variabels in PHP worden aangegeven d.m.v. $nameOfVariable;
* Je moet elke zin afsluiten met een ;
*/
$myVariable = "this is a value inside the" . " $" . "myVariabel variable";

//echo is een method die gebruikt kan worden om iets op je pagina te laten zien
//in PHP kan je ook een variabel callen tussen ""s
echo "$myVariable";



echo "<br><b>If statements</b><br>";

$myRandomNumber = 5;
$condition = 6;
if ($myRandomNumber == $condition) {
    echo "$myRandomNumber = $condition";
} else {
    echo "$myRandomNumber is not $condition";
}


//loops
echo "<br><b>while</b><br>";
$i = 0;
while ($i < 5) {
    echo "$i<br>";
    $i++;
}

echo "<br><b>for</b><br>";
for ($i = 0; $i < 5; $i++) {
    echo "$i<br>";
}

echo "<br><b>array</b><br>";
$arr = ["first elem"];
array_push($arr, "second elem");
print_r($arr);
echo ("<br>" . $arr[0] . "<br>");


echo "<br><b>associative arrays</b><br>";
//een associative array is een array waarbij een element een value heeft, denk aan een fruitstuk met een waarde
$assocArr = ["apple" => 0.50, "pineapple" => 1.50, "coffee" => 5.89];
print_r($assocArr);

// searched: "get first elem of associative array php", 
// went to "https://stackoverflow.com/questions/1617157/how-to-get-the-first-item-from-an-associative-php-array"
echo "<br>" . array_key_first($assocArr) . ": price = " . $assocArr[array_key_first($assocArr)] . "<br>";


#Exercise
/*
* Maak een associatieve array waarin landen worden gekoppeld 
* aan hun hoofdsteden 
* (bijv. ['Nederland' => 'Amsterdam', 'België' => 'Brussel', 'Duitsland' => 'Berlijn']). 
* Schrijf een PHP-script dat alle landen en hun hoofdsteden weergeeft in de 
* vorm "De hoofdstad van [land] is [hoofdstad].".
*/







$arr = ['Nederland' => 'Amsterdam', 'België' => 'Brussel', 'Duitsland' => 'Berlijn'];
foreach ($arr as $country => $capital) {
    echo "De hoofdstad van $country is $capital <br>";
}






// echo "<br><b>foreach</b><br>";
// $roadTrip = ["Amsterdam", "Berlin", "Prague", "Vienna", "Budapest", "Bucharest", "Sofia"];
// foreach ($roadTrip as $city) {
//     echo "$city<br>";
// }


// echo "<br><b>foreach in associative array</b><br>";
// foreach ($assocArr as $fruit => $price) {
//     echo "$fruit's price is: $price <br>";
// }

# Exercise
//Maak een associative array


echo "<br><b>internal php functions</b><br>";
$text = "hi my name is Mischa<br>";
echo strtoUpper($text);
//   ^string toUpper

echo "<br><b>file open</b><br>";
//https://www.php.net/manual/en/function.fopen.php
$file = fopen("./randomText.txt", "r") or die("file doesnt exist");
while (! feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}

# Exercise:
// maak een string. Laat de lengte van deze string zien in je browser

#Exercise 2:
// maak een string in lowercase. 
// verander alleen de eerste letter hiervan in een hoofdletter en laat zien in je browser

#Exercise 3:
// maak een array met woorden. Elk element is een apart woord.
// zoek of er een functie bestaat waarmee je dit als een zin kan laten zien in je browser






// $myString = "myRandomStringIsSoLongOMG"; 

// echo ucfirst($myString),"<br>";

 $arr = array('Hello','World!','Beautiful','Day!');
 echo join(" ",$arr);

// echo strlen($myString),"<br>";
/*


*/