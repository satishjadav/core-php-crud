<?php
if(isset($_GET['id'])){
    $conn = mysqli_connect("localhost","root","",'assi_feb');
    $sql = 'delete FROM `user` WHERE id="'.$_GET['id'].'" ';
    mysqli_query($conn, $sql);
    header('location:list.php');
}else{
    header('location:list.php');
}

?>