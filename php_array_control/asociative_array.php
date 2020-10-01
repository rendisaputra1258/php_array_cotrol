
 <?php
$data=[
    "name"=>"nazriel ilham",
    "age"=>24,
    "musicion"=>true,
    "height"=>1.25,
    1=>"angka satu",
    false=>"benar",
    2.7=>"dua"

];
print_r($data);
//function array
$task1=array(
    "title"=>"clean motorcicle",
    "priority"=>"medium",
    "complete"=>true
);
$task2=array(
    "title"=>"watch movies",
    "priority"=>"medium",
    "complete"=>false
);
$task3="all task was done";
$todo=array($task1,$task2,$task3);

echo $todo[0]["title"];
echo PHP_EOL;
echo $todo[2]; 

//short array bracket
/**
 * sampai disini
 * https;//teamtreehouse.com/library/multidimentional-array
 */


?>