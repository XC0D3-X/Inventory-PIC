<?php 
include_once('layouts/header.php'); 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM list ORDER BY no_id");

?>
<div class="col-md-12 col-12">
    <h1>List Location</h1>
    <p>Manage all items based on location</p>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>All Location</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">No</th>
                            <th> Location Name </th>
                            <th class="text-center" style="width: 15%;"> Last Update</th>
                            <th class="text-center" style="width: 15%;"> :::: </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($res = mysqli_fetch_array($result)) {
                            echo "<tr>";  
                            echo "<td>".$res['no_id']."</td>"; 
                            echo "<td>".$res['nama']."</td>"; 
                            echo "<td></td>"; 
                            echo "<td><center><a href=\"view_location.php?id=".$res['no_id']."\" class=\"btn btn-sm btn-warning\">View</a></center></td>"; // Pass the location ID to view_location.php
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                
                <button onclick="openPrintWindow()">Print Report</button>

                <script src="custom/report.js"></script>
            </div>
        </div>
    </div>
</div>
<button onclick="openPrintWindow()" class="btn-primary printbtn btn">Print Report</button>
<?php include_once('layouts/footer.php'); ?>
