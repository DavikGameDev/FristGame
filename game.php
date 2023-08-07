<?php
echo "Welcome To My Game\n";
while (true){
echo "====== Game Tebak Angka ======\n";
echo "Tebak Sebuah angka antara 1 dan 9!\n";
$computer = rand(1,9);
echo "Masukan Tebakanmu : ";
$player = trim(fgets(STDIN));
if($player == $computer){
	echo "Menang. angka komputer adalah $computer.\n";
	exit;
}else{
	echo "Kalah. angka komputer adalah $computer.\n";
}
}