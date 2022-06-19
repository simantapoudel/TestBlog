<?php 

declare(strict_types = 1);

include 'autoload.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        $calcObj = new Calculator((int)$num1, (int)$num2, $op);
        echo $calcObj->Calculator();
    }
}