<?php
include 'conn.php';
if(isset($_POST['done'])){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $created=$_POST['created'];

    $sql= "INSERT INTO mydb.usertable(id,fname,lname, email, phone, gender, created) VALUES($id,'$fname','$lname','$email',$phone,'$gender','$created')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="col-lg-6 m-auto">
        <form action="" method="POST">

            <br><br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">CREAT USER TABLE</h1>

                </div><br>
                <label for="">Id</label>
                <input type="text" name="id" class="form-control"><br>


                <label for="">First Name</label>
                <input type="text" name="fname" required class="form-control"><br>

                <label for="">Last Name</label>
                <input type="text" name="lname" required class="form-control"><br>

                <label for="">Email</label>
                <input type="email" name="email" required class="form-control" required><br>

                <label for="">phone</label>
                <input type="text" name="phone" required class="form-control" required><br>



                <label for="gender"> Gender</label>
                <select name="gender">
                    <option value="none" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                </select><br>

                <label for="">Created At</label>

                <input type="datetime-local" name="created" id="" class="form-control"><br>



                <button class=" btn btn-success" type="submit" name="done">Submit</button><br>



            </div>
        </form>

    </div>

</body>

</html>