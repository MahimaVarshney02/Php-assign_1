<?php
function NewUser($userId) {
    return $userId % 2 != 0;
}
function hasSubscribed($userId) {
    return $userId % 2 == 0;
}
function offerTrialPeriod($userId) {
    echo "Congratulations! Your free trial period is activated.\n";
}
$userId = 1; 
if (NewUser($userId) && !hasSubscribed($userId)) {
    offerTrialPeriod($userId);
} else {
    echo "Welcome back!\n"; 
}

?>