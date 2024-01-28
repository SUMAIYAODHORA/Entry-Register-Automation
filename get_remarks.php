<?php
include('includes/dbconn.php'); // Include your database connection script

$visitorId = $_GET['visitorid']; // Assuming you pass the visitor ID from the visitor side

$query = mysqli_query($con, "SELECT remark FROM tblvisitor WHERE ID='$visitorId'");
if ($row = mysqli_fetch_array($query)) {
    $remarks = $row['remark'];
    echo json_encode(['remarks' => $remarks]);
} else {
    echo json_encode(['remarks' => 'No remarks found.']);
}
?>
