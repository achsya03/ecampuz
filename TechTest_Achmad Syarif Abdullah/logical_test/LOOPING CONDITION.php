<?php
	for($i=1;$i<=50;$i++){
	  $text = $i;
	  if($i%3==0){
	    $text = 'Foo';
	    if($i%5==0){
  	    $text = 'FooBar';
  	  }
	  }
	  if($i%5==0){
	    $text = 'Bar';
	    if($i%3==0){
  	    $text = 'FooBar';
  	  }
	  }
	  echo $text.PHP_EOL;
	}
	
?>