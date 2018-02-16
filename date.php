<?php
include('dbcon.php');
$date=$_POST['date'];
$sel="select * from details where date='$date'";
$sql=mysqli_query($conn,$sel);
if($result=mysqli_num_rows($sql)>0)
{
echo "<table border='1'>
<tr>
<th><h4>DATE</th>
<th><h4>ROLLNO:</th>
<th><h4>IN-TIME</th>
<th><h4>OUT-TIME</th>
</tr>";
while($row=mysqli_fetch_array($sql))
{
echo "<tr>";
	echo "<td>".$row['date']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>" .$row['intime']."</td>";
	echo "<td>".$row['outtime']."</td>";
	echo "</tr>";
}
}

else{
	
	 echo '<script language="javascript">';
	 echo 'alert("INVALID");';
	echo 'window.location.href = "index.html#view";';
   echo '</script>';
	//echo "";
}
?>
<html>
    <head>
    <style>
    .header
    {
       background-color:black;
       text-align:center;
       font-size:18px;
       color:brown;
     }
     .navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
  color:brown;
}

.navbar .navbar-collapse {
  text-align: center;
  color:brown;
}
.form
{
color:white;
text-align:center;
}
  
     </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <link rel="stylesheet" href="assets/css/raleway-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <form  action="date.php" method="post">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#view">View Entries</a></li>
                        <li><a href="#profile">Add Profile</a></li>
                        <li><a href="login.html">logout</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-img">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="home-content">

                                <h1>Information TEchnology</h1>
                                <h1><span>LAB ENTRY MANAGEMENT</span></h1>

                               

                            </div>
                        </div>
                    </div>

                </div>
            </div>	
        </header>

        <!-- Sections -->
        <section id="view" class="sections">

            <div class="heading-content text-center">

                <h3>VIEW ENTRIES</h3>
                <div class="header">
                <!--<div class="separator"></div> -->
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav navbar-left">
                        
                        <li class="active"><a href="#date">BY DATE</a></li>
                        <li><a href="#time">BY TIME</a></li>
                        <li><a href="#id">BY ID</a></li>
                        <!--<li><a href="login.html"></a></li>-->

                    </ul>
                </div><!-- /.navbar-collapse -->
                </div>
            </div>


    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>

           