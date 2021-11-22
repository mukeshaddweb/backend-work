<?php
    function adder($str){
        $str =  $str." welcome";
        return $str;
    }

    $str = 'vinit';
    echo adder($str);
    echo "<br>";
    echo $str;
?>