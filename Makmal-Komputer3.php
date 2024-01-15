<?php 
include_once('layouts/header.php'); 
include_once('search.php');
include_once('config.php');

$tableName = 'mk3'; // Default table name
$search = isset($_GET['search']) ? $_GET['search'] : '';
if (isset($_GET['table'])) {
    $tableName = $_GET['table'];
}
$entries = isset($_GET['entries']) ? $_GET['entries'] : 10;

$result = performSearch($tableName, $search, $entries, $mysqli);
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
                            <?php
                            while($res = mysqli_fetch_array($result)) {
                                echo "<tr>";  
                                echo "<td>".$res['item_id']."</td>"; 
                                echo "<td>".$res['item_name']."</td>";
                                echo "<td>".$res['status']."</td>";
                                echo "<td>","<center><Update  href=\"edit.php?item_id=".$res['item_id']."\"class=\"btn btn-primary btn-md\">Update</center></td>
                                ";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>No results found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>
