<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <?php
    include 'conn.php';
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_type = $_POST['user_type'];

    $email_search="select * from registration where email='$email' && user_type = '$user_type'";
    $query=mysqli_query($conn, $email_search);

    $email_count=mysqli_num_rows($query);

    if ($email_count) {
        $email_pass=mysqli_fetch_assoc($query);

        // $db_pass=$email_pass['password'];
        // $pass_decode=password_verify($password, $db_pass);

        if ($db_pass=$email_pass['password']) {
            echo "login successful";
            echo "<script>alert('login successful!!');</script>";
        } else {
            echo "<script>alert('password incorrect!!');</script>";
        }
    } else {
        echo "<script>alert('invalid email address!!');</script>";
    }
}


?>
    <h1>login page</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <div>
            <input type="email" name="email" placeholder="email Address">
        </div>
        <div>
            <input type="password" name="password" placeholder="Create password">
        </div>
        <div>
        <div class="input-group">
      <label>User type</label>
      <select name="user_type" id="user_type" >
        <option value=""></option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>
            <button type="submit" name= "submit">Login now</button>
        </div>
        <p class="text-center">Not Have an account?<a href="singup" </a></p>
    </form>

</body>

</html>