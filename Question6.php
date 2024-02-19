<?php
$stored_username = "user123";
$stored_password = "password123";
function check_credentials($username, $password) {
    global $stored_username, $stored_password;
    if ($username === $stored_username && $password === $stored_password) {
        echo "Login successfully";
    } else {
        echo "Invalid credentials";
    }
}
$user_input_username = "user123"; 
$user_input_password = "password123"; 
check_credentials($user_input_username, $user_input_password);
?>