<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 // if(preg_match('/^1[34578]{1}\d{9}$/', $_POST['tel'])==0){
             // echo 'false';
         // }else{
             // echo 'true';
         // }
// function makeSeq2(){
    // $n = 10;
    // $sum = 100;
    // $result = [];
    // for($i=$n;$i>=1;$i--){
        // $min = ($sum - 12 * ($i-1))>6?($sum - 12 * ($i-1)):6;
        // $max = ($sum - 6 * ($i-1))<12?($sum - 6 * ($i-1)):12;
        // $randNum = mt_rand($min,$max);
        // $sum -= $randNum;
        // $result[] = $randNum;
    // }
    // return $result;
// }

// var_dump(makeSeq2());
var_dump(array_rand(range(1,20),3));