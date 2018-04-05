<?php
//define("MINUTE", 60);
//define("HOUR", 3600);
//define("DAY", 86400);
//
//
//
//function secondsInMonth($monthnumber){
//    $months = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
//    return $months[$monthnumber] * DAY;
//}
////$numberofseconds = secondsInMonth(9);
////echo number_format($numberofseconds);
//
//function secondsInMonth2($monthname){
//    $months = array(
//        'january' => 31, 'february' => 28, 'march' => 31, 
//        'april' => 30, 'may' => 31, 'june' => 30, 
//        'july' => 31, 'august' => 31, 'september' => 30, 
//        'october' => 31, 'november' => 30, 'december' => 31);
//    
//    return DAY * $months[strtolower($monthname)];
//}
//
//echo "Number of seconds in March: ". secondsInMonth2('March');

//
//
//function hello($name, $friend = 'the Joker'){
//    echo "Hello $name, it's your friend $friend.<br />";
//    return ;
//    echo 'The world is mine! MWAHAHAHAHAH....';
//}
//$name2 = 'Kunle';
//hello($name);
//$name = 'Nebechi';

//
//function hello($name){
//    if($name == 'Nebechi'){
//        return "Hello $name!";
//    }
//    return "Hello Stranger!";
//}
//
//echo hello('Princess');
////$greeting = hello();
////echo $greeting;

//function sum($a, $b){
//    $arr = array(
//        $a,
//        $b,
//        $a + $b
//    );
//    return $arr;
//}
//
//$res = sum(8, 2);
//echo $res[0];

//$helpme = "What does 
//this mean? in_array() returns a boolean value, TRUE on success (if the needle was found in the haystack) or FALSE on failure";
//
//echo strlen($helpme);

$phrase = "We only hit what we aim for";

//echo strlen($phrase);

//echo substr($phrase, -3);

//$search = strpos($phrase, 'boy');
//var_dump($search);
echo substr($phrase, 0, round(strlen($phrase) /2));