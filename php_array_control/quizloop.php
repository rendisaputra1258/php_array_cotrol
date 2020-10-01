<?php
$facts=array(
     57=>"on heinz ketchup botles",
     92=>"on heinz  botles",
     18=>"on  ketchup botles",
     11=>"on  botles",
     98=>"on  ketchup botles",
     69=>"on heinz ketchup ",
);
for($x=1; $x<=100; $x++){
    if(isset($facts[$x])){
        echo $x.$facts[$x];
    }else{
        echo "$x\n";
    }
}
// var_dump(isset($nama));



?>