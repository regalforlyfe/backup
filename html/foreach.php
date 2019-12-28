<html>
<?php
$a = array(1,'satu',2,'dua','tiga',3);

foreach($a as $key => $value){ //menampilkan 
    echo "$key - $value.<br/>";
}

echo "<br/>";

foreach($a as $key => $value){
    echo "$value.<br/>";
}

?>

<head>
    <title>TABLE ARRAY</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
            foreach ($a as $key => $value){
        ?>
        <tr>
                <td><?php echo $key?></td>
                <td><?=$value?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>