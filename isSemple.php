<?php
function isSimple($number) {
    // Проверка на отрицательные числа и 0
    if ($number <= 1) {
        return false;
    }

    // Проверка делителей до квадратного корня числа
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Пример использования функции
$testNumber = 17;

if (isSimple($testNumber)) {
    echo "$testNumber является простым числом.";
} else {
    echo "$testNumber не является простым числом.";
}
?>
