<?php
// struktur kendali
$nilai = 10;

if($nilai >=75 && $nilai <=79){
    echo "cukup";
}

else if($nilai >= 80 && $nilai <=85){
    echo"baik";
}
else if ($nilai >= 86 && $nilai <=100){
    echo"sangat baik";
} else{
    echo"TIDAKL LULUS";
}