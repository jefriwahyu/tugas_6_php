<?php

    // Yang diketahui
    $hjperkilo = 15000;
    $hd = 2000;
    $dus = 6;
    $jambuperdus = 5;


    // Mencari total jambu
    $tj = $dus * $jambuperdus;
    
    // Mencari total semua harga jambu
    $thj = $tj * $hjperkilo;

    // Mencari harga semua dus
    $thd = $dus * $hd;

    // Mencari total semua harga jambu dan dus
    $ts = $thj + $thd;

    // Menampilkan output ke dalam browser

    echo "========================================================== <br>";
    echo "Harga Jambu = Rp $hjperkilo / Kg <br>";
    echo "Harga Kardus = Rp $hd / pcs <br>";
    echo "Total Penjualan (Dus dan Jambu) : tj = $dus x $jambuperdus <br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp; =  $tj kg<br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; thj =  $tj x $hjperkilo <br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp; =  $thj <br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; thd = $hd x $dus <br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp; =  $thd <br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; ts = $thj + $thd <br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp; =  $ts <br>";
    echo "Jadi total harga penjualan seluruh jambu dan dus adalah Rp $ts. <br>";
    echo "==========================================================";

?>