<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    include 'database_con.php';
    $query="insert into form (name,email,password) values('$name','$email','$pwd')";
    mysqli_query($con,$query);                                                       //execute insert query
    header("location:index.php");
}else{
    header("location:index.php");
}
?>