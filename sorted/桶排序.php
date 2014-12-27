<?php
    
    //桶排序
    //只能用于整数
    //时间复杂度O(M+N)
    
    $arr = [7,3,8,4,0,2];

    $book = [];

    //初始化桶
    for($i = 0; $i<=max($arr); $i++){
        $book[$i] = 0;
    }

    //将对应的数放到桶里面
    for ($i=0; $i<count($arr); $i++){
        $book[$arr[$i]] ++;
    }

    //打印
    for($i=0; $i<count($book); $i++){
        for($j=1; $j<=$book[$i]; $j++){
            echo $i.PHP_EOL;
        }
    }



