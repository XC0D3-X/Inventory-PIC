<?php
include_once("config.php");

if (isset($_GET['id'])) {
    $location_id = $_GET['id'];

    switch ($location_id) {
        case 1:
            header("Location: Makmal-Komputer2.php");
            break;
        case 2:
            header("Location: Makmal-Komputer3.php"); 
            break;
        case 3:
            header("Location: Makmal-Komputer4.php");
            break;

        default:
            echo "Location ID not found.";
            break;
    }
} else {
    echo "Invalid location ID.";
}
?>
