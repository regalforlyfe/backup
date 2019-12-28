<?php
    session_start();
	error_reporting(0);
	$arr = array();
	$arr[] = $_POST['bilangan'];
	array_push($arr, $_POST['bilangan'])
?>

<html>
    <body>
        <form method="POST">
            bilangan<input type="text" name="bilangan" autofocus>
            <input type="submit" name="submit">
            <input type="submit" name="logout" value="hapus data">
        </form>
        <table border="1">
            <tr>
                <td>bilangan</td>	
                <td>Harga</td>
            </tr>
			<?php
            foreach ($arr as $key => $value){
			?>
			<tr>
                <td><?php echo "bilangan ke-$key "?></td>
                <td style="text-align:right"><?=$value?></td>
            </tr>
			<?php
            }
			?>
				
			<tr>
                <td><b>total</b></td>
                <td style="text-align:right"><?=$value?></td>
            </tr>
        </table>
    </body>
</html>

