<?php

// for ($i=1;$i < 5;$i++){
//     echo "muhammad bukhori</br></br>";
// }

// $i = 1;
// while ($i < 7){
//     echo "bukhori";
// }

// $i = 20;
// do{
//     echo "this is owi";
// } while ($i < 15);

//PENGGUNAAN ARRAY 
// $jenis=["toyota","daihatsu","suzuki","mercy"];
// echo "$jenis[3]</br>";

// var_dump($jenis);
// $nilai = [75,83,90,98];
// echo "nilai PPLG $nilai[3]</br>";

$daftar =["Aerostreet","Compass","Ortus","Specs"];
echo "Daftar koleksi sepatu</br>";
foreach ($daftar as $daftarBelanja){
    echo "- " .$daftarBelanja ."</br>";
}