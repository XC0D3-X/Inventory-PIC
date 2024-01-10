<?php 
include_once('layouts/header.php'); 
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM mk3 ORDER BY item_id");

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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">No</th>
                            <th> Hardware Name </th>
                            <th class="text-center" style="width: 15%;"> Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($res = mysqli_fetch_array($result)) {
                            echo "<tr>";  
                            echo "<td>".$res['item_id']."</td>"; 
                            echo "<td>".$res['item_name']."</td>";
                            echo "<td>".$res['status']."</td>";
                            // $fileNames = explode(",", $res['nama']); // Assuming files are comma-separated
                            // echo "<td>";
                            // foreach ($fileNames as $fileName) {
                            //     $fileLocation = "view/" . $fileName;
                            //     echo date("F d Y H:i:s.", filemtime($fileLocation)) . "<br>";
                            // };
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>
