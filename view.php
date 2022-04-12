<style type="text/css">
h1{

background: brown;
color: white;
text-align: center;
border-radius: 50px;
}

.center{
text-align: center;
color: red;
font-weight: bold;
/*background: #42f2f5;*/
}
</style>

<!-- <h1>Registration Data</h1> -->
<div class="center">
<?php 
if(isset($_POST['register']))
{
   $Name= (isset ($_POST['name']))?$_POST['name']:null;
   $Email= (isset ($_POST['email_reg']))?$_POST['email_reg']:null;
   $Password= (isset ($_POST['password_reg']))?$_POST['password_reg']:null;
   $Gender= (isset ($_POST['gender']))?$_POST['gender']:null;
   $Country= (isset ($_POST['country']))?$_POST['country']:null;

	echo"<h1>Register Data</h1>";
	echo "Name: ".$Name."<br>";
	echo "Email: ".$Email."<br>";
	echo "Password: ".$Password."<br>";
	echo "Gender: ".$Gender."<br>";
	echo "Country: ".$Country."<br>";
	}
?>

<!-- <h1>Login Data</h1> -->
<?php
if (isset($_POST['login'])) 
{
  echo"<h1>Login Data</h1>";
  $email=$_POST['email'];
  $password=$_POST['password'];
  echo"Email: ".$email."<br>";
  echo "Password: ".$password;
}
?>
</div>


<?php
include("include/home.php");
//include("include/about_us.php");
//include("include/contact_us.php");

?>