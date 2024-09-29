<?php
$films = ["Титанік" => ["Джеймс Кемерон", 1997],
    "Матриця" => ["Ліллі Вачовські", 1999],
    "Темний лицар" => ["Крістофер Нолан", 2008],
    "Володар перснів" => ["Пітер Джексон", 2001],
];

// $films = ("Титанік" => ("ДжеймКемерон", "1997");
// "Матриця" => ["Ліллі Вачовські", "1999"],
// "Темний лицар" => ["Крістофер Нолан", "2008"],
// "Володар перснів" => ["Пітер Джексон", "2001"],
// );

ksort($films);

print_r($films) . '<br>';

foreach ($films as $name => $film) { // виводимо масив
    echo "$film[0]: \"$name\", $film[1]\n" . '<br>';
}
function year($a, $b)
{ // callback-функція, яка визначає спосіб сортування (по рокам)
    // if ($a[1] < $b[1]) {
    //     return -1;
    // } elseif ($a[1] == $b[1]) {
    //     return 0;
    // } else {
    //     return 1;
    // }



    if($a[1]<=>$b[1]);
}
echo "Сортування за роком" . '<br>';
uasort($films, "year");

foreach ($films as $name => $film) { // виводимо масив
    echo "$film[0]: \"$name\", $film[1]\n" . '<br>';
}
function author($a, $b)
{ // callback-функція, яка визначає спосіб сортування (по рокам)
    if ($a[0] < $b[0]) {
        return -1;
    } elseif ($a[0] == $b[0]) {
        return 0;
    } else {
        return 1;
    }

}
echo "По автору \n" . '<br>';
uasort($films, "author"); // сортуємо масив за допомогою функції cmp
foreach ($films as $name => $film) { // виводимо масив
    echo "$film[0]: \"$name\", $film[1]\n" . '<br>';
}

// array_walk($films, 'author', 'year');
