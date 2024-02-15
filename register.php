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
    <h1 class='text-center'>Register</h1>
    <hr>
    <div class='row'>

    <div class='col-md-6 p-3'><label for="name"><b>Name</b></label></div>
        <div class='col-md-6 p-3'><input type="text" placeholder="Enter Name" class='form-control' name="name" id="name" required></div>

        <div class='col-md-6 p-3'><label for="email"><b>Email</b></label></div>
        <div class='col-md-6 p-3'><input type="email" placeholder="Enter Email" name="email" class='form-control' id="email" required></div>

        <div class='col-md-6 p-3'><label for="mobile"><b>Mobile</b></label></div>
        <div class='col-md-6 p-3'><input type="text" placeholder="Enter Mobile" class='form-control' name="mobile" id="mobile" required></div>

        <div class='col-md-6 p-3'><label for="state"><b>State</b></label></div>
        <div class='col-md-6 p-3'><input type="text" placeholder="Enter state" name="state" class='form-control' id="state" required></div>

        <div class='col-md-6 p-3'><label for="city"><b>City</b></label></div>
        <div class='col-md-6 p-3'><input type="text" placeholder="Enter City" class='form-control' name="city" id="city" required></div>

        <div class='col-md-6 p-3'><label for="address"><b>Address</b></label></div>
        <div class='col-md-6 p-3'><textarea rows='3' placeholder="Enter address" name="address" class='form-control' id="address" required></textarea></div>

        <div class='col-md-6 p-3'><label for="pincode"><b>Pin Code</b></label></div>
        <div class='col-md-6 p-3'><input type="number" placeholder="Enter pin Code" class='form-control' name="pincode" id="pincode" required></div>

        <div class='col-md-6 p-3'><label for="image"><b>Profile Image</b></label></div>
        <div class='col-md-6 p-3'><input type="file"  name="image" class='form-control' id="image" required></div>


        <div class='col-md-12 p-3'>    <input type="submit" name='form_submit' class="btn btn-success" value='Register'></div>

    </div>

    
    

    


  </div>
  
</form>

</body>
</html>
