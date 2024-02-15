<?php
function isSimple($number) {
    // �������� �� ������������� ����� � 0
    if ($number <= 1) {
        return false;
    }

    // �������� ��������� �� ����������� ����� �����
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// ������ ������������� �������
$testNumber = 17;

if (isSimple($testNumber)) {
    echo "$testNumber �������� ������� ������.";
} else {
    echo "$testNumber �� �������� ������� ������.";
}
?>
