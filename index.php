<!DOCTYPE html>
<html lang="eng">
<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');
?>

    <head>

        <script>
            function initMap() {

                var loc = {
                    lat: 12.971780,
                    lng: 79.158904
                };

                var map = new google.maps.Map(
                    document.getElementById('map'), {
                        zoom: 14,
                        center: loc
                    });

                var marker = new google.maps.Marker({
                    position: loc,
                    map: map
                });
            }
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/picture.css" rel='stylesheet' type='text/css' />
        <link href="css/fontawesome-all.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>




        <style>

    		body {
    overflow: scroll;
    height: 100%;
    position: fixed;
    width:100%;
}
            .flex-control-paging li a:hover {
                background: transparent;
                border: 2px solid black;
            }

            .flex-control-paging li a.flex-active {
                background: transparent;
                border: 2px solid black;
                cursor: default;
            }

            .navbar-light .navbar-nav .show>.nav-link,
            .navbar-light .navbar-nav .active>.nav-link,
            .navbar-light .navbar-nav .nav-link.show,
            .navbar-light .navbar-nav .nav-link.active,
            .navbar-light .navbar-nav .nav-link:hover {
                color: black;
                text-shadow: 1px 1px 2px #000000;
                border-bottom: 5px solid black;
                border-radius: 0px;
            }

            .btn {
                background-color: black;
                color: black;
                padding: 14px 28px;
                margin: 10px;
                font-size: 18px;
                cursor: pointer;
                position:absolute;
                right:145px;



            }

            .btn1 {
                background-color: black;
                color: black;
                padding: 14px 28px;
                margin: 10px;
                font-size: 18px;
                cursor: pointer;
                border: 0px;
                border-radius: 5%;
                position:absolute;
                right:15px;
            }

            .login {
                color: white;
            }

            .login:hover {
                background-color: grey;
                color: white;
            }

            .logo-image {
                width: 10%;
                padding: 0px 2px;
                text-align: center;
            }

            @media screen and (max-width: 420px) {
                .logo-image {
                    width: 20%;
                    padding: 0px 2px;
                    text-align: center;
                }
                .btn {
                    width: 100%;
                    margin-left: 0px;
                }
                .banner-sec-w3layouts {
                    background-attachment: initial;
                    position: relative;
                }
                .btn1 {
                    width: 100%;
                    margin-left: 0px;
                }
            }
        </style>

        <style type="text/css">


        	#loading {
    position: absolute; width: 100%; height: 100%; background: url('images/wall1.gif') no-repeat center center;
    z-index: 2;overflow: hidden;
}
        </style>

<script type = "text/javascript">
    setTimeout(function() {
        document.getElementById("myDiv").style.display="none";
    }, 3000);  // 5 seconds
    $(document).ready(function() {
  					$('body').css({'overflow':'auto', 'height':'auto', 'position':'relative'});
});
</script>




    </head>

    <body>
 		<!-- <div id="loading"></div>   	 -->
 		<div id = "myDiv"><img id = "myImage" src = "images/wall1.gif"></div>
        <section class="banner-sec-w3layouts" id="home">

            <header style="padding: 0px 8px;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light top-header" style="padding:0px;">
                    <span class="logo-image">
					<a href="index.php"	><img src="images/logo.png" class="img-responsive" style="width: 80%;"></a>

				</span>
                    <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#poster">POSTER GALLERY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#pricing">OUR PRICING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#contact">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link scroll" href="#about">ABOUT</a>
                            </li>
                            <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo('<li class="nav-item">
							<a class="nav-link scroll" href="cart.php">CART</a>
						</li>');
					}
					?>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

                                <?php
					error_reporting(0);
					// session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="login/server.php"><button class="btn login" name="logout">LOGOUT</button></form>');

					}
					else{
						echo ('<a href="login/login.php"><button class="btn login" >Login</button></a>
					<a href="login/register.php"><button class="btn1 login">Signup</button></a> ') ;
					}
						// session_destroy();
					?>

                        </ul>
                    </div>






                </nav>
            </header>

            <!-- //header -->
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-info">
                                <h3>Order Posters</h3>

                            </div>
                        </li>
                        <li>
                            <div class="banner-info">
                                <h3 style="margin-bottom: 5px;">Buy 3 get 1 free!</h3>

                            </div>
                        </li>

                        <li>
                            <div class="banner-info">
                                <h3 style="margin-bottom: 5px;">Doorstep Delivery</h3>

                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </section>

        <section id="poster">

            <div class="row" style="padding: 50px 0px;">
                <div class="col-sm-2">
                    <h1 style="padding: 16px; text-align: center;">POSTER GALLERY</h1>
                </div>
                <div class="col-sm-10">
                    <div class="row" style="padding:0px;">
                        <?php

									$res=mysqli_query($db,"select * from home ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            <div class="col-sm-3" style="margin: 10px;">
                                <div class="container1">
                                    <img class="image cursor" src="images/<?php echo $row['image']?> " style="width:100%" onclick="openModal(<?php echo $count?>);currentSlide(1)" class="hover-shadow cursor">
                                    <div class="overlay">
                                        <div class="text">
                                            <?php echo $row['category']?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
									$count++;
									}
									?>

                    </div>
                </div>
            </div>

            <!-- MODAL 1 -->

            <div id="myModal1" class="modal">
                <span class="close cursor" onclick="closeModal(1)">&times;</span>
                <div class="modal-content">

                    <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="cart.php"><a href="cart.php"><img src="images/cart.png" style="width:7%;height:7%; float:right; margin-bottom:5px;"></a> </form>');
					}
					else{
						echo ('<a href="login/login.php" style="color:white;font-size:30px; text-align:right;">You need to login first.</a>
					') ;
					}

					?>

                        <?php

									$res=mysqli_query($db,"select * from movies ");

									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            			<div class="mySlides">
		                                <img src="images/movies/<?php echo $row['name']?>" style="width:100%">
		                                </div>

                            <?php

									}
									?>



                                <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="add_to_cart.php"><input type="text" name="selected_product" value="<?php echo $current_image;
							" hidden><button class="btn" type="button" name="add" style="color:white;text-align:center;">Add to Cart</button></form>');
					}
					else{
						echo (' ') ;
					}

					?>

                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row" style="background-color: black;">


                                    	<?php

									$res=mysqli_query($db,"select * from movies ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
										<div class="col-sm-4">
                                            <img class="demo cursor img-responsive" src="images/movies/<?php echo $row['name']?>" style="width:100%" onclick="currentSlide(<?php echo $count;?>)" alt="Nature and sunrise">
                                        </div>


                            <?php
									$count++;

									}
									?>



                                    </div>

                </div>
            </div>

            <!-- MODAL 2 -->


            <div id="myModal2" class="modal">
                <span class="close cursor" onclick="closeModal(2)">&times;</span>
                <div class="modal-content">

                    <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="cart.php"><a href="cart.php"><img src="images/cart.png" style="width:7%;height:7%; float:right; margin-bottom:5px;"></a> </form>');
					}
					else{
						echo ('<a href="login/login.php" style="color:white;font-size:30px; text-align:right;">You need to login first.</a>
					') ;
					}

					?>

                        <?php

									$res=mysqli_query($db,"select * from music ");

									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            			<div class="mySlides">
		                                <img src="images/music/<?php echo $row['name']?>" style="width:100%">
		                                </div>

                            <?php

									}
									?>



                                <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="add_to_cart.php"><input type="text" name="selected_product" value="<?php echo $current_image;
							" hidden><button class="btn" type="button" name="add" style="color:white;text-align:center;">Add to Cart</button></form>');
					}
					else{
						echo (' ') ;
					}

					?>

                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row" style="background-color: black;">


                                    	<?php

									$res=mysqli_query($db,"select * from music ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
										<div class="col-sm-4">
                                            <img class="demo cursor img-responsive" src="images/music/<?php echo $row['name']?>" style="width:100%" onclick="currentSlide(<?php echo $count;?>)" alt="Nature and sunrise">
                                        </div>


                            <?php
									$count++;

									}
									?>



                                    </div>

                </div>
            </div>
            <!-- MODAL 3 -->


            <div id="myModal3" class="modal">
                <span class="close cursor" onclick="closeModal(3)">&times;</span>
                <div class="modal-content">

                    <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="cart.php"><a href="cart.php"><img src="images/cart.png" style="width:7%;height:7%; float:right; margin-bottom:5px;"></a> </form>');
					}
					else{
						echo ('<a href="login/login.php" style="color:white;font-size:30px; text-align:right;">You need to login first.</a>
					') ;
					}

					?>

                        <?php

									$res=mysqli_query($db,"select * from tvseries ");

									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            			<div class="mySlides">
		                                <img src="images/tv/<?php echo $row['name']?>" style="width:100%">
		                                </div>

                            <?php

									}
									?>



                                <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="add_to_cart.php"><input type="text" name="selected_product" value="<?php echo $current_image;
							" hidden><button class="btn" type="button" name="add" style="color:white;text-align:center;">Add to Cart</button></form>');
					}
					else{
						echo (' ') ;
					}

					?>

                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row" style="background-color: black;">


                                    	<?php

									$res=mysqli_query($db,"select * from tvseries ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
										<div class="col-sm-4">
                                            <img class="demo cursor img-responsive" src="images/tv/<?php echo $row['name']?>" style="width:100%" onclick="currentSlide(<?php echo $count;?>)" alt="Nature and sunrise">
                                        </div>


                            <?php
									$count++;

									}
									?>



                                    </div>

                </div>
            </div>

            <!-- MODAL 4 -->


            <div id="myModal4" class="modal">
                <span class="close cursor" onclick="closeModal(4)">&times;</span>
                <div class="modal-content">

                    <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="cart.php"><a href="cart.php"><img src="images/cart.png" style="width:7%;height:7%; float:right; margin-bottom:5px;"></a> </form>');
					}
					else{
						echo ('<a href="login/login.php" style="color:white;font-size:30px; text-align:right;">You need to login first.</a>
					') ;
					}

					?>

                        <?php

									$res=mysqli_query($db,"select * from sports ");

									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            			<div class="mySlides">
		                                <img src="images/sports/<?php echo $row['name']?>" style="width:100%">
		                                </div>

                            <?php

									}
									?>



                                <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="add_to_cart.php"><input type="text" name="selected_product" value="<?php echo $current_image;
							" hidden><button class="btn" type="button" name="add" style="color:white;text-align:center;">Add to Cart</button></form>');
					}
					else{
						echo (' ') ;
					}

					?>

                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row" style="background-color: black;">


                                    	<?php

									$res=mysqli_query($db,"select * from sports ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
										<div class="col-sm-4">
                                            <img class="demo cursor img-responsive" src="images/sports/<?php echo $row['name']?>" style="width:100%" onclick="currentSlide(<?php echo $count;?>)" alt="Nature and sunrise">
                                        </div>


                            <?php
									$count++;

									}
									?>



                                    </div>

                </div>
            </div>

            <!-- MODAL 5 -->


            <div id="myModal5" class="modal">
                <span class="close cursor" onclick="closeModal(5)">&times;</span>
                <div class="modal-content">

                    <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="cart.php"><a href="cart.php"><img src="images/cart.png" style="width:7%;height:7%; float:right; margin-bottom:5px;"></a> </form>');
					}
					else{
						echo ('<a href="login/login.php" style="color:white;font-size:30px; text-align:right;">You need to login first.</a>
					') ;
					}

					?>

                        <?php

									$res=mysqli_query($db,"select * from motivational ");

									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            			<div class="mySlides">
		                                <img src="images/motivational/<?php echo $row['name']?>" style="width:100%">
		                                </div>

                            <?php

									}
									?>



                                <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="add_to_cart.php"><input type="text" name="selected_product" value="<?php echo $current_image;
							" hidden><button class="btn" type="button" name="add" style="color:white;text-align:center;">Add to Cart</button></form>');
					}
					else{
						echo (' ') ;
					}

					?>

                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row" style="background-color: black;">


                                    	<?php

									$res=mysqli_query($db,"select * from motivational ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
										<div class="col-sm-4">
                                            <img class="demo cursor img-responsive" src="images/motivational/<?php echo $row['name']?>" style="width:100%" onclick="currentSlide(<?php echo $count;?>)" alt="Nature and sunrise">
                                        </div>


                            <?php
									$count++;

									}
									?>



                                    </div>

                </div>
            </div>

            <!-- MODAL 6 -->


            <div id="myModal6" class="modal">
                <span class="close cursor" onclick="closeModal(6)">&times;</span>
                <div class="modal-content">

                    <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="cart.php"><a href="cart.php"><img src="images/cart.png" style="width:7%;height:7%; float:right; margin-bottom:5px;"></a> </form>');
					}
					else{
						echo ('<a href="login/login.php" style="color:white;font-size:30px; text-align:right;">You need to login first.</a>
					') ;
					}

					?>

                        <?php

									$res=mysqli_query($db,"select * from celebrities ");

									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
                            			<div class="mySlides">
		                                <img src="images/celebrities/<?php echo $row['name']?>" style="width:100%">
		                                </div>

                            <?php

									}
									?>



                                <?php
					error_reporting(0);
					session_start();

					if(isset($_SESSION['name']))
					{
						echo ('<form method="post" action="add_to_cart.php"><input type="text" name="selected_product" value="<?php echo $current_image;
							" hidden><button class="btn" type="button" name="add" style="color:white;text-align:center;">Add to Cart</button></form>');
					}
					else{
						echo (' ') ;
					}

					?>

                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row" style="background-color: black;">


                                    	<?php

									$res=mysqli_query($db,"select * from celebrities ");
									$count = 1;
									while ($row=mysqli_fetch_array($res))
									{
										//echo $row['image'];die;
										?>
										<div class="col-sm-4">
                                            <img class="demo cursor img-responsive" src="images/celebrities/<?php echo $row['name']?>" style="width:100%" onclick="currentSlide(<?php echo $count;?>)" alt="Nature and sunrise">
                                        </div>


                            <?php
									$count++;

									}
									?>



                                    </div>

                </div>
            </div>

            <script>
                var dd = "#myModal1";

                function openModal(b) {
                    console.log('myModal' + b);
                    document.getElementById('myModal' + b).style.display = "block";
                    dd = "#myModal" + b;
                }

                function closeModal(b) {
                    document.getElementById('myModal' + b).style.display = "none";
                }

                var slideIndex = 1;
                showSlides(slideIndex, dd);

                function plusSlides(n) {
                    showSlides(slideIndex += n, dd);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n, dd);
                }

                function showSlides(n, dd) {
                    var i;
                    var slides = document.querySelectorAll(dd + " .mySlides");
                    console.log(slides);
                    var dots = document.querySelectorAll(dd + " .demo");
                    var captionText = document.querySelectorAll(dd + " .caption");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                    captionText.innerHTML = dots[slideIndex - 1].alt;
                }
            </script>

        </section>

        <section class="team py-lg-5 py-3" id="pricing" style="background-color: #c0c0c0;">
            <div class="container-fluid">
                <div class="inner-sec-w3ls-agileits p-lg-5 p-3">
                    <div class="gallery_grids row">

                        <div class="col-lg-2 header-info mt-5">
                            <h1 style="color: black; text-align: center; margin: 0 auto;">Our Pricing</h1>

                        </div>

                        <div class="col-lg-10 card-desk text-center">
                            <div class="row prime">
                                <div class="col-md-4 price-main-info card box-shadow">
                                    <div class="card-header" style="background-image: url(images/movies/m8.jpg);">

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title pricing-card-title">
										<span class="align-top">₹</span>80

									</h5>

                                    </div>
                                </div>
                                <div class="col-md-4 price-main-info card box-shadow">
                                    <div class="card-header" style="background-image: url(images/sports/s27.jpg);">

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title pricing-card-title">
										<span class="align-top">₹</span>80

									</h5>

                                    </div>
                                </div>
                                <div class="col-md-4 price-main-info card box-shadow">
                                    <div class="card-header" style="background-image: url(images/tv/t19.jpg);">

                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title pricing-card-title">
										<span class="align-top">₹</span>80

									</h5>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="-bottom contact" id="contact">
            <div class="container-fluid">
                <div class="inner-sec-w3ls-agileits p-lg-5 p-3">
                    <div class="row">
                        <div class="col-lg-3 header-info mt-5">
                            <h1 style="color: black; text-align: center; margin: 0 auto;">Get In Touch</h1>

                            <div id="map"></div>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzsv6iEhzs5SHDwJyCK9hCgr_pj9ZsXTE&libraries=places&callback=initMap" async defer></script>

                        </div>
                        <div class="main_grid_contact col-lg-9">
                            <div class="form text-center">

                                <form action="contact.php" method="post">
                                    <div class="form-group">
                                        <label class="my-2">Name</label>
                                        <input class="form-control" type="text" name="Name" placeholder="" required="" style="background-color: #262626; color: white; font-size: 20px;">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="Email" placeholder="" required="" style="background-color: #262626; color: white; font-size: 20px;">
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea id="textarea" name="message" placeholder="" style="background-color: #262626; color: white; font-size: 20px;"></textarea>
                                    </div>
                                    <div class="input-group1">
                                        <input class="form-control" type="submit" value="Submit">
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- //contact -->
        <!--footer-->
        <footer class="py-lg-5 py-3" id="about">
            <div class="container-fluid">
                <div class="inner-sec-w3ls-agileits py-lg-5 p-3">
                    <div class="row">
                        <div class="col-lg-3 footer-grid1-wthree-agileits text-left">
                            <h3 class="mb-4">About Us</h3>
                            <p>Bunch of engineers trying to do something productive! </p>
                            <a href="#contact" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-sm animated-button gibson-three mt-3">GetInTouch</a>
                        </div>
                        <div class="col-lg-3 footer-grid1-wthree-agileits text-left">
                            <h3 class="mb-4">Locate Us</h3>
                            <ul class="footer-bottom-list">
                                <li>
                                    <span class="fas fa-map-marker-alt"></span> Room no.330
                                    <span> L-block VIT University </span>
                                </li>
                                <li>
                                    <span class="fas fa-envelope"></span>
                                    <a href=""> akshattongia48@gmail.com</a>
                                </li>
                                <li>
                                    <span class="fas fa-phone"></span> +91 8209790726  </li>
                                <li>
                                    <span class="fas fa-fax"></span> +91 8808579891 </li>


                            </ul>
                        </div>

                            </div>
                            <!-- //subscribe -->
                            <div class="footer-social mt-4">
                                <div class="copyrighttop">
                                    <h3 class="mb-4">Stay In Touch</h3>
                                    <ul class="social_list1 text-left">

                                        <li>
                                            <a href="#" class="facebook1 ">
                                                <i class="fab fa-facebook-f"></i>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter2 mx-2">
                                                <i class="fab fa-twitter"></i>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dribble3">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->

                </div>
            </div>
        </footer>

        <!-- js -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <!-- //js -->
        <!-- carousel -->
        <!-- <script src="js/owl.carousel.js"></script> -->
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,
                            nav: false
                        },
                        1024: {
                            items: 2,
                            nav: false
                        },
                        1080: {
                            items: 3,
                            nav: true,
                            loop: false,
                            margin: 20
                        }
                    }
                })
            })
        </script>
        <!-- //carousel -->
        <!-- flexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
        <!-- //flexSlider -->
        <!--/ start-smoth-scrolling -->
        <script src="js/move-top.js"></script>
        <script src="js/easing.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 900);
                });
            });
        </script>
        <script>
            $(document).ready(function() {

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>

        <script src="js/jquery.picEyes.js"></script>
        <script>
            $(function() {

                $('.demo li').picEyes();
            });
        </script>

        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery.magnific-popup.js"></script>
        <!--//pop-up-box-->
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

            });
        </script>

        <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        <script src="js/bootstrap.js"></script>

    </body>

</html>
