<?php 
/*
echo date("l,d-M-Y");
*/
//detik yang sudah berlalu sejak januari 1970
//UNIX timestamp /epoch time
//echo time();
//echo date("d M Y", time()-60*60*24*100);

//mktime
//membuat detik sendiri
//mktime(0,0,0,0,0,0)
//jam.menit,detik,bulan,tanggal,tahun
//echo date("l",mktime(0,0,0,4,10,2003));

echo date("l", strtotime("25 aug 1980"));
?>