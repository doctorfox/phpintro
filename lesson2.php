<?php 
//$firstname = "Giggs";
//for ($i =0; $i < 1; $i++){
//    $firstname = "Ryans";
//    $surname = "Giggsis";
//    echo $surname;
//    echo '<br />';
//}
//echo $firstname;
$surname = "Messi";
//echo '<br />';
//$anothername = "Temitope";

function nameInsideFunction($name ){
    //$name = 'Shii! it changed!';
    //$surname = $name;
    //echo $name;
    //echo '<br />';
//    global $surname;
//    echo $surname;
//    echo '<br />';
    return $name;
}
//$surname = nameInsideFunction("Shii! it changed!");
//echo $surname;
//echo '<br />';
//echo $anothername;

//function twoBottles($bottle){
//    global $bottle2;
//    return $bottle . $bottle2;
//}
//$bottle1 = "Mirinda";
//$bottle2 = "Moet";
//$bottle1 = twoBottles('Orijin');
//echo $bottle1;
$account_balance = 100;
$withdraw_amount = 1001;

//if($withdraw_amount == 0){
//    echo 'Sorry, you need to withdraw money to win!';
//} elseif($account_balance == 0){
//    echo 'Error, you need to fund your account to win in the promo';
//} elseif($account_balance == $withdraw_amount){
//    echo "You have won 1 millon in the Glo naira for kobo promo";
//} elseif($account_balance == 0){
//    echo 'Error, you need to fund your account to win in the promo';
//} else {
//    echo 'Sorry, nothing for you today';
//}

//
//if($account_balance > 0 || $withdraw_amount > 0){
//    if($withdraw_amount > 0){
//        if($account_balance == $withdraw_amount){
//            echo "You have won 1 millon in the Glo naira for kobo promo";
//        } else {
//            
//        }
//    } else {
//        
//    }
//} else {
//    
//}


$fruits = array('orange', 'pineapple', 'pawpaw', 'mango', 'cherry', 'pear', 'plum');
$i = 0;
//do{
//    echo $fruits[$i] . '<br />';
//    $i++;
//    //$i = $i=1;
//}
//while($i < 7);

while($i < 4){
    echo $fruits[$i] . '<br />';
    $i++;
    //$i = $i=1;
}


