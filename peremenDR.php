<?php
$str_png='данный файл иимеет формат .png';
$q=substr_count($str_png , '.png');
if($q>=1){
echo 'Да<br/>';
}
else {
echo 'нет';}

echo '<br/>';
$str ='данный файл иимеет формат .pnг';
$w= mb_substr($str,-4,4);
if($w==='.png'){
    echo 'DA';
}
else {
    echo 'HET';
}
echo '<br/>';
echo '<br/>';
//Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
// добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов
// - просто выведите эту строку на экран.
$str_1='hello world!';
$e=strlen($str_1);
if ($e>5){
    $r=mb_substr($str_1, 5,7);
echo $r.'...';
echo '<br/>';
}
echo '<br/>';
echo '<br/>';
$str_2='Дана строка $str. Зaмените в ней все буквы \'a\' на цифру 1, буквы \'b\' - 
на 2, а буквы \'с\' - на 3.';
$str_2_1= str_replace("а","1",$str_2);
$str_2_b= str_replace("b","2",$str_2_1);
echo str_replace("с","3",$str_2_b);
echo '<br/>';
echo $str_2;
echo '<br/>';
echo '<br/>';
//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
$str_3='abc abc abc';
$str_a=strlen($str_3);
$position=$str_a-2;
echo 'номер позиции '.$position;
echo '<br/>';
echo '<br/>';
//Дана строка 'html css php'.
// С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str_4='html css php';
$m_4=explode(' ', $str_4);
foreach ($m_4 as $v_4){
    echo $v_4.'<br/>';
}
echo '<br/>';
echo '<br/>';
//В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).
// Определите количество дней между датами.
/*$origin = new DateTime('2009-10-11');
$target = new DateTime('2009-10-13');
$interval = $target->diff($origin);
echo $interval->format('%R%a дней');*/ // подсказка

$str_5='10-02-2015';
echo $str_5;
echo '<br/>';
$str_5_1='27-12-2020';
echo $str_5_1;
echo '<br/>';
$str_5a=str_replace('-',' ',$str_5);
$str_5a_1=str_replace('-',' ',$str_5_1);
$m_5=explode(' ',$str_5a);
$m_5_1=explode(' ',$str_5a_1);
$new_m=array_reverse($m_5);
$new_m1=array_reverse($m_5_1);
$D=implode("-",$new_m);
$D1=implode("-",$new_m1);
$res=new DateTime("$D");
$res1=new DateTime("$D1");
$resul=$res->diff($res1);
$resultat=abs($resul);
echo $resul ->format('%R%a дней');


