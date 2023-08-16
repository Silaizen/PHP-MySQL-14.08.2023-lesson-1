<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="1.css">
    <title>Document</title>
</head>
<body>
    <?php
     echo "<h2>1 task:</h2>";
//1 task Создание массива с данными
$data = array(
    array("name" => "John", "company" => "ABC Inc.", "position" => "Developer"),
    array("name" => "Jane", "company" => "XYZ Corp.", "position" => "Designer"),
    array("name" => "Mike", "company" => "123 Co.", "position" => "Manager"),
    array("name" => "Emily", "company" => "Best Designs", "position" => "Lead Designer"),
    array("name" => "Alex", "company" => "Tech Solutions", "position" => "Engineer"),
    array("name" => "Sarah", "company" => "Global Innovators", "position" => "Researcher"),
    array("name" => "David", "company" => "Data Systems", "position" => "Analyst"),
    array("name" => "Olivia", "company" => "Media Group", "position" => "Content Creator")
);

// Перебор массива и вывод информации в заданном формате
foreach ($data as $item) {
    echo '"' . $item["name"] . '" is working in "' . $item["company"] . '" as: "' . $item["position"] . '"<br>';
}
?>

<?php
// Создание массива с данными
echo "<h2>2 task:</h2>";
$data = array(
    array("name" => "John", "company" => "ABC Inc.", "position" => "Developer"),
    array("name" => "Jane", "company" => "XYZ Corp.", "position" => "Designer"),
    array("name" => "Mike", "company" => "123 Co.", "position" => "Manager"),
    array("name" => "Emily", "company" => "Best Designs", "position" => "Lead Designer"),
    array("name" => "Alex", "company" => "Tech Solutions", "position" => "Engineer"),
    array("name" => "Sarah", "company" => "Global Innovators", "position" => "Researcher"),
    array("name" => "David", "company" => "Data Systems", "position" => "Analyst"),
    array("name" => "Olivia", "company" => "Media Group", "position" => "Content Creator")
);

// 2 task Создание ассоциативного массива для группировки по компаниям
$groupedData = array();
foreach ($data as $item) {
    $company = $item["company"];
    $groupedData[$company][] = $item;
}

// Вывод сотрудников в зависимости от компаний в виде списка
foreach ($groupedData as $company => $employees) {
    echo "<h2>$company:</h2>";
    echo "<ul>";
    foreach ($employees as $employee) {
        echo "<li>" . $employee["name"] . " - " . $employee["position"] . "</li>";
    }
    echo "</ul>";
}
?>

<?php
 echo "<h2>3 task:</h2>";
        // Создание массива и первого элемента
        $numbers = array(1);

        // Генерация и добавление остальных чисел в массив
        for ($i = 1; $i < 10; $i++) {
            $previousNumber = $numbers[$i - 1];
            $randomNumber = mt_rand($previousNumber + 1, $previousNumber + 10);
            $numbers[] = $randomNumber;
        }

        // Вывод массива на страницу
        echo "<p>Сгенерированный массив:</p>";
        echo "<pre>";
        print_r($numbers);
        echo "</pre>";
    ?>
<?php
echo "<h2>4 task:</h2>";
        // Создание массива с плавающими числами и степенями округления
        $numbers = array(
            array("value" => 12.345, "rounding" => 2),
            array("value" => 7.891, "rounding" => 1),
            array("value" => 3.14159, "rounding" => 3),
            // Добавьте остальные элементы массива здесь
        );

        // Заполнение массива, округление чисел и вывод на страницу
        echo "<p>Исходные значения и округления:</p>";
        echo "<ul>";
        foreach ($numbers as $item) {
            $value = $item["value"];
            $rounding = $item["rounding"];
            $roundedValue = round($value, $rounding);

            echo "<li>Исходное значение: $value, Округление: $roundedValue</li>";
        }
        echo "</ul>";
    ?>

<?
echo "<h2>5 task:</h2>";
        // Создание массива и заполнение случайными числами
        $array = array();
        for ($i = 0; $i < 5; $i++) {
            $innerArray = array();
            for ($j = 0; $j < 5; $j++) {
                $innerArray[] = rand(10, 100);
            }
            $array[] = $innerArray;
        }

        // Вывод массива с выделением минимальных значений
        echo "<table>";
        for ($row = 0; $row < 5; $row++) {
            echo "<tr>";
            $minValue = PHP_INT_MAX; // Инициализация для поиска минимума в столбце
            for ($col = 0; $col < 5; $col++) {
                $value = $array[$row][$col];
                echo "<td";
                if ($value == min($array[$row])) {
                    echo " class=\"red-text\"";
                }
                echo ">$value</td>";

                // Поиск минимального значения в столбце
                if ($value < $minValue) {
                    $minValue = $value;
                }
            }
            echo "</tr>";
            $minColumnValues[] = $minValue;
        }
        echo "</table>";

        // Вычисление суммы минимальных значений и их среднего значения
        $sumMinValues = array_sum($minColumnValues);
        $averageMinValue = $sumMinValues / 5;

        echo "<p>Сумма минимальных значений в каждом столбце: $sumMinValues</p>";
        echo "<p>Среднее значение минимальных значений в каждом столбце: $averageMinValue</p>";
    ?>

</body>
</html>
