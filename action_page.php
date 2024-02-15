<?php 
    include 'connect.php';
    $conn = mysqli_connect("localhost","root","",'assi_feb');
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_POST['form_submit'])){
// print_r($_POST);die;
unset($_POST['form_submit']);
        $image ='';
        if(isset($_FILES['image']['name'])){
            move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/'.basename($_FILES["image"]["name"]));
            $image = $_FILES["image"]["name"];
        }

       $sql = "INSERT INTO `user`(`name`, `email`, `mobile`, `state`, `city`, `address`, `pincode`, `image`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['state']."','".$_POST['city']."','".$_POST['address']."','".$_POST['pincode']."','".$image."')";
       if(mysqli_query($conn, $sql)){
            header('location:register.php');
        } else{
            echo "ERROR: Could not able to execute ";
        }
    }



    if(isset($_POST['form_submit2'])){
        unset($_POST['form_submit2']);

        $image ='';
        if(isset($_FILES['image']['name'])){
            move_uploaded_file($_FILES["image"]["tmp_name"], 'uploads/'.basename($_FILES["image"]["name"]));
            $image = $_FILES["image"]["name"];
        }


       $sql = "update user SET name='".$_POST['name']."', email='".$_POST['email']."', mobile='".$_POST['mobile']."', state='".$_POST['state']."', city='".$_POST['city']."', address='".$_POST['address']."', pincode='".$_POST['pincode']."' ";
       if($image !=''){
        $sql .=',image="'.$image.'" ';
       }
       
       $sql .=" WHERE id='".$_POST['id']."'";
    //    print_r($sql);die;
       if(mysqli_query($conn, $sql)){
            header('location:list.php');
        } else{
            echo "ERROR: Could not able to execute  kjqbfk";
        }

    }

?>