<?php
if (isset($_GET['font'])) {
    $font = isset($_GET['font']);
    echo "<p>Use a {$_GET['font']} font color</p>";
}

?>