
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/tms_logo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css">
    <link rel="stylesheet" href="bootstrap/css/mainStyle.css">

    <link rel="stylesheet" href="bootstrap/css/dashboard.css">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
    <title>TMS</title>
</head>
<body>

<div id="dashboard">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo_1.png" alt=""></a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <img src="images/user-logo.png" alt="">
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        
                        <?php if(isset(Auth::user()->email)): ?>
                            <div class="alert alert-danger success-block">
                                <a href="<?php echo e(url('/main/logout')); ?>">Logout</a>
                            </div>
                        <?php else: ?>
                            <script>window.location = "/main";</script>
                        <?php endif; ?>

                        <br />
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-user">
                        <img src="images/user-logo.png" alt="">
                        <h4>Teacher</h4>
                    </li>
                    <li>
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li>
                        <a href="myProfile.html">My Profile</a>
                    </li>
                    <li>
                        <a href="#">Timetable</a>
                    </li>
                    <li>
                        <a href="#">Grades</a>
                    </li>
                    <li>
                        <a href="attendance-classes.html">Attendance</a>
                    </li>
                    <li>
                        <a href="#">Office Hour</a>
                    </li>
                    <li>
                        <a href="#">Teaching Plan</a>
                    </li>
                    <li>
                        <a href="#">Assignment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="link-box-wrapper">
            <div class="link_box">
                <a href="#">
                    <div class="link_box_img">
                        <img src="images/admin.png" alt="">
                    </div>
                    <div class="link_box_name">
                        Timetable
                    </div>
                    <div class="ripple-container"></div>
                </a>
            </div>
            <div class="link_box">
                <a href="#">
                    <div class="link_box_img">
                        <img src="images/admin.png" alt="">
                    </div>
                    <div class="link_box_name">
                        Grades
                    </div>
                </a>
            </div>
            <div class="link_box">
                <a href="#">
                    <div class="link_box_img">
                        <img src="images/admin.png" alt="">
                    </div>
                    <div class="link_box_name">
                        Attendance
                    </div>
                </a>
            </div>
            <div class="link_box">
                <a href="#">
                    <div class="link_box_img">
                        <img src="images/admin.png" alt="">
                    </div>
                    <div class="link_box_name">
                        Office Hour
                    </div>
                </a>
            </div>
            <div class="link_box">
                <a href="#">
                    <div class="link_box_img">
                        <img src="images/admin.png" alt="">
                    </div>
                    <div class="link_box_name">
                        Teaching Plan
                    </div>
                </a>
            </div>
            <div class="link_box">
                <a href="#">
                    <div class="link_box_img">
                        <img src="images/admin.png" alt="">
                    </div>
                    <div class="link_box_name">
                        Assignment
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\tms_f\resources\views/successlogin.blade.php ENDPATH**/ ?>