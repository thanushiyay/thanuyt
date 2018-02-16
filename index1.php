 <?php
include_once ('dbcon.php');
session_start();
$name = $_POST['name'];
$pass = $_POST['password'];
//$sub = $_POST['sub'];
$sql="select * from `admin` WHERE  name='$name' AND  password='$pass'";
if($result=mysqli_query($conn,$sql))
if(mysqli_num_rows($result)>=0)
   while($row=mysqli_fetch_array($result))
   {
       if($row['name']=$name)
	   {	$_SESSION['id']=$row['id'];
           header("location:index.html");
	   }
       else
        {
			echo "failed";
   echo '<script language="javascript">';
  echo 'alert(" Invalid USERNAME AND PASSWORD!!!!!!!!!!!!! ");';
  echo 'window.location.href = "login.html";';
   echo '</script>';
        }
   
   }
?>