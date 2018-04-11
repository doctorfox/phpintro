<?php 
echo "<pre>";

$names = array(1,2,3,4,5,6,7,8,9,10);
$first = ')';

$users = array(
    array('firstname' => 'Olabanjo', 'surname' => 'Latino'),
    array('firstname' => 'Kunle', 'surname' => 'Ogbonna'),
    array('firstname' => 'Nuru', 'surname' => 'Ribadu'),
    array('firstname' => 'Obinna', 'surname' => 'Nwachuku'),
    );
$user1 = 'hey';

foreach ($users as $user) {
    echo "{$user['firstname']} {$user['surname']}";
    //echo $user['firstname'] . ' ' . $user['surname'];
    echo '<br />';
}

echo  "</pre>";
?>
<!doctype html>
    <html lang="en">
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