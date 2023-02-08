<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" charset="utf8"
        src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        <style>
            th {
                text-align: left;
                background-color: #dbdee2;
                color: black;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-warning text-center"> Display Table Data </h1>
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">


                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Title</th>
                    <th colspan="3" text-align="left";>Created</th>
                    <!-- <th>delete</th>
                    <th>updated</th> -->



                </tr>
                <?php

                include 'conn.php';
                $q ="select * from employeetable ";

                $query = mysqli_query($conn,$q);

                while($res = mysqli_fetch_array($query)){
                ?>
                <tr class="text-center">
                    <td> <?php echo $res['id'];  ?> </td>
                    <td> <?php echo $res['name'];  ?> </td>
                    <td> <?php echo $res['email'];  ?> </td>
                    <td> <?php echo $res['phone']; ?> </td>
                    <td> <?php echo $res['title']; ?> </td>
                    <td> <?php echo $res['created'];?> </td>

                    <td> <button class="btn btn-info"> <a href="update.php?id=<?php echo $res['id']; ?>"
                                class="text-white"> <i class="fa-solid fa-pen"></i></a> </button> </td>

                    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>"
                                class="text-white"><i class="fa fa-trash"></i></a> </button> </td>
                    

                </tr>

                <?php 

                }
  ?>

            </table>

        </div>
    </div>



</body>