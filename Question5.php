<?php
$totalOrderAmount = 1500; 
if ($totalOrderAmount > 1000) {
    $discountAmount = 100; 
    echo "Congratulations! You get Rs. $discountAmount discount on your order.";
} else {
    echo "You need to spend Rs. " . (1000 - $totalOrderAmount) . " more to qualify for the discount.";
}
?>