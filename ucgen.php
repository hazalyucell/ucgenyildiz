<?php
	$n=10;
    for($i=1 ; $i<=$n ; $i++){

<?php

  for($a=1; $a<=10; $a++) {
      for($b=1; $b<=$a; $b++) {
          print "*";	
      }
      print "<br>";
  }
  for($a<10; $a>=1; $a--) {
      for($b=1; $b<$a; $b++) {
          print "*";	
      }
      print "<br>";
  }
?>