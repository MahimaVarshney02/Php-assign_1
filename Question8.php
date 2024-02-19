<?php
function assignGrade($score) {
    if ($score >= 90) {
        return "Grade A";
    } elseif ($score >= 80) {
        return "Grade B";
    } elseif ($score >= 70) {
        return "Grade C";
    } elseif ($score >= 60) {
        return "Grade D";
    } else {
        return "Grade F";
    }
}
$score = 85; 
echo "Score: $score, Grade: " . assignGrade($score);

?>