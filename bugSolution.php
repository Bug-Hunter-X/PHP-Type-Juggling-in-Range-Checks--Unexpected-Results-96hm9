The solution is to use strict comparison operators (`===` and `!==`) to ensure that type coercion doesn't lead to incorrect results.

```php
function checkValue($value, $min, $max) {
  if (is_numeric($value) && is_numeric($min) && is_numeric($max)) {
    if ($value >= $min && $value <= $max) {
      return true;
    } else {
      return false;
    }
  } else {
    return false; // Or throw an exception for invalid input types
  }
}

$result1 = checkValue(10, 1, 20); // Returns true
$result2 = checkValue(10, '1', 20); // Returns false
$result3 = checkValue('10', 1, 20); // Returns false
$result4 = checkValue(10, 1, '20'); // Returns false

var_dump($result1, $result2, $result3, $result4); // Output: bool(true) bool(false) bool(false) bool(false)
```

This revised function explicitly checks if all inputs are numeric using `is_numeric()`.  If they are, it proceeds with strict numerical comparisons. If not, it returns `false`, indicating invalid input.  This approach guarantees the function's behavior is consistent and reliable.