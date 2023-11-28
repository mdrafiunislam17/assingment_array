## Assingment_Array

 That’s it! Now open your web browser and point to:
 
![a](https://github.com/mdrafiunislam17/assingment_array/assets/95011589/aa80bd98-c490-4c14-bb13-b392f0a92622)



view Side:http://localhost/exm/array.php/

## Screenshots

![b](https://github.com/mdrafiunislam17/assingment_array/assets/95011589/b9a7ca16-c82a-4e13-a486-723b517f2f91)

view code:

```php
<?php

function square($num)
{
  return($num*$num);
}

$numbers=array(1,2,3,4,5);
$squared_numbers = (array_map("square",$numbers));
print_r($squared_numbers);

```



![c](https://github.com/mdrafiunislam17/assingment_array/assets/95011589/ddf5dbf5-62e5-4e87-b511-b452a8ff1580)

view code:
```php
<?php
function even_numbers($even_numbers)
  {
  return($even_numbers & 2);
  }

$a1=array(1,2,3,4,5,6,7,8,9,10);
print_r(array_filter($a1,"even_numbers"));

```


![d](https://github.com/mdrafiunislam17/assingment_array/assets/95011589/9ee5a4f3-f847-46f3-80fe-bd6b7a396e41)

view code:
```php
$people = array("red", "green", "blue", "purple");

if (in_array("Yellow", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }

```
