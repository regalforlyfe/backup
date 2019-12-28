<?php
function f1 ($bil) { //cek bilangan ganjil atau genap
    if($bil%2==1){
        echo "ganjil";
    } else {
        echo "genap";
    }
}

function f2 ($bil) {
    if($bil%2==1){
        echo "ganjil";
    } else {
        echo "genap";
    }
    return 0;
}

function f3($bil){ //cek bilangan prima
    $status = "bilangan PRIMA";
        for ($i = 2; $i <= $bil-1; $i++){
            if ($bil % $i == 0) {
        $status = "Bukan bilangan PRIMA";
        break;
        }
    }
        echo $bil." ".$status;
}

echo f1(347283624);
echo "<hr/>";
echo f2(213123214);
echo "<hr/>";
f4(19);
echo "<hr/>";


}



?>