<?php

if (isset($_GET['border'])) {
    //radio choice of border
    $border = $_GET['border'];
    if ($_GET['border'] == strtolower("solid")) {
        echo "<p>Display A Solid Border</p>";
    } elseif ($_GET['border'] == strtolower("double")){
        echo "<p>Display a double border</p>";
    } elseif ($_GET['border'] == strtolower("none")) {
        echo "<p>Do not display a border</p>";
    } 
}

?> 