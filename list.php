<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<form action="action_page.php" method='post' enctype="multipart/form-data">
  <div class="container">
    <h1 class='text-center'>List</h1><a href='register.php' class='btn btn-success text-right'>Add</a>
    <hr>
    <div class='row'>
        <div class='col-md-12 table-responsive'>
            <table class='table'>
                <thead>
                    <tr>
                        <td>Sno</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Mobile NO</td>
                        <td>State</td>
                        <td>City</td>
                        <td>Address</td>
                        <td>Pincode</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     include 'connect.php';
                    $result = mysqli_query($conn, 'select * from user');
                //     $row = mysqli_fetch_assoc($result);
                //    echo'<pre>'; print_r($result);
                    if(mysqli_num_rows($result) > 0){   while($row = mysqli_fetch_array($result)){
                    ?>
                <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['mobile']?></td>
                        <td><?php echo $row['state']?></td>
                        <td><?php echo $row['city']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['pincode']?></td>
                        <td><img src='<?php echo 'uploads/'.$row['image']?>' style='width:40px'></td>
                        <td><a class='btn btn-info' href="edit.php?id=<?php echo $row['id'] ?>">Edit</a><a class='btn btn-danger' href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                    </tr>
                    <?php }}?>
                </tbody>
            </table>
        </div>
    
    </div>

    
    

    


  </div>
  


</body>
</html>
