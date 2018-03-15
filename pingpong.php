<?php 
$player1 = 0;
$player2 = 0;

//To win a player must get a score of 11
//For you to win a player must be at least 2 point higher than the opponent when reaching 11 points.

$rounds = 0;
$dueces = 0;

while($player1 < 11 && $player2 < 11){
    $rounds++;
    $winner = rand(1, 2);
    if($winner == 1){
        $player1++;
    }
    else{
        $player2++;
    }
    //$player = "player" . $winner;
    //$$player++;
    if(($player1 == 11 || $player2 == 11) && (abs($player1 - $player2) < 2)){
        $player1 = 0;
        $player2 = 0;
        $rounds = 0;
        $dueces++;
    }
}

echo "**************** GAME OVER *************<BR />";
echo "Rounds played: $rounds <br />";
echo "Dueces played: $dueces <br />";
echo "Player 1 score: $player1 <br />";
echo "Player 2 score: $player2 <br />";
echo "And the WINNER is: ";
echo checkWiner($player1, $player2);

function checkWiner($p1, $p2){
    if($p1 > $p2){
        return "PLAYER 1";
    } else{
        return "PLAYER 2";
    }
}
