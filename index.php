<?php
	include ("admin/includes/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>bookshelf</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- start navbar -->
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- <div class="container"> -->
				<a href="index.php" class="navbar-brand">BookShelf</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="#" class="nav-link">الرئيسية</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">تصنيفات</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">المؤلفون</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">تواصل معنا</a>
						</li>
					</ul>
				</div>
		</nav>
	<!-- end navbar -->
	<!-- start content-->
				<div class="row">
				<div class="col-md-3" id="side-area">
					<div class="container-fluid">
						<h4 >تصنيفات الكتب</h4>
						<ul>
							<?php
								$query = "SELECT catigoryName FROM catigories";
								$result = $con->query($query);
								while ($row = mysqli_fetch_assoc($result)){
							?>
							<li>
								<a href="catigories.php">
									<span><i class="fas fa-tags"></i></span>
									<span><?php echo $row['catigoryName']; ?></span>
								</a>
							</li>
							<?php
								}
							?>
						</ul>	
					</div>
			</div>
				<div class="col-md-9">
					
						<div class="row" id="books">
							<?php
								$query 	= "SELECT bookID, book_img, book_title, book_author FROM Books";
								$result = $con->query($query);
								while ($row = mysqli_fetch_assoc($result)) {
							?>
							<div class="col-sm-3" id="post">
								<img src="admin/img/<?php echo $row['book_img']; ?>">
								<h4><?php echo $row['book_title']; ?></h4>
								<h6><?php echo $row['book_author']; ?></h6>
								<a href="book.php?id=<?php echo $row['bookID']; ?>">تحميل الكتاب</a>
							</div>
							<?php
								}
							?>
						</div>
					
				</div>
			</div>
		
	<!-- end content -->
	<!-- start footer -->
		<footer>
			<a href="#">جميع الحقوق محفوظة 	&copy; 2020</a>
		</footer>
	<!--end footer -->

	
	<script src="js/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/03757ac844.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>