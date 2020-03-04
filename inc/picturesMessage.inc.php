<?php
if (isset($_GET['pictures1'])) {
    //radio choice of pictures
    $pictures = $_GET['pictures1'];
    if ($_GET['pictures1'] == strtolower("yes")) {
        echo "<p>Display menu pictures</p>";
    } elseif ($_GET['pictures1'] == strtolower("no"))
        echo "<p>Do not display menu pictures</p>";
}
?>