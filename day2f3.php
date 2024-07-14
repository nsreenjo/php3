<?php

$name="nsreen naeen joundya";

$uppercase=strtoupper($name);

echo $uppercase;
////////////////////////////////////////
echo "<hr>";

$name="nsreen naeen joundya";

$lowercase=strtolower($name);

echo $lowercase;
///////////////////////////////////////
echo "<hr>";
$name = "nsreen naeen joundya";

$capitalized = ucfirst($name);

echo $capitalized;
///////////////////////////////////////
echo "<hr>";
$name = "nsreen naeen joundya";

$capitalizedWords = ucwords($name);

echo $capitalizedWords;
///////////////////////////////////////
echo "<hr>";
$numer = '085119';
$timeArray = str_split($numer, 2);
$timeFormat = implode(':', $timeArray);

echo $numer . "\n" . "=>"; 
echo $timeFormat . "\n"; 
///////////////////////////////////////
echo "<hr>";

$w = "I am a full stack developer at orange coding academy";
$e = "full";

if (strpos($w, $e) !== false) {
    echo "$e found";
} else {
    echo "$e no found";
}
///////////////////////////////////////
echo "<hr>";
$url = 'www.orange.com/index.php';

$fileName = basename($url,".php");

echo  $url; echo "<hr>";
echo  $fileName;
///////////////////////////////////////
echo "<hr>";

function generateRandomPassword($input_string, $password_length) {
    $shuffled_string = str_shuffle($input_string);
    $password = substr($shuffled_string, 0, $password_length);
    return $password;
}

$input_string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/*-%^&*@";
$password_length = 10; 
$password = generateRandomPassword($input_string, $password_length);
echo "Random Password: " . $password;
///////////////////////////////////////
echo "<hr>";


$a = 'That new trainee is so genius';
$replace = str_ireplace('that', 'the', $a);

echo $replace;
///////////////////////////////////////
echo "<hr>";

$string = "nsreen, naeem, joundya.";
$array = explode(", ", $string);
var_dump($array);
///////////////////////////////////////
echo "<hr>";


$char = 'a';
$char1 = 'z';

$nextChar1 = chr(ord($char) + 1);
$nextChar2 = chr(ord($char1) + 1); 

echo $char . "\n"; 
echo $nextChar1 . "\n";
echo $char1 . "\n"; 
echo $nextChar2 . "\n"; 
///////////////////////////////////////
echo "<hr>";
$text1 = 'The brown fox';
$text2 = 'quick';
$new_string = substr_replace($text1, $text2 . ' ', 4, 0);
echo $new_string . "\n";
///////////////////////////////////////
echo "<hr>";

$num = '0000657022.24';
$deletnum0 = ltrim($num, '0');
echo $deletnum0;
///////////////////////////////////////
echo "<hr>";


$text1 = 'The quick brown fox jumps over the lazy dog';
$text_to_remove = 'fox';


$new_string = str_replace($text_to_remove, '', $text1);


echo $new_string. "\n";
//////////////////////////////////////
echo "<hr>";


$textt = 'The quick brown fox jumps over the lazy dog---';
$newtext = rtrim($textt, '-');

echo $newtext; 



//////////////////////////////
echo "<hr>";

$number1 = '\"\1+2/3*2:2-3/4*3';

$cleannumber1= preg_replace('/[^0-9 ]/', '', $number1);


echo $cleannumber1;

//////////////////////////////
echo "<hr>";

$string = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $string);

$first_five_words = implode(' ', array_slice($words, 0, 5));

echo $first_five_words;

//////////////////////////////
echo "<hr>";
for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . ' ';
}

echo "\n";








 




























?>



