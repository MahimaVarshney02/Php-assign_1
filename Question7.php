<?php
function recommend($temperature) {
    if ($temperature > 25) {
        echo "It's a sunny day!";
    } else {
        echo "Consider taking an umbrella.";
    }
}
$current_temperature = 28; 
recommend($current_temperature);

?>