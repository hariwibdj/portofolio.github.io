<?php
    $nilai = $_POST['nilai'];
    function ganjilgenap($num) {
               if($num % 2 ==0){
                   $bil ="<h1>". "--"."</h1>";
               }else{
                    $bil ="<h1>". "-"."</h1>";
               }
               return $bil;
         }
         echo ganjilgenap($nilai);    
?>