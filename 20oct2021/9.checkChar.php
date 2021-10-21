<?php

    //ASCII value of uppercase alphabets – 65 to 90. ASCII value of lowercase alphabets – 97 to 122.
    //ASCII value of digits [0 – 9] ranges from [48 – 57]
    // Special Characters (32–47 / 58–64 / 91–96 / 123–126)

    $ch = $_GET['ch'];
    

    if($ch >= 'A' && $ch <= 'Z'){
        echo "It is an Uppercase character";
    }elseif($ch >= 'a' && $ch <= 'z'){
        echo "It is an Lowercase character";
    }elseif($ch >= 0 && $ch <= 9){
        echo "It is an Digit";
    }else{
        echo "It is an Special character";
    }
?>