<?php
    session_start();
    include 'config.php';
    
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    //echo "user= ".$user." pass= ".$pass;
    $q=mysql_query("select * from admin where user_admin='$user' and pass_admin='$pass'");
    $row=mysql_num_rows($q);
    //echo "kode= ".$row['kode_petugas']." pass= ".$row['password_petugas'];
    
    if($row=1){
       $_SESSION['admin']=$user;
        //echo "benar";
        header("location:home.php");
    }else{
        //echo "salah";
       header("location:index.php");
    }
    //mysql_close($con); 
?>