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

						<div class="grid_10 alpha">
							
			<form action="verify.php" method="post">
	User Name:<br>
	<input type="text" name="username"><br><br>
	Password:<br>
	<input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Login">
</form>
				
				
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
