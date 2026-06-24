<?php
include("../common/config.php");
include("../auth_check.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Optional: Delete physical images too
    /*
    $res = $conn->query("SELECT cover_image, banner, og_image FROM blogs WHERE id = '$id'");
    $blog = $res->fetch_assoc();
    $upload_dir = "../../admin/uploads/blogs/";
    if($blog['cover_image']) unlink($upload_dir . $blog['cover_image']);
    if($blog['banner']) unlink($upload_dir . $blog['banner']);
    if($blog['og_image']) unlink($upload_dir . $og_image);
    */

    $sql = "DELETE FROM blogs WHERE id = '$id'";
    if ($conn->query($sql)) {
        header("Location: index.php?msg=deleted");
    } else {
        header("Location: index.php?error=failed");
    }
} else {
    header("Location: index.php");
}
?>
