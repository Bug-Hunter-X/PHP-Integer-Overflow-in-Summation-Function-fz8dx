```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
    //This line is missing in the original code
    if(is_nan($sum) || is_infinite($sum)) {
        return 0; //Handle potential overflow
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, PHP_INT_MAX, 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum;
```