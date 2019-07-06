<?php 
	echo "<h1>Hello PHP</h1>";
	echo "<br>";
	$userName = 'canh';
	$password = '12123123';

	echo $userName;
	echo "<br>";
	echo $password;

	// In ra bang cuu chuong tu 2 den 9
	//
	echo "<br>";
	$count = 1;
	$row = 12;
	for ($i = 0; $i < $row; $i++) {
		for ($j = 0; $j <= $i; $j++) {
			echo $count++."&nbsp&nbsp";
		}
		echo "<br>";

	}
?>
Bang cuu chuong 2
2 x 1 = 2
2 x 2 = 4
...
Bang cuu chuong 3
3 x 1 = 3
3 x 2 = 6
...
Bang cuu chuong 9
9 x 8 = 72
9 x 9 = 81
9 x 10 = 90


Ve tam giac nhu mau
    1
    2 3
    4 5 6
    7 8 9 10
    11 12 13 14 15
    16 17 18 19 20 21
    22 23 24 25 26 27 28