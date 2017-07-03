<?php
function random_numbers_with_name($name){
 	return "$name ".mt_rand(6,15);//concatinating name with a random number between 6 & 15
 }
echo random_numbers_with_name("Wingify");//Testing the function.
?>