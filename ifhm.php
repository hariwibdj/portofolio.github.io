<?php
$am = 85;

if($am>=80 && $am<=100){
    $hm = "A";
}elseif($am>=75 && $am <80){
    $hm ="A-";
}elseif(($am>=70) && ($am <75)){
    $hm ="B+";
}elseif(($am>=65) && ($am <70)){
    $hm ="B";
}elseif(($am>=55) && ($am <60)){
    $hm ="C";
}elseif(($am>=30) && ($am <55)){
    $hm ="D";
}elseif(($am>0) && ($am <30)){
    $hm ="E";
}else{
    $hm = "T";
}
echo "<h1>Angka Mutu : $am dengan huruf mutu : ". $hm."</h1>";
?>