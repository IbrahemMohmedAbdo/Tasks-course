<?php

$unit_cost_first = 3.50;
$unit_cost_second = 4.00;
$unit_cost_third =6.50;

$units=75;
$bill=0;

if($units <= 50) {
    $bill = $units * $unit_cost_first;

}
else if($units > 50 && $units <= 150) {
    $temp = 50 * $unit_cost_first;
    $remaining_units = $units - 50;
    $bill = $temp + ($remaining_units * $unit_cost_second)
}
else {
    $temp = (50 * 3.5) + (100 * $unit_cost_second)
    $remaining_units = $units - 150;
    $bill = $temp + ($remaining_units *$unit_cost_third );


} 
echo $bill;





?>


