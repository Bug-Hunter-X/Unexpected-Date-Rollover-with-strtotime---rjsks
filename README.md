# PHP strtotime() Date Rollover Bug

This repository demonstrates a subtle bug in PHP's `strtotime()` function. When given an invalid date (e.g., April 31st), instead of throwing an error, it rolls over to the next valid date. This behavior can lead to unexpected and difficult-to-debug issues in applications that rely on accurate date processing.

The `bug.php` file showcases the problematic behavior. The `bugSolution.php` file provides a solution using DateTime objects to handle date validation more robustly.