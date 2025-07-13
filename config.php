<?php
require('stripe-php-master/init.php');

$publishableKey=
"pk_test_51OH5rmSJwcMuKnNeUOhqj2SwGB5WRjVzlS9Enm36InKKZ0CTSIaECeybc0sVaHAD1yUJG2njNW9r9GblMjJvsXse00wgZWvkE2";

$secretKey=
"sk_test_51OH5rmSJwcMuKnNeyI9GG0BXV274NLhIa92ZXlpJr8ZGyeCywB7Sn0pGvxwlQnRMGZ0zBFUd6oICtq9HeB1gFWJK00S19kAaDo";

\Stripe\Stripe::setApiKey($secretKey);
?>