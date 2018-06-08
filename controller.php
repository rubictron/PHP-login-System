<?php
/**
 * Created by IntelliJ IDEA.
 * User: rubictron
 * Date: 5/7/18
 * Time: 7:53 PM
 */


if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['email'])&&isset($_POST['cpassword'])){



    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $cpassword = $_POST["cpassword"];

    if($password!=$cpassword){
        echo "password not match";
        header('Location:/login/registor.php');

    }else {
        $pwd = password_hash($password, 1);


        $connection = mysqli_connect("127.0.0.1", "root", "1212", "phplogin", "3306");

        if (!$connection) {
            echo "Connection error <br>";
            echo mysqli_connect_error();
        } else {


            $result = $connection->query("INSERT INTO `phplogin`.`users` (`email`, `username`, `password`) VALUES ('$email', '$username', '$pwd')");

            $result = (bool)(($connection->affected_rows) > 0);

            if ($result) {

                $message = "user has been successfully saved";
                echo $message;

            } else {

                $message = "user has not been saved";
                echo $message;
            }

        }
    }
}

else if(isset($_POST['username'])&&isset($_POST['password'])){



    $username = $_POST["username"];
    $password = $_POST["password"];



    $connection = mysqli_connect("127.0.0.1","root","1212","phplogin","3306");

    if (!$connection){
        echo "Connection error <br>";
        echo mysqli_connect_error();
    }else{

        $resultSet = $connection->query("SELECT * FROM users WHERE username='$username'");

        if ($resultSet->num_rows > 0){
            $rowData = $resultSet->fetch_row();
//            var_dump($rowData);
            $hash=$rowData[2];
            if( password_verify($password,$hash)){

                echo "log confirm";

            }


        }


    }
}




//
//
//
//{
//
//    if ($resultSet->num_rows > 0){
//        $rowData = $resultSet->fetch_row();
//        $hash = $rowData[1];
//        $usertype = $rowData[2];
//        $image=$rowData[3];
//        $customerId=$rowData[4];
//        if ( password_verify($password,$hash)){
//
//            session_start();
//            $_SESSION["exists"] = true;
//            $_SESSION['username']=$username;
//            $_SESSION['usertype']=$usertype;
//            $_SESSION['image']=$image;
//            $_SESSION['customerId']=$customerId;
//
//            header("Location:../index.php");
//
//        }else{
//
//            echo "<script>alert('Invalid Username or Password');</script>";
//            echo '<script>window.location.replace("../header.php");</script>';
//
//        }
//
//    }else{
//
//        echo "<script>alert('Invalid Username or Password');</script>";
//        echo '<script>window.location.replace("../header.php");</script>';
//    }

