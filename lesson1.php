<?php 
echo "<pre>";
//$users = "try me";
//echo $users;
//print_r($_POST);
$names = array(1,2,3,4,5,6,7,8,9,10);
//$number1 = 1;
//$number2 = 2;
//$number3 = 3;
//$sum = $number1 . $number2 . $number3;
//print_r($sum);
//$names[] = "Princess";
//print_r($names);
//echo $names[10];
//$number = array(1,2,3,4,5);
//$number[] = 6;
//array_unshift($number, 0);
//$firstitem = array_shift($number);
//$firstitem = array_shift($number);
//print_r($number);
//echo $firstitem;
//$assoc1 = array(
//    'firstname' => 'Joshua', 
//    'surname' => 'Edigbe', 
//    'Surname' => 'Adigbe', 
//    'firstname' => 'Meeeee...',
//    'Kunle',
//    'Standard1',
//    'color' => 'red',
//    'Tope',
//    42212,
//    'Motrhe',
//    18
//    );
//print_r($assoc1);
//
//$concatenated_array = implode("'s father; ", $assoc1);
//print_r($concatenated_array);
//
//$recovered_array = explode("father; ", $concatenated_array);
//print_r($recovered_array);


echo  "</pre>";
//exit;
$connection = new mysqli('localhost', 'root', 'nopassword', 'phpintro');
//$connection = mysqli_connect('localhost', 'root', 'nopassword', 'phpintro');
$allrows = "SELECT id,firstname, surname FROM users LIMIT 0,3";
$users = mysqli_query($connection, $allrows);

//$users = $connection->query($allrows);
foreach ($users as $user) {
    echo $user['firstname'] . " " . $user['surname'];
    echo "{$user['firstname']} {$user['surname']}";
    echo '<br />';
}

?>
<doctype html>
    <html>
        <head>
            <title>Test Form</title>
            <style type="text/css">
                input{margin: 5px;}
                label{margin: 5px;}
            </style>
        </head>
        <body style="margin: 100px; padding: 10px; border: 1px solid #000;">
            <h1>Personal Information Form</h1>
            <form enctype="multipart/form-data" action="" method="post">
                <label for="firstname">First name</label>
                <input type="text" maxlength="15" name="firstname" id="firstname" />
                <br />
                
                <label for="surname">Surname</label>
                <input type="text" maxlength="15" name="surname" id="surname" />
                <br />
                
                <label for="gender">Gender</label>
                <input type="radio" value="male" name="gender" />Male
                <input type="radio" value="female" name="gender" />Female
                <br />
                
                <label for="gender">Phone Number</label>
                <input type="text" maxlength="15" name="phonenumber" id="phonenumber" />
                <br />
                
                <input type="submit" value="Save" />
            </form>
        </body>
    </html>
</doctype>
