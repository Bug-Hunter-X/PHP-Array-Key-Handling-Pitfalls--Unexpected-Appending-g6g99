In PHP, a common yet easily overlooked error involves improper handling of array keys, especially when dealing with numerical keys.  Consider this scenario:

```php
$myArray = [1 => 'one', 2 => 'two'];
$myArray[] = 'three'; // Appends with a numeric key, likely not what you expect

print_r($myArray);
```

The output might not be what you anticipated. `'three'` is added with the next available numerical key, which is now `3`, not replacing an existing element. This behavior can lead to unexpected array structures and logic errors.