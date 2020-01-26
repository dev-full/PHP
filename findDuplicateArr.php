<!DOCTYPE html>
<html>
<body>

<?php
function findDuplicateCount($arr)
{
  $countarr = array_count_values($arr);
  $dupcnt = 0;
  foreach ( $countarr as $value )
  {
    if ($value > 1)
    	$dupcnt ++;
  }
  return $dupcnt;
}
$a=[1, 3, 1, 4, 5, 6, 3, 2];
print_r(findDuplicateCount($a));
?>

</body>
</html>
