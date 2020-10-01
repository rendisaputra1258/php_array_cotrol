<?php
 $data=["aril","giring","david"];

 $musisi=implode("\n",$data);  //array=>string

 echo $musisi;

 $musisi_arr=explode("\n",$musisi); ///string=>array
 
 print_r($musisi_arr);
 //adding elemen

 array_push($data,"gesang"); //berada di belakang

 array_unshift($data,"rosa"); //berada didepan

 //remove element
 array_pop($data); //remove element for end

 array_shift($data); //remove elemen for begining

 unset ($data[0]); //remove elemen array index[0]

print_r(array_values($data)); //return all array
$data_baru=["via vallen"];
echo PHP_EOL;

$color=array("red","green","blue");
//ad this modification array

array_unshift($color,"yellow");// add yellow to begining array

array_push($color,"black"); //add black to the end of array

array_splice($color,1,1,"magenta"); //replace red to magenta

unset($color[2]); //remove elemen from green

print_r($color); //

$input=array("red","green","blue","yelow");
array_splice($input,1,1,["orange","black"]);
var_dump($input);
$icecream=[
    "alena"=>"blackcary",
    "treasure"=>"chokolate",
    "dave"=>"cookies and cream",
    "rialla"=>"strobary",
      "likes"=>true,
];

print_r($icecream);
ksort($icecream);
asort($icecream);
echo PHP_EOL;

$learn=array("conditional","array","loop");
  $learn[]="build function awesome!";
  array_push($learn,"function","form","object");
    array_unshift($learn,"html","css");
  echo "you remove",array_shift($learn);
  echo "you remove",array_pop($learn);
  unset($learn[1],$learn[2]);
  $learn=array_values($learn);
  asort($learn);





?>