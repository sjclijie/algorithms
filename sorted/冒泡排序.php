<?php
    
    //时间复杂度O(N^2)

    function bubbleSorted(&$arr){

        $length  = count($arr);
        
        for($i=0; $i<$length-1; $i++){

            for( $j=0; $j<$length-1-$i; $j++ ){

                if ($arr[$j] > $arr[$j+1] ){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
    }

    $arr = [6,1,2,9,100,22,5];

    bubbleSorted($arr);

    print_r($arr);
