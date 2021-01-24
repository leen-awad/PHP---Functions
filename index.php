<?php

// 1. Write a function to calculate the factorial of a number (a non-negative integer).
function factorial($x)
{
  if($x ==0)
    {
	   return 1;
    }
  else 
    {	
	   return $x * factorial($n-1);
    }
	}
print_r(factorial(4));




// 2. Write a function to check whether a number is prime or not.
// Note: A prime number (or a prime) is a natural number greater than 1 that has no
// positive divisors other than 1 and itself.
function Prime($n)
{
 for($i=2; $i<$n; $i++)
   {
      if($n %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
if ($a==0)
echo 'This is not a Prime Number';
else
echo 'This is a Prime Number';


// 3. Write a function to reverse a string.
function reverse($string)
{
 $r = strlen($string);
 if($r == 1)
   {
    return $string;
   }
 else
   {
   $n--;
   return reverse(substr($string,1, $r)) . substr($string, 0, 1);
   }
}
print_r(reverse('1234'));


// 4. Write a function to sort an string array depending on the alphabetical order .







// 5. Write a PHP function that checks whether a string is all lowercase.

function lowercase($letter1)
   {
    for ($i = 0; $i < strlen($letter1); $i++) {
	      if (ord($letter1[$i]) >= ord('A') &&
          ord($letter1[$i]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
var_dump(lowercase('abc def ghi'));
var_dump(lowercase('abc dEf ghi'));



// 6. Write a PHP function that checks whether a passed string is a palindrome or
// not?
// A palindrome is a word, phrase, or sequence that reads the same backward as
// forward, e.g., madam or nurses run.


function palindrome($letter) 
{
  if ($letter == strrev($letter))
      return 1;
  else
	  return 0;
}
echo palindrome('madam')."\n";



// 7-Write a PHP program to find three numbers from an array such that the sum of
// three consecutive numbers equal to a given number.
// Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))
function sum_numbers($array, $target)
{
$count = count($array) - 2;
$result=[];
for ($i = 0; $i < $count; $i++) {
    if ($array[$i] + $array[$i+1] + $array[$i+2] == $target) {
        array_push($result, "{$array[$i]} + {$array[$i+1]} + {$array[$i+2]} = $target");
    }
}
return $result;
}
$my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
print_r(sum_numbers($my_array, 16));
print_r(sum_numbers($my_array, 11));
print_r(sum_numbers($my_array, 12));
?>