<?php
include_once 'database.php';
$sql = "DELETE FROM user WHERE sno='" . $_GET["sno"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>