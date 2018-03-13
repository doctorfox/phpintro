<?php 
echo "<pre>";
print_r($_POST);
echo  "</pre>";
$connection = new mysqli('localhost', 'root', 'nopassword', 'phpintro');
$allrows = "SELECT * FROM users LIMIT 2,5";
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
