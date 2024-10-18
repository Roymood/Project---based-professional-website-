<?php

// Define the correct answer indices for each question.
$correctAnswerIndices = [
    1, 3, 0, 3, 1, 2, 2, 0, 3, 1, 0, 2, 2, 3, 0
];

$totalQuestions = count($correctAnswerIndices);
$score = 0;

if (isset($_POST['answers']) && is_array($_POST['answers'])) {
    foreach ($_POST['answers'] as $index => $userAnswerIndex) {
        if (isset($correctAnswerIndices[$index]) && $userAnswerIndex == $correctAnswerIndices[$index]) {
            $score++;
        }
    }

    $percentScore = round(($score / $totalQuestions) * 100);

    // HTML for the quiz results
    $quizResultsHtml = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Quiz Results</title>
    <meta name='description' content='Quiz Results'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>
<body>
    <div class='container'>
        <div class='quiz-results bg-black-10'>
            <h1>Your Quiz Results</h1>
            <p>You scored <strong>$score</strong> out of <strong>$totalQuestions</strong> questions correctly! That's <strong>$percentScore%</strong>.</p>
            <a href='miniquizz2.html' class='btn btn-secondary'>Take Quiz Again</a>
        </div>
    </div>
</body>
</html>";

    echo $quizResultsHtml;
} else {
    echo "<p>No quiz data received. Please try submitting again.</p>";
}

?>
