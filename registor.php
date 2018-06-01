<?php
/**
 * Created by IntelliJ IDEA.
 * User: rubictron
 * Date: 5/7/18
 * Time: 3:43 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="fw/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="fw/js/jquery-3.3.1.min.js"></script>
    <title>Registor</title>
</head>

<body class="container">
<header class="row">
    <div>

    </div>
</header>
<main class="row">
    <div id="bgimage" class="col-md-6" style="background-image: url('images/bg-01.jpg');">

    </div>
    <div class="col-md-6">
        <div style="height: 100px">

        </div>
        <form id="formreg" action="controller.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group row">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-sm">Username</label>
                <div class="col-md-10">
                    <input type="email" class="form-control form-control-sm" id="username" name="username"
                           placeholder="enter valid username">
                </div>
            </div>
            <div class="form-group row ">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-sm">Email</label>
                <div class="col-md-10">
                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                           placeholder="enter valid email">
                </div>
            </div>


            <div class="form-group row">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-sm">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control form-control-sm" id="password"
                           placeholder="Password">
                </div>
            </div>

            <div class="form-group row">
                <label for="colFormLabelSm" class="col-lg-2 col-form-label col-form-label-sm">Confirm
                    Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control form-control-sm" id="colFormLabelSm"
                           placeholder="Password">
                </div>
            </div>

            <div class="btngrup col-lg-12">
                <button class="btn btn-sm btn-primary" id="btnreg" type="button">Registor</button>
                <button class="btn btn-sm btn-success" id="btnlogin" type="button">Sign in</button>
            </div>
        </form>
    </div>

</main>
</body>



<script src="js/script.js"></script>
<script src="fw/js/jquery-3.3.1.min.js"></script>
</html>