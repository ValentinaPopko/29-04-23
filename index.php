<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $surname = "Karpenko ";
    $name = "Артем ";
    $secondname = "Алексеевич ";
    $bann = 5;
    $lim = 10;
    $together = $bann + $lim;
    $apples = "p";
    $fruit = "apples";

    
    echo  "<h1>Ваше имя</h1> ", $surname, $name, $secondname, "<br>", 'Количество фруктов ', $together, "<br>", 'Число яблок - ', $$fruit, "<br>";

    ?>

<!-- задача1 -->
<?php
$a=50;
if ($a > 10) : 
    $b = $a + 100;
    echo $b; 
else :
   $c=$a-30;
echo $c;
endif;          
?>

<!-- задача 2 -->
<?php
$a=525;
if ($a % 2 == 0) : 
    $a = $a / 2;
    echo $a; 
else :
   $a=$a*3;
echo $a;
endif;          
?>

<!-- задача 3 -->
<?php
$a=50;
if ($a >= 50) : 
    $a = $a ** 2;
    echo $a; 
elseif ($a > 10 && $a < 30) :
   $a=0;
echo $a;
else :
    $a= 'Ошибка';
 echo $a;
endif;          
?>

<!-- задача 4 -->
<?php
$a=2;
$b=3;

if ($a > $b) : 
    echo $a; 
else:
    echo $b;
endif;          
?>

<!-- задача 5 -->
<?php
$a=20;
$b=120;

if ($a-$b==100) : 
    echo 'Да'; 
elseif ($b-$a==100) :
    echo 'Да';
else:
    echo 'Нет';
endif;          
?>

<!-- задача 6 -->
<?php
$a=320;
$b=300;

if ($a-$b==20) : 
    echo 'Да'; 
elseif ($b-$a==20) :
    echo 'Да';
else:
    echo 'Нет';
endif;            
?>

<!-- задача 7 -->
<?php
$month = 2; 
switch($month) 
{  case 1 : echo "Январь"; break; 
   case 2 : echo "Февраль"; break; 
   case 3 : echo "Март"; break; 
   case 4 : echo "Апрель"; break; 
   case 5 : echo "Май"; break; 
   case 6 : echo "Июнь"; break; 
   case 7 : echo "Июль"; break; 
   case 8 : echo "Август"; break; 
   case 9 : echo "Сентябрь"; break; 
   case 10 : echo "Октябрь"; break; 
   case 11 : echo "Ноябрь"; break; 
   case 12 : echo "Декабрь"; break; 
   default : echo "Ошибка"; break; 
   } 

       
?>

</body>
</html>