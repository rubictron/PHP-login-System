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

    <title>Log in</title>
</head>

<body class="container">
<div>
    <?php
    echo $_SESSION['username'];

    ?>

</div>
<div><button type="button" id="btnlogout" > LOG OUT </button>
</div>

<div>


    This template is created by Asitha Sandakalum (rubictron) please dont remove the authorization.
</div>

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
