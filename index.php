<!DOCTYPE html>
<html lang="en">
    <head>
		<?php include(THEME_DIR_PHP.'head.php'); ?>
    </head>
    <body>
		<!-- Header -->
		<div id="top" class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-12 center">
						<a href="<?php echo $Site->url() ?>"><div class="logo center"></div></a>
						<h1 class="title font-heavy"><a href="<?php echo $Site->url() ?>"><?php echo $Site->title() ?></a></h1>
						<h2 class="slogan font-light"><?php echo $Site->slogan() ?></h2>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Content -->
		<div id="content">
			<div class="container">
				<?php
					if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') ) {
						include(THEME_DIR_PHP.'home.php');
					}
					elseif($Url->whereAmI()=='post') {
						include(THEME_DIR_PHP.'post.php');
					}
					elseif($Url->whereAmI()=='page') {
						include(THEME_DIR_PHP.'page.php');
					}
				?>
		</div>
		
		<!-- Footer -->
		<footer class="footer">
			<div class="container">
			<div class="row">
				<div class="col-2 hidden-sm"></div>
				<?php
					if( ($Url->whereAmI()=='home') || ($Url->whereAmI()=='tag') || ($Url->whereAmI()=='blog') ) {
						include(THEME_DIR_PHP.'footer-home.php');
					}
					elseif( ($Url->whereAmI()=='post') || ($Url->whereAmI()=='page') ) {
						include(THEME_DIR_PHP.'footer-post.php');
					}
				?>
			</div>
			</div>
		</footer>
	</body>
</html>