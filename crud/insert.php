<?php
include 'conn.php';
if(isset($_POST['done'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $title=$_POST['title'];
    $created=$_POST['created'];


    $sql= "INSERT INTO employeetable(`id`, `name`, `email`, `phone`, `title`, `created`) VALUES($id,'$name', '$email',$phone,'$title','$created')";

    if ($conn->query($sql) === TRUE) {
        header('location:display.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
      

}
?>S












<title></title>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <h1 class="text-white text-center">INSERT OPERATION</h1>

                </div><br>
                <label for="">Id</label>
                <input type="text" name="id" id="" class="form-control"><br>


                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control"><br>

                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control"><br>

                <label for="">Phone</label>
                <input type="text" name="phone" id="" class="form-control"><br>

                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control"><br>

                <label for="">Created</label>
                <input type="datetime-local" name="created" id="" class="form-control"><br>
                <button class=" btn btn-success" type="submit" name="done">Submit</button><br>



            </div>
        </form>

    </div>

</body>

</html>