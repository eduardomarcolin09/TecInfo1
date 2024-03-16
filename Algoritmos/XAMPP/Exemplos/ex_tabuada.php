<?php
    // While / For / Do While / Foreach

    //for($i = 1 ; $i <= 10 ; $i++ ){
    //   echo '<p>6 x ' . $i . ' = ' . $i*6 . '</p>';
    //}
    
    echo ('<h1>Tabuada</h1>');
    for($n = 1; $n <= 10; $n = $n +2){
        for($m = 1 ; $m <= 10 ; $m++){
            echo '<p>' . $n . ' x ' . $m . ' = ' . $n * $m . '</p>'; 
        }
        if($n != 10){
            echo '<hr>';
        }
    } 