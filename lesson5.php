<?php
error_reporting(E_ALL);
//error_reporting(E_ERROR);
//fopen('c:\windows\test');
//define('DAY', 24 * 60 * 60);
//echo DAY . '<BR />';
//echo DAY * 5;
//WARNINGS
//NOTICES
//FATAL ERRORS

//phpinfo();

//try{
//    fsockopen('scp://example.com', 80);
//} catch (Exception $ex) {
//    echo "You canot open this socket on port 80";
//    error_log($ex->getMessage() . " in " . $ex->getFile() . " on line " . $ex->getLine());
//}
//
//function customError($errno, $errstr){
//    echo "<b>Error:</b> [$errno] $errstr<br />";
//    echo "Exiting Script";
//    die();
//}
//
//set_error_handler("customError");
//
//$test = 1;
//
//if($test > 3){
//    trigger_error("Value must be 3 or below", E_USER_ERROR);
//}

try{
    throw new Exception("This is an exception");
} catch (Exception $ex) {
    //echo "Error message: " . $ex->getMessage() . " in " . $ex->getFile() . " on line " . $ex->getLine();
    $error_message = date('Y-m-d H:m:s') . " Error message: " . $ex->getMessage() . " in " . $ex->getFile() . " on line " . $ex->getLine() . "\n";
    error_log($error_message, 3, dirname(__FILE__) . DIRECTORY_SEPARATOR . 'test.log');
    
}