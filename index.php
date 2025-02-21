<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота</title>
    <style>
        body { font-family: Verdana; margin: 20px; }
        h2 { color: #007bff; }
        h4 { color:rgba(80, 169, 107, 0.86); }
        .task { border: 1px solid #ddd; padding: 15px; margin-bottom: 20px; background: #f9f9f9; }
        .menu { margin-bottom: 20px; }
        .menu a { margin-right: 15px; text-decoration: none; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>

<h2>Лабораторна робота 1  Підгурський Юрій ІПЗ-23 "(11 варіант)"</h2>

<!-- Меню -->
<div class="menu">
    <a href="#task1">Завдання 1</a>
    <a href="#task2">Завдання 2</a>
    <a href="#task3">Завдання 3</a>
    <a href="#task4">Завдання 4</a>
    <a href="#task5">Завдання 5</a>
    <a href="#task6">Завдання 6</a>
</div>

<!-- Завдання 1 -->
<div class="task" id="task3">
    <h3>Завдання 1: обчислити значення виразу: ((m * log(m)) + (a * sin(a * m))) / (b * cos(b)) <br>при a=3; b=21; m=3,23</br></h3>
    <?php

$a = 3;
$b = 21;
$m = 3.27;

$angle_sin_degrees = $a * $m; // Аргумент синуса в градусах
$angle_cos_degrees = $b;      // Аргумент косинуса в градусах

$angle_sin_radians = deg2rad($angle_sin_degrees); // Перетворення в радіани для sin()
$angle_cos_radians = deg2rad($angle_cos_degrees); // Перетворення в радіани для cos()


$result_numerator = ($m * log($m)) + ($a * sin($angle_sin_radians));
$result_denominator = $b * cos($angle_cos_radians);

$final_result = $result_numerator / $result_denominator;

echo $final_result;
?>
</div>

<!-- Завдання 2 -->
<div class="task" id="task3">
    <h3>Завдання 2: Задано натуральне число n. Скласти програму, яка змінює порядок цифр числа n на обернений.</h3>
    <?php

// Введення числа n
$n = 12345; 
// Зміна порядку цифр на обернений
$reversed_n = strrev($n);
// Виведення результату
echo "Обернений порядок цифр числа $n: $reversed_n";

?>

</div>

<!-- Завдання 3 -->
<div class="task" id="task3">
    <h3>Завдання 3: Знайти середнє арифметичне чисел  одновимірного масиву.</h3>
    <?php

// Визначаємо одновимірний масив чисел
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];  

// Обчислюємо суму всіх елементів масиву
$sum = array_sum($numbers);

// Обчислюємо кількість елементів масиву
$count = count($numbers);

// Обчислюємо середнє арифметичне
$average = $sum / $count;

// Виводимо результат
echo "Середнє арифметичне чисел масиву '1, 2, 3, 4, 5, 6, 7, 8, 9, 10': $average";

?>

</div>

<!-- Завдання 4 -->
<div class="task" id="task4">
    <h3>Завдання 4: Обчислити середнє арифметичне елементів масиву L(2,20).</h3>
    <?php

$numbers = range(2, 20, 2);  // Генеруємо масив [2, 4, 6, ..., 20]

// Обчислюємо суму елементів масиву
$sum = array_sum($numbers);

// Обчислюємо кількість елементів масиву
$count = count($numbers);

// Обчислюємо середнє арифметичне
$average = $sum / $count;

// Виводимо результат
echo "Середнє арифметичне елементів масиву L(2, 20): $average";

?>
</div>

<!-- Завдання 5 -->
<div class="task" id="task5">
    <h3>Завдання 5: Задано два масиви A(5) та B(5). Змінній s присвоїти значення –1, якщо максимальний елемент масиву A більше максимального елемента масиву B, 0 та 1 відповідно при рівності та меншості.

</h3>
<?php

// Задано два масиви A та B
$A = [1, 2, 3, 1, 9];  // Масив A
$B = [6, 7, 8, 9, 1];  // Масив B

// Знаходимо максимальні елементи масивів A та B
$maxA = max($A);
$maxB = max($B);

// Ініціалізуємо змінну s
if ($maxA > $maxB) {
    $s = -1;  // Якщо максимальний елемент A більше максимального елемента B
} elseif ($maxA == $maxB) {
    $s = 0;   // Якщо максимальні елементи A та B рівні
} else {
    $s = 1;   // Якщо максимальний елемент A менший за максимальний елемент B
}

// Виводимо результат
echo "Значення змінної s: $s";

?>

</div>

<!-- Завдання 6 -->
<div class="task" id="task6">
    <h3>Завдання 6: Дано текст з прописними латинськими літерами, за яким йде крапка. Надрукувати літери, що йдуть в тексті до літер “rtf”.</h3>
    <?php

// Текст
$text = "HELLO WORLD RTF .";  

// Знаходимо позицію літер "RTF" в тексті
$pos = strpos($text, "RTF");

// Якщо літери "RTF" знайдені в тексті
if ($pos !== false) {
    // Виводимо частину тексту до літер "RTF"
    $result = substr($text, 0, $pos);
    
    // Виводимо результат
    echo "Літери до 'RTF': " . $result;
} else {
    echo "Літери 'RTF' не знайдені в тексті.";
}

?>
</div>

</body>
</html>