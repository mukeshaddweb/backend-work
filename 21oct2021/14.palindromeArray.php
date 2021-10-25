<?php
    
    // 14. Read an array and check whether its elements are stored In Palindrome form or not.
    
    $arr = array(1,2,3,3,2,1);
    $brr = array(1,2,3,4,1);

    function isPalindrome($a){
        $check = 1;

        //printing array
        foreach($a as $element){
            echo $element." ";
        }

        //checking for palindrome
        for($i=0, $j=count($a)-1; $i<count($a); $i++, $j--){
            if($a[$i] != $a[$j]){
                $check = 0;
                break;
            }
        }
        if($check){
            echo "<br>Given array is a Palindrome array.<br>";
        }else{
            echo "<br>This is not a Palindrome array.<br>";
        }
    }

    isPalindrome($arr);

?>