# PHP Integer Overflow Bug
This repository demonstrates a common integer overflow bug in PHP and its solution. The original code attempts to sum an array of numbers, but it fails when the sum exceeds PHP's maximum integer value (PHP_INT_MAX).  This results in unexpected behavior, often leading to incorrect results or program crashes. The solution adds checks to handle potential integer overflow.

## Bug
The `calculateSum` function in `bug.php` does not handle potential integer overflow.  When the sum of the numbers exceeds `PHP_INT_MAX`, the result will be incorrect.  
## Solution
The corrected `calculateSum` function in `bugSolution.php` includes checks for `is_nan()` and `is_infinite()` to detect and handle potential integer overflow scenarios. 
