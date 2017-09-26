<!DOCTYPE html>
<html>
	<head>
		<title>IT Online Shopping website</title>
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
<!--header-->
		<div class="header">
<!--Logo-->
			<div class="logo">
				<a href="index.php"><img src="img/DLZ.png" width="200px" height="92px"></a>
			</div>
<!--right nav-->
			<div class="header_nav">
				<ul>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="my_account.php">My Account</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

<!--menu bar-->
		<div class="menu_bar">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="index.php">Home</a></li>
			    	<li><a href="promotion.php">Promotion</a></li>
			    	<li><a href="product.php">Product</a></li>
			    	<li><a href="pricelist.php">Pricelist</a></li>
			    	<li><a href="about.php">About</a></li>
			    	<li><a href="contact.php">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	    </div>	 

<!--Content-->
<!--login form-->
		<div class="register_form login_form">
			<h2>Login</h2>
			<form method="post" action="index.php">
				<div class="clearfix">
					<input type="text" placeholder="Email or User name" name="username" required>
					<br>
					<input type="password" placeholder="Password" name="username" required>
					<br>
					<a href="help.php">forgot password?</a>
					<br>
					<button type="submit" class="cancelbtn">Login</button>	
				</div>	
			</form>	
		</div>

<!--footer-->
		<div class="footer">
			<table class="section">
				<tr>
					<td>
						<h4>DLZ IT Store</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="promotion.php">Promotion</a></li>
							<li><a href="product.php">Product</a></li>
			    			<li><a href="pricelist.php">Pricelist</a></li>
			    			<li><a href="about.php">About</a></li>
			    			<li><a href="contact.php">Contact</a></li>
						</ul>
					</td>
					<td>
						<h4>My account</h4>
						<ul>
							<li><a href="login.php">Login</a></li>
							<li><a href="my_account.php">My Profile</a></li>
							<li><a href="help.php">Help</a></li>
						</ul>
					</td>
					<td>
						<h4>Contact</h4>
						<ul>
							<li><span>+66-9999-99999</span></li>
							<li><span>+66-8888-88888</span></li>
							<br><br>
							<h4>Shipping</h4>
							<a href="http://www.dhl.co.th/th.html" target="_blank">
								<img align="left" src="img/tran-dhl.png">
							</a>
							<a href="https://th.kerryexpress.com/th/track/" target="_blank">
								<img align="left" src="img/tran-kerry.png">
							</a>
							<a href="https://www.tnt.com/express/th_th/site/home.html" target="_blank">
								<img align="left" src="img/tran-tnt.png">
							</a>
						</ul>
					</td>
					<td>
						<h4>payment</h4>	
						<img align="left" src="img/bank-SCB.jpg">
						<img align="left" src="img/bank-SB.jpg">
						<img align="left" src="img/bank-KB.jpg">
						<img align="left" src="img/bank-KTB.jpg">
						<img align="left" src="img/bank-TBB.jpg">
						<img align="left" src="img/bank-crdito.jpg">
					</td>
				</tr>
			</table>		
       		<div class="copy_right">
				<p>DLZ © All rights Reseverd | Design by  <a href="http://www.facebook.com/karanpoj">Karanpoj</a> </p>
			</div>
    	</div>
	</body>
</html>