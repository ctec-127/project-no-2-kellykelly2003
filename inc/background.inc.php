<?php

if (isset($_GET['bgcolor'])) {
    $bgcolor = isset($_GET['bgcolor']);
    echo "<p>Use a {$_GET['bgcolor']} background color</p>";
} 

?>