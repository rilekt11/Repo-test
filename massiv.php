<?php

//Задание 5
//Для группы учащихся известны годовые оценки по следующим предметам:
// математика, физика, химия, информатика.
// Найти среднюю в группе оценку по каждому из предметов.
// Суммирование оценок по каждому предмету.
$grades = [
    'Понамарев' => [
        'математика' => 4,
        'физика' => 4,
        'химия' => 5,
        'информатика' => 5
    ],
    'Ковалёва' => [
        'математика' => 5,
        'физика' => 4,
        'химия' => 4,
        'информатика' => 3
    ],
    'Максимов' => [
        'математика' => 3,
        'физика' => 5,
        'химия' => 4,
        'информатика' => 5
    ],
    'Ефремова' => [
        'математика' => 3,
        'физика' => 5,
        'химия' => 5,
        'информатика' => 4
    ]
];
foreach ($grades as $student => $studentGrades){
    echo "<br>$student:<br>";

    foreach ($studentGrades as $subject => $grade){
        echo "$subject - $grade, <br>";
    }
}

$sumGrades = [
    'математика' => 0,
    'физика' => 0,
    'химия' => 0,
    'информатика' => 0
];

foreach ($grades as $student => $studentGrades){
    $sumGrades['математика'] += $studentGrades['математика'];
    $sumGrades['физика'] += $studentGrades['физика'];
    $sumGrades['химия'] += $studentGrades['химия'];
    $sumGrades['информатика'] += $studentGrades['информатика'];
}
echo "<br>Сумма оценок по каждому предмету:";
foreach ($sumGrades as $subject => $total){
    echo "<br>$subject: $total";
}

$quantityStudent = count($grades);

$averageGrades = [];
foreach ($sumGrades as $subject => $total){
    $averageGrades[$subject] = $total / $quantityStudent;
}
echo '<br>';
echo "<br>Средняя оценка по каждому предмету:";
foreach ($averageGrades as $subject => $average){
    echo "<br>$subject: " . round($average, 2);
}





//задание4
//$N = 10;
//$randomArray = [];
//for ($i = 0; $i < $N; $i++){
//    $randomArray[] = mt_rand(-100, 100);
//}
//echo "Массив: " . implode(', ', $randomArray);
//
//$minPositive = 0;
//$maxNegative = 0;
//
//foreach ($randomArray as $value){
//    if ($value > 0 && ($minPositive === 0 || $value < $minPositive)){
//        $minPositive = $value;
//    }
//    if ($value < 0 && ($maxNegative === 0 || $value > $maxNegative)){
//        $maxNegative = $value;
//    }
//}
//
//echo '<br>';
//echo "Минимальное положительное число = " . $minPositive;
//echo '<br>';
//echo "Максимальное отрицательное число = " . $maxNegative;

//задание2
//$arr9 = [];
//for ($b = 0; $b < 10; $b++) {
//    $arr9[$b] = mt_rand(0, 10);
//    $arr10 = array_reverse($arr9);
//}
//print_r($arr9);
//
//echo '<br>';
//print_r($arr10);



//задание1
//$arr8 =[50, 45, 40, 35, 30];
//$result = array_sum($arr8);
//print_r($result);





//$arr6 = [[10, 11, 12],[21, 22], [31, 32, 33]];
//echo '<pre>';
//print_r($arr6);
//echo '</pre>';
//$arr7 = [
//  'fruits' => [
//      'apple' => 'яблоко',
//      'banana' => 'банан',
//      'pineapple' => 'ананас'
//  ],
//  'vegetables' =>   [
//      'tomato' => 'помидор',
//      'cucumber' => 'огурец'
//  ],
//   'drinks' => [
//       'water' => 'вода',
//       'coffee' => 'кофе',
//       'tea' => 'чай'
//   ]
//];
//foreach ($arr7 as $key => $value){
//    foreach ($value as $key_new => $item){
//        echo $item . '<br>';
//    }
//}






//echo '<pre>';
//print_r($arr7);
//echo '</pre>';






//$user['name'] = 'Tanya';
//$user['surname'] = 'Ivanova';
//$user['age'] = '30';
//$user['children'] = '1';
//print_r($user);
//$arr4 = array(
//    'hello' => 'привет',
//    'bay' => 'пока',
//);
//echo '<pre>';
//
//print_r($arr4);
//
//echo '</pre>';
//
//$arr5 = [
//    'apple' => 'яблоко',
//    'banana' => 'банан',
//    'pineapple' => 'ананас',
//];
//print_r($arr5);
//echo '<br>';
//foreach ($arr5 as $key => $value)
//{
//    echo $key . ' = ' . $value . '<br>';
//}




//$arr1 = array('яблоко', 'банан', 'ананас');
//echo count($arr1);
//print_r($arr1);
//$arr2[] = 'tomat';
//$arr2[] = 'cucumber';
//print_r($arr2);
//echo '<br>';
//$arr3 = ['яблоко', 'банан', 'ананас'];
//$arr3[] = 'grusha';
////echo $arr3[1];
//$arr3[3] = 'voda';
//$arr3[] = 'chay';
//print_r($arr3);
//echo '<br>';
//$arr3[] = 'coffe';
//$i = mt_rand(0,count($arr3)-1);
//echo $arr3[$i];
/*for ($i = 0; $i < count($arr3); $i++)
{
    echo $arr3[$i] . '<br>';
}*/
//foreach ($arr3 as $value)
//{
//    echo $value . '<br>';
//}