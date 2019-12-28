<html>

<head>
    <title> Table Array php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table class="table" >
        <?php
        $a = array(6876,'dua'=>46,22,232,1245,4282);
        print_r($a);
        sort($a);
        //sort mengurutkan value dari kecil ke besar
        //rsort mengurutkan value dari besar ke kecil
        //asort mengurutkan value dari kecil ke besar tapi key tidak berubah
        //arsort mengurutkan value dari besar ke kecil tapi key tidak berubah
        ?>
        <thead class= "thead-dark">
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>

        <?php
            foreach ($a as $key => $value){
        ?>
        <tbody>
            <tr>
                <td><?php echo $key?></td>
                <td><?=$value?></td>
            </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>    
</body>
</html>
