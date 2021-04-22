
<?php include "templates/head.php"; ?>
<?php getHead("Welcome to Yummy Recipes");?>
<?php include "templates/header-nav.php"; ?>
	
		<div id="main-content">
			<section id="new-recipes">
				<h2>New Recipes</h2>
				<article class="new-recipe">
					<h3>Fried Chicken</h3>
					<a href="#">
						<img src="<?php echo getURL("images/friedchicken.jpg");?>" alt="friedchicken">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<a href="friedchicken.php">Read More</a>
				</article>
				<article class="new-recipe">
					<h3>Burger</h3>
					<a href="#">
						<img src="<?php echo getURL("images/burger.jpg");?>" alt="burger">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<a href="#">Read More</a>
				</article>
				<article class="new-recipe">
					<h3>Salad</h3>
					<a href="#">
						<img src="<?php echo getURL("images/salad.jpg");?>" alt="salad">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<a href="#">Read More</a>
				</article>
			</section>
			<section id="new-tools">
				<h2>New Tools</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
		</div>
<?php include "templates/sidebar.php"; ?>
<?php include "templates/footer.php"; ?>