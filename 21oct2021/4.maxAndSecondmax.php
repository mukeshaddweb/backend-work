<?php

    // 4. Read an array and find our max and second max.

    $arr = array(76,21,5,6,23,4);
    function maxNsecondmax($a){
        $max = $a[0];
        $secondmax = $a[0];
        for($i = 0; $i < count($a); $i++){
            if($max<$a[$i]){
                $secondmax = $max;
                $max = $a[$i];
            }
        }
	
	if($max != $a[0]){
        	print_r($a);
        	echo "<br><br>Max is ${max}.<br>Second max is ${secondmax}.";
    	}else{
		for($i =1; $i<count($a); $i++){
			$secmax = $a[1];
			if($secmax<$a[$i]){
                	$secondmax = $max;
                	$secondmax = $a[$i];
            		}		
		}
		print_r($a);
        	echo "<br><br>Max is ${max}.<br>Second max is ${secondmax}.";	
	}
    }

    maxNsecondmax($arr);
?>
