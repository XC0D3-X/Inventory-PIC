<?php 
include_once('layouts/header.php'); 
include_once("search.php");
include_once("config.php");

$tableName = 'mk3'; // Default table name
$search = isset($_GET['search']) ? $_GET['search'] : '';
if (isset($_GET['table'])) {
    $tableName = $_GET['table'];
}
$entries = isset($_GET['entries']) ? $_GET['entries'] : 10;

$result = performSearch($tableName, $search, $entries, $mysqli);
?>

<a href="javascript:history.go(-1)" class="btn btn-primary btn-lg glyphicon glyphicon-arrow-left"></a>
<div class="col-md-12 col-12">
    <h1>List Item</h1>
    <p>Manage all hardware in Makmal Komputer 3</p>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>All Item</span>
                </strong>
            </div>
            <div class="panel-body">

            <form method="get" action="">
                    <label for="entries">Show:</label>
                    <select id="entries" name="entries" onchange="this.form.submit()">
                        <option value="10" <?php if($entries == '10') echo 'selected'; ?>>10 entries</option>
                        <option value="25" <?php if($entries == '25') echo 'selected'; ?>>25 entries</option>
                        <option value="50" <?php if($entries == '50') echo 'selected'; ?>>50 entries</option>
                        <option value="100" <?php if($entries == '100') echo 'selected'; ?>>100 entries</option>
                    </select>
                </form>
                
                <form method="get" action="">
                    <label for="search">Search:</label>
                    <input type="text" id="search" name="search" placeholder="Enter search keyword">
                    <input type="submit" value="Search">
                </form>

                <?php if (mysqli_num_rows($result) > 0): ?>
                    <table class="table table-bordered table-striped">
                        <!-- Table headers -->
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th> Hardware Name </th>
                                <th class="text-center" style="width: 15%;"> Status</th>
                                <th class="text-center" style="width: 15%;"> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($res = mysqli_fetch_array($result)): ?>
                                <tr>  
                                    <td><?php echo $res['item_id']; ?></td>
                                    <td><?php echo $res['item_name']; ?></td>
                                    <td><?php echo $res['status']; ?></td>
                                    <td>
                                        <center>
                                            <button class="btn btn-primary btn-md" onclick="openUpdateForm('<?php echo $res['item_id']; ?>', '<?php echo $res['item_name']; ?>', '<?php echo $res['status']; ?>')">Update</button>
                                        </center>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No results found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Update form -->
<div id="updateForm" style="display: none;">
    <h2>Update Item</h2>
    <form method="post" action="">
        <input type="text" id="updateItemId" readonly name="item_id">
        <label for="updateItemName">Item Name:</label>
        <input type="text" id="updateItemName" name="item_name">
        
        <label for="updateItemStatus">Status:</label>
        <input type="text" id="updateItemStatus" name="status">
        
        <input type="submit" name="update" value="Update Item">
    </form>
</div>

<script>
    function openUpdateForm(itemId, itemName, status) {
        // Set the item details in the update form
        document.getElementById("updateItemId").value = itemId;
        document.getElementById("updateItemName").value = itemName;
        document.getElementById("updateItemStatus").value = status;
        document.getElementById("updateForm").style.display = "block";
    }
</script>

<?php

if (isset($_POST['update'])){
    $item_id=$_POST['item_id'];
    $item_name=$_POST['item_name'];
    $status=$_POST['status'];
    $result = mysqli_query($mysqli,"UPDATE mk3 SET item_id='$item_id', item_name='$item_name', status='$status' WHERE item_id='$item_id'") or die (mysqli_connect_error());
    mysqli_close($mysqli);
}

?>


<?php include_once('layouts/footer.php'); ?>
