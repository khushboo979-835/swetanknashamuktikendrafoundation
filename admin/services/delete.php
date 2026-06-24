<?php
include("../common/config.php");
include("../auth_check.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM services WHERE id = '$id'";
    if ($conn->query($sql)) {
        header("Location: index.php?msg=deleted");
    } else {
        header("Location: index.php?error=failed");
    }
} else {
    header("Location: index.php");
}
?>
