<?php

for ($i = 0; $i <= 1000; $i += 5) {

    if ($i > 200 && $i < 800) continue; // Com apenas uma instrução o IF
                                        // não precisa de {}
    
    if ($i == 900) break;

    echo $i . "<br>";

}

?>
