<?php 
include_once('layouts/header.php'); 
include_once("config.php");

$table_name = ""; // Initializing $table_name variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemName = $_POST['item_name'];
    $itemId = $_POST['item_id'];
    $table_name = $_POST['table_name'];

    // Set default status value
    $status = "OK";

    $result = mysqli_query($mysqli, "INSERT INTO $table_name (item_id, item_name, status) VALUES ('$itemId', '$itemName', '$status')");
    // Execute the query and handle success/error messages
}
?>

<!-- add inventory form  -->
<form method="post" action="">
    <label for="itemName">Item Name :</label>
    <input type="text" id="item_name" name="item_name" required><br><br>

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

    <input type="submit" value="Add Inventory">
</form>

<?php include_once('layouts/footer.php'); ?>
