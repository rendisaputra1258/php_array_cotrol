<?php
// $score=60;

// if($score>=60)
// {
//     echo "you past the test"; 

// }elseif($score>=50 && $score<60)
// {
//     echo "try again";
// }else
// {
//     echo "you fail the test";
// }
function grade($grade)
{
  if($grade>=96 && $grade<=100)
  {
     return "A \n";
  }elseif($grade>=75 && $grade<=95)
  {
     return "b \n";
  }elseif($grade>=65 && $grade<=75)
  {
       return "c \n";
  }else
  {
      return "d";
  }
}
echo grade(60);
// echo grade(95);
// echo grade(65);
// echo grade(60);



//comprase
//@link:https//www.php.net/manal/en/language/
var_dump((1<>2));
var_dump((1!=2));


//identical
var_dump((1==="1"));


$num=10000;
if($num>=10 && $num<=1000)
    {
        echo "your number is in range";
    }else
{
    echo "your number is NOT in range";
}
var_dump(($number=true) || (false && true));

echo PHP_EOL;

switch(date('1'))
{
case"Monday";
    echo "Starting day";
    break;
case"Tuesday";
    echo "Wash a car";
    break;
case"Wednesday";
    echo "Holiday";
    break;
case"Thursday";
    echo "Vacation";
    break;
    default:
        echo"Long holiday";
}

















// echo PHP_EOL;
// $star=5;
// for($a=$star;$a>0;$a--){
// for($b=$star;$b>=$a;$b--){
//     echo "*";
    
// }
//   echo"\n";
// }
?>