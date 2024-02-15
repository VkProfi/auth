<?php
function getDivisors($number) {
    // Инициализируем пустой массив для делителей
    $divisors = array();

    // Проверка делителей до половины числа
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }

    // Включаем само число в массив делителей
    $divisors[] = $number;

    return $divisors;
}

// Пример использования функции
$testNumber = 24;
$result = getDivisors($testNumber);

echo "Делители числа $testNumber: " . implode(", ", $result);
?>
