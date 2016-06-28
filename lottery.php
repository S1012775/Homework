<?php 
header("content-type: text/html; charset=utf-8");
echo '樂透彩號碼:<br>';

$lottery=array();

    for($i=1;$i<=42;$i++){ 
        $lottery[]=$i;
    }
    $sp=array_rand($lottery,7);

    for($j=0;$j<=6;$j++){  
        if($j==6)
        {    
            echo '特別號：'; 
        }
    echo$lottery[$sp[$j]].'<br>';
    }





?>