<?php

function run_test()
{
    $book1 = new Book("Путь Демона", array("Алексей Глушановский"), "АЛЬФА-КНИГА", 2009);
    $bookslist = new BooksList();
    $bookslist->add($book1);
    $bookslist->store('Books.txt');
    $book2 = new Book("Программирование на C++", array("Нейл Дейл", "Марк Хедингтон", "Чип Уимз"), "ДМК Пресс", 2011);
    $book3 = new Book("Library of Heaven’s Path", array("Heng Sao Tian Ya (横扫天涯)"), "Qidian", 2016);
    $bookslist->add($book2);
    $bookslist->add($book3);
    echo "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: Путь Демона" . PHP_EOL .
        "Автор 1: Алексей Глушановский" . PHP_EOL .
        "Издательство: АЛЬФА-КНИГА" . PHP_EOL .
        "Год: 2009" . PHP_EOL .
        "Id: 2" . PHP_EOL .
        "Название: Программирование на C++" . PHP_EOL .
        "Автор 1: Нейл Дейл" . PHP_EOL .
        "Автор 2: Марк Хедингтон" . PHP_EOL .
        "Автор 2: Чип Уимз" . PHP_EOL .
        "Издательство: ДМК Пресс" . PHP_EOL .
        "Год: 2011" . PHP_EOL .
        "Id: 3" . PHP_EOL .
        "Название: Library of Heaven’s Path" . PHP_EOL .
        "Автор 1: Heng Sao Tian Ya (横扫天涯)" . PHP_EOL .
        "Издательство: Qidian" . PHP_EOL .
        "Год: 2016" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
    $bookslist->load('Books.txt');
    echo PHP_EOL . "Ожидание:" . PHP_EOL .
        "Id: 1" . PHP_EOL .
        "Название: Путь Демона" . PHP_EOL .
        "Автор 1: Алексей Глушановский" . PHP_EOL .
        "Издательство: АЛЬФА-КНИГА" . PHP_EOL .
        "Год: 2009" . PHP_EOL .
        "Получено:" . PHP_EOL;
    for ($i = 1; $i <= $bookslist->count(); $i++) {
        echo $bookslist->get($i)->__toString();
    }
}
