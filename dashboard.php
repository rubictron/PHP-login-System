<?php
/**
 * Created by IntelliJ IDEA.
 * User: rubictron
 * Date: 6/13/18
 * Time: 9:27 AM
 */
include "logincheck.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="fw/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="fw/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <title>Log in</title>
</head>

<body class="container">
<main>
<div>
    <?php
    echo "You are login as ";
    echo $_SESSION['username'];

    ?>

</div>
<div><button class="btn btn-primary" type="button" id="btnlogout" > LOG OUT </button>
</div>

<div>


    This template is created by Asitha Sandakalum (rubictron) <br>
    please dont infringe CopyRight.
</div>
</main>

<footer id="footer">

    <div> <i class="fa fa-copyright" aria-hidden="true"></i>&nbsp CopyRright &nbsp&nbsp Asitha Sandakalum (Rubictron)<br>
        <a href="https://github.com/rubictron?tab=repositories">
            <i class="fab fa-internet-explorer"></i>&nbsp www.asithasandakalum.tk
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="https://rubictronsandakalum.blogspot.com">
            <i class="fab fa-blogger-b"></i>&nbsp www.rubictronsandakalum.blogspot.com
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="https://github.com/rubictron?tab=repositories">
            <i class="fab fa-github-square"></i>&nbsp Git hub(rubictron)
        </a>
    </div>


    </div>

</footer>

</body>
<script>

    $('#btnlogout').click(
        function () {

            console.log("log out");
            window.location.replace('controller.php');

       }
   );

</script>
</html>
