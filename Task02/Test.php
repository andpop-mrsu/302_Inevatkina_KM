<?php

/** Function for checking methods of the Vector class */
function run_test()
{
    $vector_1 = new Vector(3, 7, 11);
    echo 'Символьное представление 1-го вектора: ' . PHP_EOL;
    echo 'Ожидается: (3, 7, 11)' . PHP_EOL;
    echo 'Получено: ' . $vector_1 . PHP_EOL;

    $vector_2 = new Vector(1, -4, -2);
    echo 'Символьное представление 1-го вектора: ' . PHP_EOL;
    echo 'Ожидается: (1, -4, -2)' . PHP_EOL;
    echo 'Получено: ' . $vector_2 . PHP_EOL;

    $vector_3 = $vector_1->addVectors($vector_2);
    echo 'Сложение векторов: ' . PHP_EOL;
    echo 'Ожидается: (4, 3, 9)' . PHP_EOL;
    echo 'Получено: ' . $vector_3 . PHP_EOL;

    $vector_4 = $vector_1->subVectors($vector_2);
    echo 'Вычитание векторов: ' . PHP_EOL;
    echo 'Ожидается: (2, 11, 13)' . PHP_EOL;
    echo 'Получено: ' . $vector_4 . PHP_EOL;

    $number = 11;
    $vector_5 = $vector_1->product($number);
    echo 'Умножение вектора 1 на число 11: ' . PHP_EOL;
    echo 'Ожидается: (33, 77, 121)' . PHP_EOL;
    echo 'Получено: ' . $vector_5 . PHP_EOL;

    $number_scalar = $vector_1->scalarProduct($vector_2);
    echo 'Скалярное произведение векторов: ' . PHP_EOL;
    echo 'Ожидается: -47' . PHP_EOL;
    echo 'Получено: ' . $number_scalar . PHP_EOL;

    $vector_6 = $vector_1->vectorProduct($vector_2);
    echo 'Векторное произведение векторов: ';
    echo 'Ожидается: (30, 17, -19)' . PHP_EOL;
    echo 'Получено: ' . $vector_6 . PHP_EOL;
}
