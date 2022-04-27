<?php

    $nama = "Browny";
    $umur = "14";
    $tinggi = 3.5;

    // $kalimat = "Halo, nama saya $nama, umur saya $umur, dan tinggi badan saya adalah $tinggi";

    // echo $kalimat; 

    // percabangan if-else

  /*  if($nama == "Browny")
    {
        echo "Benar itu Browny";
    } else {
        echo "Kamu siapa?";
    }
*/
    // percandangan switch
/*
    switch($nama) {
        case "Browny":
        echo "Benar itu Browny";
        break;
        default:
        echo "Kamu siapa?";

    }
    */

    // ternary operator
        /*
     $kalimat = $nama == "Browny" ? "Benar itu Browny" : "Kamu siapa?"; 
     
     echo $kalimat;
     */

  // perulangan for
/*
  for($i=0; $i <= 10; $i++) {
      echo "Ini adalah perulangan ke-$i";
      echo "<br/>";
    }
*/

// perulangan while
/*
$i = 0;
while($i <= 10) {
    echo "Ini adalah perulangan ke-$i";
    echo "<br/>";
    $i++;
}
*/

// perulangan do while 
/*
$i = 10;

do {
    echo "Ini adalah perulangan ke-$i";
    echo "<br/>";
    $i--;
} while($i > 0);
*/

// perulangan foreach + built-in function
/*
$nama = array("Ega" => 25000000, 
"Nazif" => 10000000,
 "Gus Pur" => 48000000, 
 "Maulana" => 735600000, 
 "Abdul Wahid" => 562017003000000, 
 "Herlina" => 4520000000, 
 "Dea" => 45200000000);

foreach ($nama as $sebutan => $nilai) {
    echo "Nama saya adalah $sebutan nilai buruan saya adalah Rp ".number_format($nilai, 2, ".", ",");
    echo "<br/>";
}
*/


// user-defined function
/*
function sebut_nama($nama) {
    $sebut = "Halo, nama saya $nama";
    return $sebut;
}

echo sebut_nama("Nurfadhilah");
*/

// built-in function
/*
echo  strlen("Halo, nama saya $nama");
*/

?>