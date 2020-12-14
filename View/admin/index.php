<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="public/images/logo-admin.png" type="image/png" sizes="30x30">
	<title>Admin</title>
	<link rel="stylesheet" href="public/sass/style.css">	
	<link rel="stylesheet" href="public/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="public/js/jquery-3.5.1.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".hamburger").click(function () {
				$(".wrapper__admin").toggleClass("active");
			});
		});
	</script>
</head>
<body>
	<div class="wrapper__admin">
		<div class="top_navbar_admin">
			<div class="logo_admin">
				<a href="index.php">ellie</a>
			</div>
			<div class="top_menu_admin">
				<div class="home_link">
					<a href="index.php">
						<span class="icon"><i class="fas fa-home"></i></span>
						<span>Home</span>
					</a>
				</div>
				<div class="right_info">
					<a class="icon_wrap" href="https://www.facebook.com/sinhnguyen.fpt.poly">
						<div class="icon">
							<i class="fab fa-facebook-f"></i>
						</div>
					</a>
					<a class="icon_wrap" href="https://www.github.com/sinhnguyen777">
						<div class="icon">
							<i class="fab fa-github"></i>
						</div>
					</a>
					<a class="icon_wrap">
						<div class="icon">
							<i class="fas fa-bell"></i>
						</div>
					</a>
					<a class="icon_wrap">
						<div class="icon">
							<i class="fas fa-user"></i>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="main_body">
			<div class="sidebar_menu">
				<div class="inner__sidebar_menu">
					<ul>
						<li>
							<a href="#home_admin" data-toggle="collapse" aria-expanded="false">
								<span class="icon"> <i class="fas fa-border-all"></i></span>
								<span class="list dropdown-toggle">Catalog</span>
							</a>
							<ul class="collapse lisst-unstyled" id="home_admin">
								<li><a href="index.php?ctrl=catalog&action=addnew">add catalog</a></li>
								<li><a href="index.php?ctrl=catalog">Manage catalog</a></li></li>
							</ul>
						</li>
						<li>
							<a href="#product_admin" data-toggle="collapse" aria-expanded="false">
								<span class="icon"><i class="fas fa-shopping-cart"></i></span>
								<span class="list dropdown-toggle">Product</span>
							</a>
							<ul class="collapse lisst-unstyled" id="product_admin">
								<li><a href="index.php?ctrl=product&action=add-product">add product</a></li>
								<li><a href="index.php?ctrl=product">Manage product</a></li></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i class="fas fa-address-book"></i></span>
								<span class="list">Contact</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i class="fas fa-address-card"></i></span>
								<span class="list">About</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i class="fab fa-blogger"></i></span>
								<span class="list">Blogs</span>
							</a>
						</li>
						<li>
							<a href="index.php?ctrl=statistical">
								<span class="icon"><i class="fas fa-chart-pie"></i></span>
								<span class="list">Statistical</span>
							</a>
						</li>
						<li>
							<a href="../../">
								<span class="icon"><i class="fas fa-sign-out-alt"></i></span>
								<span class="list">Logout</span>
							</a>
						</li>
					</ul>

					<div class="hamburger">
						<div class="inner_hamburger">
							<span class="arrow">
								<i class="fas fa-long-arrow-alt-left"></i>
								<i class="fas fa-long-arrow-alt-right"></i>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<?php
					$ctrl = 'home';
					if (isset($_GET['ctrl'])) {
						$ctrl = $_GET['ctrl'];
					}
					include_once '../admin/controller/'.$ctrl.'.php';
				?>
			<!-- <h3 class="d-flex justify-content-center m-0 pb-2">HELLO ADMIN</h3>
				<div class="item_wrap">
					<div class="item">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est
						commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.
					</div>
					<div class="item">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est
						commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.
					</div>
				</div>
				<div class="item_wrap">
					<div class="item">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est
						commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.
					</div>
					<div class="item">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore laudantium, animi amet corrupti ratione est
						commodi! Sunt tempora quod magnam optio, reiciendis veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat laborum, a aspernatur corporis.
					</div>
				</div> -->
			</div>
		</div>
	</div>
	

	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
