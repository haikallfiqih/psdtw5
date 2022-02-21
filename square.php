<?php

if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $result = sqrt($number);
} else {
    $number = 1;
    $result = 1;
}

echo "$number is $result";
?>
