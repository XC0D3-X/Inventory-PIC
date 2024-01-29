<?php 
include_once('layouts/header.php'); 
include_once('search.php');
include_once('config.php');

$tableName = 'mk2'; // Default table name
$search = isset($_GET['search']) ? $_GET['search'] : '';

$entries = isset($_GET['entries']) ? $_GET['entries'] : 10;

$result = performSearch($tableName, $search, $entries, $mysqli);

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc'; // Default: Ascending order


// Pagination logic
$limit = $entries;
$start = ($page - 1) * $limit;
$totalPages = ceil(mysqli_num_rows($result) / $limit);
$result = mysqli_query($mysqli, "SELECT * FROM $tableName LIMIT $start, $limit");


// Update SQL query to include sorting
$sql = "SELECT * FROM $tableName";
if ($sort == 'asc') {
    $sql .= " ORDER BY item_id ASC";
} elseif ($sort == 'desc') {
    $sql .= " ORDER BY item_id DESC";
}
$sql .= " LIMIT $start, $limit";

$result = mysqli_query($mysqli, $sql);

?>

<style>
    .add-btn {
        width: 150px;
        transition: box-shadow 0.5s;
    }

    .add-btn:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .breadcrumb {
        background-color: #E1E1E1;
    }
</style>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">List Item</li>
    </ol>
</nav>

<div class="col-md-12 col-12">
    <h1>List Item</h1>
    <p>Manage all hardware in Makmal Komputer 2</p>
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
    <div class="row">
        <div class="col-md-8">
            <form method="get" action="">
                <label for="entries">Show:</label>
                <select id="entries" name="entries" onchange="this.form.submit()">
                    <option value="10" <?php if ($entries == '10') echo 'selected'; ?>>10 entries</option>
                    <option value="25" <?php if ($entries == '25') echo 'selected'; ?>>25 entries</option>
                    <option value="50" <?php if ($entries == '50') echo 'selected'; ?>>50 entries</option>
                    <option value="100" <?php if ($entries == '100') echo 'selected'; ?>>100 entries</option>
                    <option value="1000" <?php if ($entries == '1000') echo 'selected'; ?>>All</option>
                </select>
                <label for="sort">Sort by ID:</label>
        <select id="sort" name="sort" onchange="this.form.submit()">
            <option value="asc" <?php if ($sort == 'asc') echo 'selected'; ?>>Ascending</option>
            <option value="desc" <?php if ($sort == 'desc') echo 'selected'; ?>>Descending</option>
        </select>
            </form>

            <form method="get" action="">
                <label for="search">Search:</label>
                    <input type="text" id="search" name="search" placeholder="Enter search keyword">
                    <input type="submit" value="Search">
            </form>
        </div>

        <div class="col-md-4 text-right">
            <button type="button" class="btn btn-secondary btn-lg add-btn" data-toggle="modal" data-target="#addItemModal">
                <span class="glyphicon glyphicon-plus-sign"></span> Add Item
            </button>
            </div>
    </div>
    
<!-- add item -->
<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="form-horizontal" id="addItemModalLabel" action="php_action/addItem.php" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Item</h4>
                </div>
                <div class="modal-body">

                <!-- Hidden input for table name -->
                <input type="hidden" name="tableName" value="mk2">

                    <div class="form-group">
                        <label for="item_id" class="col-sm-4 control-label">Item ID: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="item_id" placeholder="Item Id" name="item_id" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="item_name" class="col-sm-4 control-label">Item Name: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="item_name" placeholder="Item Name" name="item_name" autocomplete="off" required>
                        </div>
                    </div> <!-- /form-group-->
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">Status: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="status" name="status" required>
                                <option value="">~~SELECT~~</option>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                        </div>
                    </div> <!-- /form-group-->
                </div> <!-- /modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>

                    <button type="submit" class="btn btn-primary" id="addItemBtn" autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                </div> <!-- /modal-footer -->
            </form> <!-- /.form -->
        </div> <!-- /modal-content -->
    </div> <!-- /modal-dailog -->
</div>
<!-- /add item -->

                <?php if (mysqli_num_rows($result) > 0): ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th> Hardware Name </th>
                                <th class="text-center" style="width: 15%;"> Status</th>
                                <th class="text-center" style="width: 15%;"> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($res = mysqli_fetch_array($result)):?>
                                <tr>
                                    <td><?php echo $res['item_id']; ?></td>
                                    <td><?php echo $res['item_name']; ?></td>
                                    <td><?php echo $res['status']; ?></td>
                                    <td>
                                        <center>
                                            <!-- Update Item button -->
                                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#updateItemModal" onclick="openUpdateForm('<?php echo $res['item_id']; ?>', '<?php echo $res['item_name']; ?>', '<?php echo $res['status']; ?>')">Update</button>
                                            <button type="button" class="btn btn-danger btn-md delete-btn" data-toggle="modal" data-target="#deleteItemModal" data-id="<?php echo $res['item_id']; ?>">Delete</button>

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

<!-- delete form -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteItemModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Brand</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeCategoriesFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeCategoriesBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- /delete form -->

<!-- Update form -->
<div class="modal fade" id="updateItemModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="updateItemForm" action="php_action/editItem.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"><i class="fa fa-pencil"></i> Update Item</h4>
                </div>
                <div class="modal-body">

                    <!-- Hidden input for table name -->
                    <input type="hidden" name="tableName" value="mk2">

                    <div class="form-group">
                        <label for="updateItemId" class="col-sm-4 control-label">Item ID: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="updateItemId" readonly name="item_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="updateItemName" class="col-sm-4 control-label">Item Name: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="updateItemName" name="item_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="updateItemStatus" class="col-sm-4 control-label">Status: </label>
                        <label class="col-sm-1 control-label">: </label>
                        <div class="col-sm-7">
                            <select class="form-control" id="updateItemStatus" name="status" required>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="glyphicon glyphicon-remove-sign"></i> Close
                    </button>
                    <button type="submit" class="btn btn-primary" id="updateItemBtn" name="update">
                        <i class="glyphicon glyphicon-ok-sign"></i> Update Item
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<<<<<<< Updated upstream
=======
<button onclick="openPrintWindow('mk2')">Print Report</button>
>>>>>>> Stashed changes

<script src="custom/report.js"></script>

<script src="editItem.js"></script>
<script src="addItem.js"></script>

<?php include_once('layouts/footer.php'); ?>
