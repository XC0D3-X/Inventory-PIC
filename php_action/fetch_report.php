<?php
include_once 'config.php';
// Fetch data from the database
$sql = "SELECT * FROM mk2";
$result = $mysqli->query($sql);

// Generate HTML content for the report
$html = '<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
<tr>
    <th>ID Item</th>
    <th>Item Name</th>
    <th>Status</th>
</tr>
<tr>';
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
    <td><center>'.$row['item_id'].'</center></td>
    <td><center>'.$row['item_name'].'</center></td>
    <td><center>'.$row['status'].'</center></td>
    </tr>';
}
$html .= '</table>';

// Close the database connection
$mysqli->close();

// Send the HTML content back to the JavaScript
echo $html;
?>
