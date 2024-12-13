<?php
define('API_KEY', 'dimas');

if (isset($_GET['key'])) {
    $inputKey = $_GET['key'];
    if ($inputKey === API_KEY) {
        echo "Kunci API valid!";
    } else {
        echo "Kunci API tidak valid!";
    }
} else {
    echo "Kunci API tidak diberikan!";
}
?>
