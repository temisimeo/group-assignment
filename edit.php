<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = mysqli_query($con, "SELECT * FROM talents WHERE id = $id");
    $data = mysqli_fetch_assoc($query);
} else {
    echo "Invalid ID.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($con, $_POST['talent_title']);
    $desc = mysqli_real_escape_string($con, $_POST['description']);
    $update = mysqli_query($con, "UPDATE talents SET talent_title='$title', description='$desc' WHERE id=$id");

    if ($update) {
        header("Location: description.php");
        exit();
    } else {
        echo "Update failed.";
    }
}
?>

<?php include 'link.php'; ?>

<div class="container">
    <h2>Edit Talent</h2>
    <form method="post">
        <div class="form-group">
            <label>Talent Title:</label>
            <input type="text" name="talent_title" class="form-control" value="<?php echo $data['talent_title']; ?>" required>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea name="description" class="form-control" rows="5" required><?php echo $data['description']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="view.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
