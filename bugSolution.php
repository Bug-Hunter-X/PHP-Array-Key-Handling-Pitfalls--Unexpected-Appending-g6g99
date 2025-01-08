To avoid this unexpected behavior, be explicit when assigning array values using their keys. Instead of the implicit `[]`, use the key directly:

```php
$myArray = [1 => 'one', 2 => 'two'];
$myArray[3] = 'three'; // Explicit key assignment

print_r($myArray);
```

This approach ensures that elements are added at the specified key, providing a more predictable array structure and preventing accidental appends.   For associative arrays, always use string keys for clarity and avoid ambiguity.