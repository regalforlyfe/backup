<html>
<?php
    $max = 20;

    //FOR
    for ($i=0; $i <= $max; $i++){
        if($i%2==1){
            echo $i."<br>";
        }
    }

    $i=0;
    //WHILE
    while ($i <= $max){
        if($i%2!=0){
            echo $i."<br>";
        }
        $i++;
    }

    $i=0;
    //DO-WHILE
    do {
        if($i%2!=0){
            echo $i."<br>";
        }
        $i++;

    } while ($i <= $max);


    $data=array('satu','dua','tiga','empat','lima');
    echo "<table border='1'>";
    echo "<tr><td>Nilai Array</td></tr>";
    foreach($data as $hasil){
    echo "<tr><td>$hasil</td></tr>";
    }
    echo "</table>";
?>
