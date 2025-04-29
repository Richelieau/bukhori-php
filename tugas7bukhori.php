<?php
 $bukhori = true;
 $motor = false;

 if($bukhori && !$motor){
    echo "berangkat ke sekolah";
 } elseif ($bukhori && $motor){
    echo "bukhori izin";
 }