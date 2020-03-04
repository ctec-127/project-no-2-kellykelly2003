<?php

if (isset($_GET['pictures1'])) {
    //radio choice of pictures
    $pictures = $_GET['pictures1'];
    if ($_GET['pictures1'] == strtolower("yes")) {
    echo "<img src='img/salad.jpg' alt='Salad menu picture' height='250'>";
    echo "<img src='img/breakfast.jpg' alt='Breakfast menu picture' height='250'>";
    echo "<img src='img/entree.jpg' alt='Entree menu picture' height='250'>";
}
}
?>