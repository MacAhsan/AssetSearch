<?php include 'includes/header.php'; ?>

<script src="Script.js"></script>
		<div id="page-wrapper">

			<ul id="skipnav">
				<li><a href="#content">Skip to content</a></li>
				<li><a href="#primary-navigation">Skip to primary navigation</a></li>
				<li><a href="#secondary-navigation">Skip to secondary navigation</a></li>
			</ul>

			<div id="header-wrapper">
				<header role="banner" class="container_24">

					<div id="logo">
						<a href="#">
							<img src="images/logo.png" width="100" height="40" alt="Houston Inspection  Center">
							
						</a>
					</div>

					<nav role="navigation" id="primary-navigation">
						<ul>
							
						</ul>
					</nav>

					<form role="search" action="#" method="get">
					</form>

				</header>
			</div>

			<div id="content-wrapper">
				<section role="main" id="main" class="container_24">

					<nav role="navigation" id="secondary-navigation" class="grid_4 alpha">
						<ul>
							<li>
<?php echo '<b><time datetime="'.date('c').'">'.date('Y - m - d').'</time></b>';?> </li>
	<?php include 'modules/clock.php'; ?> </li>						
						</ul>
					</nav>

					<article role="document" id="content" class="grid_14">

						<h1></h1>
						<!-- <div class="grid_10 alpha intro">
							<?php include 'modules/search_tools.php'; ?>
						</div>
						<aside class="grid_4 omega">
							<?php include 'modules/search_components'; ?>
						</aside> -->

						<?php
if(isset($_POST['submit'])){
	$dbHost = "localhost";		//Location Of Database usually its localhost
	$dbUser = "xxxx";			//Database User Name
	$dbPass = "xxxxxx";			//Database Password
	$dbDatabase = "db_name";	//Database Name
	
	$db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");
	//Connect to the databasse
	mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");
	//Selects the database
	
	/*
	The Above code can be in a different file, then you can place include'filename.php'; instead.
	*/
	
	//Lets search the databse for the user name and password
	//Choose some sort of password encryption, I choose sha256
	//Password function (Not In all versions of MySQL).
	$usr = mysql_real_escape_string($_POST['username']);
	$pas = hash('sha256', mysql_real_escape_string($_POST['password']));
	$sql = mysql_query("SELECT * FROM users_table 
		WHERE username='$usr' AND
		password='$pas'
		LIMIT 1");
	if(mysql_num_rows($sql) == 1){
		$row = mysql_fetch_array($sql);
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['fname'] = $row['first_name'];
		$_SESSION['lname'] = $row['last_name'];
		$_SESSION['logged'] = TRUE;
		header("Location: users_page.php"); // Modify to go to the page you would like
		exit;
	}else{
		header("Location: login_page.php");
		exit;
	}<?php
if(isset($_POST['submit'])){
	$dbHost = "localhost";		//Location Of Database usually its localhost
	$dbUser = "aasolbiz_drilco";			//Database User Name
	$dbPass = "ahsan123";			//Database Password
	$dbDatabase = "aasolbiz_drilco_inspection";	//Database Name
	
	$db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");
	//Connect to the databasse
	mysql_select_db($dbDatabase, $db)or die("Couldn't select the database.");
	//Selects the database
	
	/*
	The Above code can be in a different file, then you can place include'filename.php'; instead.
	*/
	
	//Lets search the databse for the user name and password
	//Choose some sort of password encryption, I choose sha256
	//Password function (Not In all versions of MySQL).
	$usr = mysql_real_escape_string($_POST['username']);
	$pas = hash('sha256', mysql_real_escape_string($_POST['password']));
	$sql = mysql_query("SELECT * FROM users_table 
		WHERE username='$usr' AND
		password='$pas'
		LIMIT 1");
	if(mysql_num_rows($sql) == 1){
		$row = mysql_fetch_array($sql);
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['fname'] = $row['first_name'];
		$_SESSION['lname'] = $row['last_name'];
		$_SESSION['logged'] = TRUE;
		header("Location: home.php"); // Modify to go to the page you would like
		exit;
	}
	else{
		header("Location: index.php");
		exit;
	}
}else{	//If the form button wasn't submitted go to the index page, or login page
	header("Location: index.php");	
	exit;
}
?>
}else{	//If the form button wasn't submitted go to the index page, or login page
	header("Location: index.php");	
	exit;
}
?>
				
				
						</div>
						<!-- <aside class="grid_4 omega">
						
						</aside> -->


					</article>

					<!-- <aside role="complementary" class="grid_6 omega">
						<?php include 'modules/test.php'; ?>
					</aside> -->

				</section>

			</div>

			<div id="footer-wrapper">
				<footer class="container_24">

					<nav role="navigation" id="footer-navigation">
						<ul>
							<!-- <li><a href="#"></a></li> -->
							<li><a href="http://localhost/DrilcoTools/modules/Documentation.pdf">Documentation</a></li>
							<li><a href="mailto:mahsan2@slb.com?Subject=Feedback" target="_top">Report Bug</a></li>
						</ul>
					</nav>

					<p role="contentinfo">&copy;  DRILCO APPS 2014 </p>

				</footer>
			</div>

		</div>

<?php include 'includes/footer.php'; ?>