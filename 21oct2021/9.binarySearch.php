<?php

 // 9. Read an array and perfume BINARY Search.

    $arr = array(5,6,7,12,18,25);
    $num = 7;

    function binarySearch($a, $element){
        //printing array
        foreach($a as $value){
            echo $value." ";
        }
	echo "number to search: ".$element."<br>";

        $check = 0;
        $min = 0;
        $max = count($a)-1;
        
        // echo $max;
        

        if($element == $a[0]){
            echo "<br>element was found at position : 1<br>";
            $check = 1;
            
        }elseif($element == $a[count($a)-1]){
            echo "<br>element was found at position : ".(count($a));
            $check = 1;
            
            
        }else{
            while($min != $max){
                $mid = floor(($min+$max)/2);
                if($element == $a[$mid]){
                    echo "<br>element was found at position : ".($mid + 1);
                    $check = 1;
                    break;
                }elseif($element<$a[$mid]){
                    $max = $mid;
                }else{
                    $min = $mid;
                }
            }
        }

        if($check == 0){
            echo "<br>Could not find the element.";
        }

    }
    binarySearch($arr, $num);


?>
