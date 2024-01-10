<?php
include_once("config.php");

function performSearch($tableName, $searchQuery, $entries, $mysqli) {
    $query = "SELECT * FROM $tableName";
    if (!empty($searchQuery)) {
        $search = mysqli_real_escape_string($mysqli, $searchQuery);
        $query .= " WHERE item_id LIKE '%$search%'";
    }
    $query .= " ORDER BY item_id LIMIT $entries";

    $result = mysqli_query($mysqli, $query);
    return $result;
}
?>
