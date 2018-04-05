<?php
$typedtext = '';
$filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'savedtext.rtf';

//print_r($_POST);exit;

// Check if a form has been posted and save the post data into a file.
if(!empty($_POST['typedtext'])){
    $typedtext = $_POST['typedtext'];
    file_put_contents($filename, $typedtext);
} else {
    if(file_exists($filename)){
        $typedtext = file_get_contents($filename);
    }
}

if(!empty($_POST['download'])){
    if(file_exists($filename)){
        $typedtext = file_get_contents($filename);
        header('Content-Description: File Transfer');
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename="savedtext.rtf"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: private');
        header('Content-length', strlen($typedtext));
        readfile($filename);
        exit;
    }
}

?>
<html>
    <head>
        <title>Word Processor</title>
        <style type="text/css">
            input{margin: 5px;}
            label{margin: 5px;}
            body{margin: 100px; padding: 10px; border: 1px solid #000;}
        </style>
        <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({ selector: 'textarea'});
        </script>
    </head>
    <body>
        <form method="post" action="">
            <textarea cols="80" rows="10" name="typedtext"><?php echo $typedtext;?></textarea>
            <br />
            <input type="submit" name="save" value="Save" />
            <input type="submit" name="download" value="Download" />
        </form>
    </body>
</html>