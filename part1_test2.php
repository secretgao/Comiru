<?php

function maxCoins($coins) {
    $n = count($coins);
    if ($n == 0) return 0;
    if ($n == 1) return $coins[0];

    $dp[0] = $coins[0];
    $dp[1] = max($coins[0], $coins[1]);

    for ($i = 2; $i < $n; $i++) {
        $dp[$i] = max($dp[$i-1], $dp[$i-2] + $coins[$i]);
    }
    return $dp[$n-1];
}

$coins = [1, 2, 3, 1];
echo maxCoins($coins); //4
echo '<br>';
$nums=[10,13,23,17,29,31,23,13,64,45,23,73,45,67,23,67,44,88,31,63,73,23,9,21,34,12,45,27,83,45,26,84,12,56,12,73,67,12,79,32,23,12,65,23,66,45,63,12,76,34,23,55,46,32,46,23,87,23,59,34,75,26,67,34,75,43,65,29,66,86,34];
echo maxCoins($nums);
//1920

 
