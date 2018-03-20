<?php
//$tasks = array();
//$tasks[] = array('completed' => false, 'title' => 'Build a Nigerian electric car', 'priority' => 10);
//$tasks[] = array('completed' => false, 'title' => 'Call the senate president', 'priority' => 15);
//$tasks[] = array('completed' => true, 'title' => 'Get a 50 million dollar investment', 'priority' => 5);
//$tasks[] = array('completed' => false, 'title' => 'Call Aliko Dangote for demo', 'priority' => 30);

$tasks = array(
    array('completed' => false, 'title' => 'Build a Nigerian electric car', 'priority' => 10),
    array('completed' => false, 'title' => 'Call the senate president', 'priority' => 15),
    array('completed' => true, 'title' => 'Get a 50 million dollar investment', 'priority' => 5),
    array('completed' => false, 'title' => 'Call Aliko Dangote for demo', 'priority' => 30)
);
//echo "<pre>";
//print_r($tasks);
//echo "</pre>";

?>
<doctype html>
    <html>
        <head>
            <title>Test Form</title>
            <style type="text/css">
                input{margin: 5px;}
                label{margin: 5px;}
                body{margin: 100px; padding: 10px; border: 1px solid #000;}
                .completed{text-decoration: line-through;}
            </style>
        </head>
        <body>
            <ul>
            <?php 
//            $testsort = array(32,11,553,42,46,91);
//            sort($testsort);
//            echo "<pre>";
//            print_r($testsort);
//            echo "</pre>";
            uasort($tasks, 'compareValues');
            
            foreach($tasks as $task){
                $completion = ($task['completed'])? "completed" : "";
                echo "<li class=\"$completion\">{$task['title']} - {$task['priority']}</li>";
            }
            
            function compareValues($task1, $task2){
                return $task2['priority'] - $task1['priority'];
            }
            
//            function bubbleSort(&$unsorted){
//                $n = count($unsorted);
//                for ($i = 0; $i < $n-1; $i++){
//                    // Last i elements are already in place   
//                    for ($j = 0; $j < $n-$i-1; $j++){
//                        if ($unsorted[$j] > $unsorted[$j+1]){
//                           swap($unsorted[$j], $unsorted[$j+1]);
//                        }
//                    }
//                }
//                return $unsorted;
//            }
//            
//            function swap(&$arr1, &$arr2){
//                $temp = $arr1;
//                $arr1 = $arr2;
//                $arr2 = $temp;
//            }
            ?>
            </ul>
        </body>
    </html>
</doctype>