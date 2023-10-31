<?php
$hari  = date("N");
$bulan =  date("m")-1;

$arhari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$arbulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo $arhari[$hari];
echo $arbulan[$bulan];
echo " <br>".$arhari[$hari].",".date("d")." ". $arbulan[$bulan]." ".date("Y");

for($i = 0; $i<count($arhari);$i++){
    echo $arhari[$i]."<br>";
}
foreach($arhari as $hari){
    echo $hari."<br>";
}
?>