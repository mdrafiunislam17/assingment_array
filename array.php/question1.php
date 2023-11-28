<?php

function square($num)
{
  return($num*$num);
}

$numbers=array(1,2,3,4,5);
$squared_numbers = (array_map("square",$numbers));
print_r($squared_numbers);
