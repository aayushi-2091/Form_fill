<?php
include '_dbconnect.php';
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph=$_POST['phone'];
}
$sql= "INSERT INTO `form_input` (`Name`, `Email`, `Phone`) VALUES ('$name', '$email', '$ph')";
$result=mysqli_query($conn,$sql);
$user_id=mysqli_insert_id($conn);
$imagecount=count($_FILES['images']['name']);
for($i=0;$i<$imagecount;$i++){
    $imgname=$_FILES['images']['name'][$i];
    $imgtempname=$_FILES['images']['tmp_name'][$i];
    $uploaddir='upload/';
    $path=$uploaddir.basename($imgname);
    move_uploaded_file($imgtempname,$path);
    $sql1="INSERT INTO `image` (`Form_id`, `Name`, `Path`) VALUES ('$user_id', '$imgname', '$path')";
    $result2=mysqli_query($conn,$sql1);
}
if ($result && $result2) {
    header("Location: index.php?user_id=" . $user_id);
    exit();
}
?>