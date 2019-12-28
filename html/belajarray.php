<?php
    $a = array(1,'satu',2,'dua','tiga',3);

    //var_dump($a); //var_dump dan print_r sama sama untuk menampilkan array
    //echo "<br/>";
    print_r($a); //echo hanya bisa menampikan tipe data string dan integer
    echo "<br/>";
    echo $a[1]; //untuk memanggil salah satu index didalam array
    echo "<br/>";

    $b = array('semangka' => "isinya merah", 1 => "rasanya manis", 3 => 3, 'apel' => 2);

    print_r($b);
    echo "<br/>";

    $b[]='value'; //nambahin index array setelah index dengan tipe integer terakhir diarray sebelumnya. int array terakhir 3, tambahan arraynya jadi 4
    $b[4]='value2'; 

    print_r($b);
    echo "<br/>";

    $b[] = $a; //menggabungkan dua array
    print_r($b);
    echo "<br/>";



    //unset($b); menghapus satu array
    //unset($b['index']); menghapus salah satu index saja



    //LATIHAN
    $c = array (1,2,3,4,5);

    $c[]=5;
    //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 5)
    $c[7]=5;
    //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 5 => [7] => 5)
    $c[1]=5;
    //Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [4] => 5 [5] => 5 => [7] => 5)
    $c['satu']=5;
    //Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [4] => 5 [5] => 5 => [7] => 5 [satu] => 5)
    unset($c['sepuluh']);
    //Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [4] => 5 [5] => 5 => [7] => 5 [satu] => 5)
    unset($c[4]);
    //Array ( [0] => 1 [1] => 5 [2] => 3 [3] => 4 [5] => 5 => [7] => 5 [satu] => 5)
    unset($c);
    //semua array $c hilang

?>