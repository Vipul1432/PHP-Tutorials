<!DOCTYPE html>
<html lang="en">

<head>

    <title>registation form</form>

    </title>
</head>

<body>
    <?php
    include 'conn.php';
    if (isset($_POST['submit'])) {
        $username =mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone=mysqli_real_escape_string($conn, $_POST['phone']);
        $password =mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword= mysqli_real_escape_string($conn, $_POST['cpassword']);

        //$pass=password_hash($password, PASSWORD_BCRYPT, );// FOR THE PASSWORD TO ENCRYPTION
        // $cpass=password_hash($cpassword, PASSWORD_BCRYPT, );

        $emailquery=" select * from registration where email='$email' ";
        $query=mysqli_query($conn, $emailquery);
        $emailcount=mysqli_num_rows($query);
        if ($emailcount>0) {
            echo "email already exists";
        } else {
            if ($password===$cpassword && isset($_POST['user_type'])) {
                $user_type = $_POST['user_type'];
                $query = "INSERT INTO registration (username, email, phone, password, user_type) 
					  VALUES('$username', '$email', '$phone', '$password', '$user_type')";
                mysqli_query($conn, $query);
                echo 'alert("New admin successfully created!!")';
            //header('location: home.php');
            } else {
                $query = "INSERT INTO registration (username, email, phone, password, user_type) 
					  VALUES('$username', '$email', '$phone', '$password','user')";
                mysqli_query($conn, $query);
                echo "<script>alert('New user successfully created!!');</script>";

            //     $insertquery=" insert into registration(username,email,phone,password) values('$username','$email','$phone','$pass')";
            //     $iquery=mysqli_query($conn, $insertquery);
            //     if ($iquery) {
            //         echo "success";
            //     } else {
            //         echo "error";
            //     }
                // } else {
            //     echo "password does not match";
            }
        }
    }

    ?>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <form method="POST" action="">

        <div class="container">
            <div><input name="username" class="form control" placeholder="Full name" type="text" required></div>
            <div><input name="email" class="form control" placeholder="Email Address" type="email" required></div>
            <div><input name="phone" class="form control" placeholder="Enter phone number" type="number" required></div>
            <div><input name="password" class="form control" placeholder="Create a password" type="password" required>
            </div>
            <div><input name="cpassword" class="form control" placeholder="Repeat a password" type="password" required>
            </div>
            <div class="input-group">
      <label>User type</label>
      <select name="user_type" id="user_type" >
        <option value=""></option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
    </div>
            <!-- <div>
                <select class="form-select mb-3" name="role" aria-label="Default select example">
                    <option selected value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div> -->
            <div>
                <button type="submit" name="submit">Create Account</button>
                <p class="text-center">Have an account?<a href="userlogin.php">Log in</a></p>
            </div>
        </div>
    </form>

</body>

</html>