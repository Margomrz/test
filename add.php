<?php
    $N = $_POST['task1'];
    if ($N > 10){
        $N = $N + 100;
    }
    else{
        $N = $N - 30;
    }
    echo $N;
?>