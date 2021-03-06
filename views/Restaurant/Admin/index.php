<?php
include_once('../../../vendor/autoload.php');

if(!isset($_SESSION) )session_start();
use App\GlobalClasses\Message;
use App\GlobalClasses\Utility;

use App\Admin\Auth;
use App\Admin\Admin;


$auth = new Auth();
$loggedIn = $auth->logged_in();

if(!$loggedIn) {
    return Utility::redirect('Profile/admin-login.php');
}
?>






<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Admin-Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        h2 {
            font-family: "Baskerville Old Face", Times, serif;
            position: absolute;
            top: 100px;
            width: 100%;
        }
        h2 span {
            color: white;
            font: bold 24px/45px "Baskerville Old Face", Times, serif;
            letter-spacing: 0px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            max-width : 100%;
        }
        h2 span.spacer {
            padding:0 5px;
        }


        

        #color
        {
            color: brown;
            font: bold 24px/45px "Baskerville Old Face", Times, serif;
        }

        #pic {
            min-height : 100%;
            min-width : 100%;
            background-size:100% 100%;
            background-repeat:no-repeat;
            overflow-y: hidden;
            overflow-x: hidden;
        }

        .image {
            position: relative;
            width: 100%; /* for IE 6 */

        }
        #wrapper .text {
            position:relative;
            bottom:30px;
            left:0px;
            visibility:hidden;
        }

        #wrapper:hover .text {
            visibility:visible;
        }

    </style>
</head>



<body>

<div class="image">

    <img id="pic" src="../../../resource/FoodImage/entry pic.jpg" height="250" width="900">

    <?php include("messageBox.php"); ?>



</div>


<div class="container">

        <center><h3 id="color">Food Category</h3></center>

<?php include("topNavigation.php"); ?>


<div class="row">
    <div id="wrapper">
    <div class="col-lg-4 col-md-4 col-xs-4 thumb">

        <a class="thumbnail" href="appetizer.php">
            <img class="img-responsive img-thumbnai" src="../../../resource/FoodImage/appetizer.jpg" alt="" height="220">
            <center><h3 id="color">Appetizer</h3></center>
        </a>

    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-4 thumb">
        <a class="thumbnail" href="mainCourse.php">
            <img class="img-responsive img-thumbnai" src="../../../resource/FoodImage/main_course%20(2).jpg" alt="" height="220">
            <center><h3 id="color">Main Course</h3></center>
        </a>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-4 thumb">
        <a class="thumbnail" href="desserts_drinks.php">
            <img class="img-responsive img-thumbnai" src="../../../resource/FoodImage/dessertDrink.jpg" alt="" height="220">
            <center><h3 id="color">Drinks & Desserts</h3></center>
        </a>
    </div>
    </div>
    </div>
</body>
</html>

<?php  include('../footer.php')?>
