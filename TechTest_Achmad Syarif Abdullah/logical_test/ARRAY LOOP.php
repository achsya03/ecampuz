<?php
  $aplikasi[1] = 'gtAkademik';
  $aplikasi[2] = 'gtFinansi';
  $aplikasi[3] = 'gtPerizinan';
  $aplikasi[4] = 'eCampuz';
  $aplikasi[5] = 'eOviz';
  
  
  $counter = 1;
  
  while($counter<=count($aplikasi)){
    echo $aplikasi[$counter].PHP_EOL;
    $counter +=1;
  }
?>