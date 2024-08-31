<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $questions = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];

    $quiz = [];

    for ($i = 0; $i < count($questions); $i++) {
        $quiz[] = [
            'question' => $questions[$i],
            'options' => [
                $option1[$i],
                $option2[$i],
                $option3[$i],
                $option4[$i],
            ],
        ];
    }

   
    file_put_contents('quiz.json', json_encode($quiz));
    
    echo "Cuestionario guardado correctamente.";
} else {
    echo " no permitido.";
}
?>
