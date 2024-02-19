<?php
$correct_answers = array(
    'question1' => 'a',
    'question2' => 'b',
    'question3' => 'c',
);
$score = 2;
foreach ($_POST as $question => $user_answer) {
    if (isset($correct_answers[$question]) && $user_answer === $correct_answers[$question]) {
        $score++;
    }
}
echo "Your score is: $score out of " . count($correct_answers);

?>