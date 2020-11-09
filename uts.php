<?php
echo "masukkan jam kerja : ";
$jm=trim(fgets(STDIN));

if($jm>48){
    $p=$l-48;
    $b=$p*80000;
    $q=240000;
    $v=$b+$q;

echo "jumlah gaji pokok anda adalah :Rp.$q\n";
echo "upah lembur anda selama $p hari adalah : Rp.$b\n";
echo "upah gaji pokok anda adalah : Rp.$v";
}

else{
echo "jumlah gaji pokok anda adalah :".$l*50000;
}

?>