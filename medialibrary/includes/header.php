<?php
$types = array('video', 'audio', 'photo', 'document');
$typesicons = array('video' => 'film', 'audio' => 'music', 'photo' => 'picture', 'document' => 'file');
$page = $_GET['type'];
$page_title = '';
if(!empty($page) && in_array($page, $types)){
    switch ($page) {
        case $types[0]:
            $page_title = ucfirst($types[0]) . 's';
            break;
        case $types[1]:
            $page_title = ucfirst($types[1]) . 's';
            break;
        case $types[2]:
            $page_title = ucfirst($types[2]) . 's';
            break;
        case $types[3]:
            $page_title = ucfirst($types[3]) . 's';
            break;
        default:
            break;
    }
}
else{
    header('Location: ./index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $page_title;?></title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--Needs a closing html tag-->
    