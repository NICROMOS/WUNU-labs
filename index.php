<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Підгурський Юрій ІПЗ-23</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Підгурський Юрій ІПЗ-23 11 Варіант</h1>
    
    <!-- Завдання 1 -->
    <div class="container">
        <h2>Завдання 1: Дано текстовий файл, підрахувати кількість символів в ньому</h2>
        <h3>Завантажте текстовий файл</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="textfile" accept=".txt" required>
            <button type="submit" name="upload">Обробити</button>
        </form>
        
        <?php
        if (isset($_POST['upload']) && isset($_FILES['textfile'])) {
            $file = $_FILES['textfile']['tmp_name'];
            
            if ($file) {
                $content = file_get_contents($file);
                $charCount = mb_strlen($content, 'UTF-8');
                echo "<p>Кількість символів у файлі: $charCount</p>";
            } else {
                echo "<p>Помилка завантаження файлу!</p>";
            }
        }
        ?>
    </div>

    <!-- Завдання 2 -->
    <div class="container">
        <h2>Завдання 2: Вам потрібно розробити програму, яка б зчитувала кількість входжень якої-небудь обраної вами цифри у вибраному вами числі. Наприклад: цифра 5 в числі 442158755745 зустрічається 4 рази.</h2>
        <?php
        function countDigitOccurrences($number, $digit) {
            $number = strval($number); 
            $digit = strval($digit);   
            return substr_count($number, $digit); 
        }

        // Приклад використання
        $number = 442158755745;
        $digit = 5;
        $count = countDigitOccurrences($number, $digit);

        echo "<p>Цифра $digit в числі $number зустрічається $count раз(и).</p>";
        ?>
    </div>

    <!-- Завдання 3 -->
    <div class="container">
        <h2>Завдання 3: Написати скрипт конвектора валют.</h2>
        <form action="" method="post">
            <label for="amount">Кількість:</label>
            <input type="number" name="amount" step="0.01" required>
            <label for="currency">Валюта:</label>
            <select name="currency" required>
                <option value="UAH">Гривня (UAH)</option>
                <option value="EUR">Євро (EUR)</option>
                <option value="PLN">Злотий (PLN)</option>
            </select>
            <button type="submit" name="convert">Конвертувати</button>
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $amount = floatval($_POST['amount']);
            $currency = $_POST['currency'];

            $rates = [
                'UAH' => 1,
                'EUR' => 40.5, 
                'PLN' => 9.5  
            ];

            if (isset($rates[$currency])) {
                $uahAmount = $amount * $rates[$currency];
                echo "<p>$amount $currency ≈ $uahAmount грн</p>";
            } else {
                echo "<p>Невідома валюта!</p>";
            }
        }
        ?>
    </div>

    <!-- Завдання 4 -->
    <div class="container">
        <h2>Завдання 4: Для файлу R1, компонентами якого є дійсні числа, скласти програму, що знаходить максимум і мінімум серед кожних десяти компонент файлу R1 і формує з них файл R2.</h2>
        <h3>Завантажте файл .txt</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="textfile" accept=".txt" required>
            <button type="submit" name="upload">Обробити</button>
        </form>

        <?php
        if (isset($_POST['upload']) && isset($_FILES['textfile'])) {
            $file = $_FILES['textfile']['tmp_name'];

            if ($file) {
                $numbers = array_map('floatval', file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));

                if (!empty($numbers)) {
                    $outputFile = "R2.txt";
                    $outputHandle = fopen($outputFile, "w");

                    for ($i = 0; $i < count($numbers); $i += 10) {
                        $chunk = array_slice($numbers, $i, 10);
                        $min = min($chunk);
                        $max = max($chunk);
                        fwrite($outputHandle, "$min $max\n");
                    }

                    fclose($outputHandle);
                    echo "<p>Файл оброблено! <a href='$outputFile' download>Завантажити R2.txt</a></p>";
                } else {
                    echo "<p>Файл порожній або містить некоректні дані.</p>";
                }
            } else {
                echo "<p>Помилка завантаження файлу!</p>";
            }
        }
        ?>
    </div>

</body>
</html>
