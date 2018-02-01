


<!DOCTYPE html>
<html>
<head>
<title>untodlogics.com</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Latest compiled JavaScript -->





<!--google icons-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!----------------->
<style>
.feed{
background-color:black;
width:60%;

}
.bott{
background-color:black;
width:100%;
height:60px;
color:white;


}
.abc{background-color: red;}
.slider{
  height:50%;
}
.fa fa-heart:hover{
  color:black;
}



.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2

}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  white;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}



@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

.previous {
    background-color: #f1f1f1;
    color: black;
}

.next {
     background-color: #f1f1f1;
    color: black;
}

.round {
    border-radius: 50%;
}
a {
    text-decoration: none;
    display: inline-block;

}

a:hover {

    color: black;
}

</style>

</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Untoldlogics</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Topics <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ethical Hacking</a></li>
              <li><a href="#">Networking</a></li>
              <li><a href="#">Malwares</a></li>
            </ul>
          </li>
          <li><a href="news.php">News</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-sign-up"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>








<div class="slider" style="margin-top:-1%">
<div class="container-fluid">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="pics/te.jpg" alt="ul.com" style="width:100%; height:70%;">
        <div class="carousel-caption">
          <h3>UNTOLDLOGICS</h3>
          <p>if there is no logic create your own!</p>

        </div>

      </div>

      <div class="item">
        <img src="pics/te.jpg" alt="ul.com" style="width:100%; height:70%;">
        <div class="carousel-caption">
          <h3>UNTOLDLOGICS</h3>
          <p>if there is no logic create your own!</p>
        </div>
      </div>

      <div class="item">
        <img src="pics/te.jpg" alt="ul.com" style="width:100%; height:70%;">
        <div class="carousel-caption">
          <h3>UNTOLDLOGICS</h3>
          <p>if there is no logic create your own!</p>
        </div>
      </div>

       <div class="item">
        <img src="pics/te.jpg" alt="ul.com" style="width:100%; height:70%;">
        <div class="carousel-caption">
          <h3>UNTOLDLOGICS</h3>
          <p>if there is no logic create your own!</p>
        </div>
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div><!--slider--->



















<div class="container">


  <div class="container">
     <div class="row" style="margin-left:10%; padding:10%;">

      <div class="col-sm-4" style=""> <img src="pics/bb.png" class="img-responsive" style="border-radius: 50%;  heigth:60%; width:60%; "><br><h4>  Ethical Hacking</h4><br>The hacker culture is a subculture of individuals who enjoy the intellectual challenge of creatively overcoming  </div>
      <div class="col-sm-4" style=""><img src="pics/bb.png" class="img-responsive" style="border-radius: 50%;  heigth:60%; width:60%; "><br><h4>  Ethical Hacking</h4></div>
      <div class="col-sm-4" style=""><img src="pics/bb.png" class="img-responsive" style="border-radius: 50%;  heigth:60%; width:60%;"><br><h4>   Ethical Hacking</h4></div>


    </div>
  </div>



  <h3 style="margin-top:10px; font-family:consolas; animation:type 3s steps(10); overflow:hidden; white-space:nowrap; border-right:3px solid black;">News Feed</h3>
  <hr>




<?php include 'blog_post.php'; ?>




<div class="container">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
<a  style="padding:8px 16px" href="#" class="previous round">&#8249;</a>
<a  style="padding:8px 16px" href="#" class="next round">&#8250;</a></div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
</div>
</div>















</div>








<footer class="footer-distributed">

			<div class="footer-left">

				<img src="pics/spider4.png" width="200px"/>

				<p class="footer-links">
					<a href=index.html>Home</a>
					.
					<a href=index.html>Blog</a>
					.
					<a href=about.html>About</a>
					.

					<a href=contact.html>Contact</a>
				</p>

				<p class="footer-company-name"> Untoldlogics.com &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>KIET GZB</span> INDIA</p>
				</div>



				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">cvam0000@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-ul-about" style="color:white">
					<span>"IF THERE IS NO LOGIC CREATE YOUR OWN"</span>

				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/cvam0000"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/shivam-chaudhary-73b370129/"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.youtube.com/channel/UC_xhr5E1xMW9dFUMW_dQiPQ"><i class="fa fa-youtube"></i></a>

				</div>

			</div>

		</footer>





</body>
</html>
