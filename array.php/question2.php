
<?php
function even_numbers($even_numbers)
  {
  return($even_numbers & 2);
  }

$a1=array(1,2,3,4,5,6,7,8,9,10);
print_r(array_filter($a1,"even_numbers"));
