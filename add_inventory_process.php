<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];

    // Perform database insertion
    $insert_query = "INSERT INTO mk3 (item_name, quantity, status) VALUES ('$item_name', '$quantity', '$status')";
    $result = mysqli_query($mysqli, $insert_query);

    if ($result) {
        echo "Inventory added successfully!";
    } else {
        echo "Error adding inventory: " . mysqli_error($mysqli);
    }
}
?>
