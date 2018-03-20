<?php
//$gears = array('N', 1, 2, 3, 4, 'R');
//$speeds = array('N' => 0, '2' => 60, '3' => 80, '4' => 120, 'R' => 60, '1' => 20);
//$player1speed = 0;
//
////Assign a speed to player1speed for each gear available.
//
//$randomgear = rand(0, 5);
//if($gears[$randomgear] == 'N'){
//    $player1speed = 0;
//} elseif($gears[$randomgear] == '1'){
//    $player1speed = 20;
//} elseif($gears[$randomgear] == '2'){
//    $player1speed = 60;
//} elseif($gears[$randomgear] == '3'){
//    $player1speed = 80;
//} elseif($gears[$randomgear] == '4'){
//    $player1speed = 120;
//} elseif($gears[$randomgear] == 'R'){
//    $player1speed = 60;
//}

//switch ($gears[$randomgear]){
//    case 'N':
//        $player1speed = $speeds[$gears[$randomgear]];
//        break;
//    case 1:
//        $player1speed = $speeds[$gears[$randomgear]];
//        break;
//    case 2:
//        $player1speed = $speeds[$gears[$randomgear]];
//        break;
//    case 3:
//        $player1speed = $speeds[$gears[$randomgear]];
//        break;
//    case 4:
//        $player1speed = $speeds[$gears[$randomgear]];
//        break;
//    case 5:
//        $player1speed = $speeds[$gears[$randomgear]];
//        break;      
//}

//$player1speed = $speeds[$gears[$randomgear]];
//
//echo "Gear: {$gears[$randomgear]}<br />";
//echo "Speed: $player1speed";

//for($i = 0; $i < 10; $i++){
//    
//    echo " $i ";
//    continue;
//    echo " Done";
//    echo "<br />";
//}

$guns = array('ballers', 'AK47', 'uzi', 'baretta', 'M16', 'AR15');

foreach ($guns as $gun){
    $shots = rand(3, 10);
    echo "My $gun fired $shots shots<br />";
    
}