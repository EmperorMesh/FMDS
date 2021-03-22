<?php
private function generatePassword()
{​​​​​​​​
$sets = array();
$sets[] = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
$sets[] = 'abcdefghjkmnpqrstuvwxyz';
$sets[] = '23456789';
$password = "";
foreach ($sets as $set) {​​​​​​​​
$password .= $set[array_rand(str_split($set))];
}​​​​​​​​
while (strlen($password) < 8) {​​​​​​​​ $randomSet=$sets[array_rand($sets)]; $password .=$randomSet[array_rand(str_split($randomSet))]; }​​​​​​​​ $specialCharacters='!@#%&?' ; $randomSpecialChar=substr(str_shuffle($specialCharacters), 0, 1); return str_shuffle($password . $randomSpecialChar); 
}​​​​​​​​
?>