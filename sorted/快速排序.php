<?php
    
    //平均复杂度 O(NlogN)
    //基于一种叫做“二分”的思想 

    function quickSort($leftIndex, $rightIndex, &$arr){

        if ($leftIndex > $rightIndex ){
            return;
        }

        //基准数
        $temp = $arr[$leftIndex];

        //两个小兵
        $i = $leftIndex;
        $j = $rightIndex;

        while($i != $j){

            //从右往左找
            while($arr[$j] >= $temp && $i < $j){
                $j--;
            }
            //从左往右找
            while($arr[$i] <= $temp && $i < $j){
                $i++;
            }

            //当两个小兵没有相遇
            if ( $i < $j ){
                $t = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $t;
            }
        }

        $arr[$leftIndex] = $arr[$i];
        $arr[$i] = $temp;

        quickSort($leftIndex, $i-1, $arr);      //继续跑左边
        quickSort($i+1, $rightIndex, $arr);     //继续跑右边
    }


    $arr = [88,5,76,2,54,456,12,4,1];

    quickSort(0, count($arr)-1, $arr);

    var_dump($arr);

