<?php
	include 'core/init.php';
	if($getFromU->loggedIn() === true){
		header('Location: home.php');
	}
?>
<html>
<head>
    <title>Twitter</title>
    <?php include 'includes/head_section.php'; ?>
</head>

<body>
    <div class="preloader" id="preloader">
        <div id="loader"></div>
    </div>

    <div class="container-fluid">
        <div class="main-box">

            <div class="main-box-wrapper">
                <div class="row">
                    <div class="left col-md-6 col-12">
                        <div class="items-wrapper">
                            <div class="item">
                                <span class="fa fa-search"></span>
                                <h3>Follow your interests.</h3>
                            </div>
                            <div class="item">
                                <span class="fa fa-user"></span>
                                <h3>Hear what your people are talking about.</h3>
                            </div>
                            <div class="item">
                                <span class="fa fa-comment-o"></span>
                                <h3>Join the conversation.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="right col-md-6 col-12">

                        <?php include 'includes/login.php';?>

                        <div class="middle">
                            <i class="fa fa-twitter" style="font-size:50px;"></i>
                            <h1>See what's happening in<br />the world right now</h1>
                            <span>Join Twitter today.</span>
                        </div>

                        <?php include 'includes/signup-form.php';?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            var preloader = document.getElementsByClassName('preloader')[0];
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 3000);
        };
    </script>
</body>
</html>
