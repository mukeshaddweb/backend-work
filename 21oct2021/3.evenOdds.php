<?php
    
    // 3. Read an array and count total no. of even and odd eliments.
    
    $arr = array(10,11,12,13,342,21,456,324);

    function evenOdds($a){
        $evencount = 0;
        $oddcount = 0;
        for($i = 0; $i < count($a); $i++){
            if($a[$i]%2 == 0){
                $evencount++;
            }else{
                $oddcount++;
            }
        }
        //printing array
        foreach($a as $element){
            echo $element." ";
        }
        echo "<br>";
        echo "<br><br>There are ${evencount} even numbers and ${oddcount} odd numbers in the array.";
        
    }

    evenOdds($arr);
?>