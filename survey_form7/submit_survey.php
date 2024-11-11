<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];

    // Форматування дати для імені файлу
    $timestamp = date("Y-m-d_H-i-s");
    $filename = "survey/response_$timestamp.txt";
    
    // Зберігання даних у текстовий файл
    $data = "Ім'я: $name\nEmail: $email\nПитання 1: $question1\nПитання 2: $question2\nПитання 3: $question3\n";

    if (!file_exists('survey')) {
        mkdir('survey', 0777, true);
    }

    file_put_contents($filename, $data);

    // Виведення часу заповнення форми
    echo "Дякуємо за ваші відповіді! Час заповнення форми: " . date("Y-m-d H:i:s");
}
?>
