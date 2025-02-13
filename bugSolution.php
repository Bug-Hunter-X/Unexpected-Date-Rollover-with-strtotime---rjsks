```php
$dateString = '2024-04-31';

try {
    $date = new DateTime($dateString);
    echo $date->format('Y-m-d');
} catch (Exception $e) {
    echo "Invalid date: " . $e->getMessage();
}
```