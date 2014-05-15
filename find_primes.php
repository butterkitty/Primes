<?php 
solution(1,500);
function solution($A,$B) {
	if ($A <= $B) {
		$count = 0;
		foreach (range($A, $B) as $num) {
    		if (isPrime($num)) { $count++; }
		}
		echo "There are ". $count ." prime numbers between ". $A ." and ". $B;
	}	
	
}
function isPrime($num) {
    if($num == 1) //1 Can never be prime so remove that
        return false;
    
    if($num == 2) //2 Is the only prime number that is even
        return true;

    if($num % 2 == 0) { //Any number that is divisible by 2 (besides 2) is not a prime number
        return false;
    }

    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) { //Eliminate all the odd numbers.  If any of them are factors then return false
        if($num % $i == 0) { return false; }
    }

    return true;
}
?>