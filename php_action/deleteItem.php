<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $itemId = $_POST['item_id'];

    // Perform the deletion (you may want to add additional validation)
    $sql = "DELETE FROM $tableName WHERE item_id = '$itemId'";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo 'Item deleted successfully';
    } else {
        echo 'Error deleting item';
    }
} else {
    echo 'Invalid request';
}
?>
