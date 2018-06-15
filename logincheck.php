<?php
/**
 * Created by IntelliJ IDEA.
 * User: rubictron
 * Date: 6/13/18
 * Time: 9:28 AM
 */
session_start();
if(!isset($_SESSION['exist']) || !isset($_SESSION['username'])){

header("Location:/phplogin_system/login/index.php");

}