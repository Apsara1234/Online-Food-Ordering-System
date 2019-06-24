   <?php include("header.php");?>
   
   
   <?php 

if(isset($_COOKIE['attempt']) and $_COOKIE['attempt']>3) 
{
	echo "you cannot access this site for 3 minutes!!!!";
	die();
}
?>
  <div class="container">
  <div class="row">
  <div class="col-md-12 loginbox">
    <form method ="post" action="new.php">
	<p><label>Email Address</label><input type="text" name ="email" class="form" placeholder="Email Address"/></p>
	<p><label>Password</label><input type="password" name ="pass" class="form" placeholder=" Password"/></p>
	<p><button class="button" name="LOGIN">LOGIN</button></p>
</form>
    <div> <a href="register.php"> Register here!!!! </a></div>
	
	</div>
	</div>
	</div>
	
	
	</body>
	</html>