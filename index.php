
<?php
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegistredUser.php';
require_once __DIR__ . '/classes/CreditCard.php';

$food = new Food('Croccantini', 10.20, 10, 'gatto', '2022-10-10');


$user = new User('Francesco', 'Ricchiuti', 'francesco.ricchiuti@gmail.com');
$registred_user = new RegistredUser('Franco', 'Rossi', 'franco.rossi@gmail.com');

try {
    $visa = new CreditCard('4000 4000 4000 4000', '2022-10-10', 'visa', 'Francesco', 'Ricchiuti', 123);
    $user->setCreditCard($visa);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $amex = new CreditCard('1111 1111 1111 1111', '2022-01-10', 'amex', 'Francesco', 'Ricchiuti', 123);
    $registred_user->setCreditCard($amex);
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($user, $registred_user);