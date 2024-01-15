<?php
include_once 'config.php';

if ($_POST) {
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $status = $_POST['status'];
    $tableName = $_POST['tableName'];

    $result = mysqli_query($mysqli, "UPDATE $tableName SET item_id='$item_id', item_name='$item_name', status='$status' WHERE item_id='$item_id'") or die(mysqli_connect_error());
    mysqli_close($mysqli);
}
?>