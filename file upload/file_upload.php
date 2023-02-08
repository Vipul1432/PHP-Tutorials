<?php
if (isset($_POST['upload'])) {
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    move_uploaded_file($file_tmp, "image/".$file_name);
}
?>

<html>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="" /><br><br>
        <input type="submit" name = "upload" />
    </form>
</body>
</html>