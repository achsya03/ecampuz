<?php
	function divider($num1,$num2){
	  $result = 0;
	  if($num1 < 0){
	    $num1 = -$num1;
	  }
	  if($num2 < 0){
	    $num2 = -$num2;
	  }
	  $num = $num1;
	  while($num1>=$num2){
	    $num1 -= $num2;
	    $result += 1;
	  }
	  return $result;
	}
	
	echo divider(8,2);
	
?>