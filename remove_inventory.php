<?php 
include_once('layouts/header.php'); 
include_once("config.php");

$table_name = ""; // Initializing $table_name variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemId = $_POST['item_id'];
    $table_name = $_POST['table_name'];

    $result = mysqli_query($mysqli, "DELETE FROM $table_name WHERE item_id='$itemId'");
    if ($result) {
        echo "<script>alert('Item removed successfully');</script>";
    } else {
        echo "<script>alert('Error removing item');</script>";
    }
}
?>

<!-- Remove inventory form  -->
<form method="post" action="">
    <label for="itemId">Item Id :</label>
    <input type="text" id="item_id" name="item_id" required><br><br>

    <label for="table_name">Select Table :</label>
    <select id="table_name" name="table_name">
        <option value="" selected disabled>--Select a table--</option>
        <option value="mk2">Makmal Komputer 2</option>
        <option value="mk3">Makmal Komputer 3</option>
        <option value="mk4">Makmal Komputer 4</option>
        <!-- Add other table options as needed -->
    </select><br><br>

    <input type="submit" value="Remove Inventory">
</form>

<?php include_once('layouts/footer.php'); ?>
