<?php
include_once 'config.php';


if($_POST) {
    $itemName = $_POST['item_name'];
    $itemId = $_POST['item_id'];
    $itemStatus = $_POST['status'];
    $tableName = $_POST['tableName'];

    $result = mysqli_query($mysqli, "INSERT INTO $tableName (item_id, item_name, status) VALUES ('$itemId', '$itemName', '$itemStatus')");
    // Execute the query and handle success/error messages
    mysqli_close($mysqli);

} // /if $_POST
?>