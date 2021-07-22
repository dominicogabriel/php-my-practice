<?php
require('config/config.php');
require('config/db.php');

// Check for Submit
if (isset($_POST['submit'])) {
    // Form Data Get
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['title']);

    $query = "INSERT INTO posts(title, author, body) VALUES('$title, $author, $body')";
    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR:  ' . mysqli_error(($conn));
    }
}

?>

<?php include('inc/header.php'); ?>
<div class="container">
    <h1>Add Posts</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
<?php include('inc/footer.php'); ?>