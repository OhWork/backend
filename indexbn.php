<!DOCTYPE html>
<html>
    <head>
	<?php include 'inc_js.php';
              include 'form/main_form.php';
              include 'form/gridview.php';
		?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/jquery-ui.css">
		<link rel="stylesheet" href="CSS/scss/_input-group.scss">
        <link rel="stylesheet" href="CSS/main.css">
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow col-md-12">
					<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Intranet</a>
					<p class="navbar-nav px-3" style="color:#fff;">หัวข้อ</p>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<img src="images/noimage.png" width="30" height="30" class="nav-link dropdown-toggle d-inline-block align-top bn-profile" style="border-radius:50%;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">ออกจากระบบ</a>
							</div>
						</li>
					</ul>
				</nav>
				<div class="col-md-12" style="margin-top:40px;">
					<div class="row">
						<nav class="col-lg-3 col-md-3 d-none d-md-block bg-light sidebar">
							<div class="sidebar-sticky">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link active" href="#">
										<span data-feather="home"></span>
										หน้าหลัก <span class="sr-only">(current)</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
										<span data-feather="log-in"></span>
										เข้าระบบอินเตอร์เน็ต
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
										<span data-feather="database"></span>
										  ระบบ ZPO Data Center
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
										<span data-feather="mail"></span>
										 อีเมล์
										</a>
									</li>
									  <li class="nav-item">
										<a class="nav-link" href="#">
										<span data-feather="cpu"></span>
										ระบบแจ้งซ่อมคอมพิวเตอร์ออนไลน์
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
										<span data-feather="calendar"></span>
										ระบบจองห้องประชุมออนไลน์
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
										<span data-feather="bar-chart"></span>
										ระบบรายงานจำนวนผู้เข้าชมสวนสัตว์
										</a>
									</li>
								</ul>

								<!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
								  <span>Saved reports</span>
								</h6>
								<ul class="nav flex-column mb-2">
								  <li class="nav-item">
									<a class="nav-link" href="#">
									  <span data-feather="file-text"></span>
									  Current month
									</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">
									  <span data-feather="file-text"></span>
									  Last quarter
									</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">
									  <span data-feather="file-text"></span>
									  Social engagement
									</a>
								  </li>
								  <li class="nav-item">
									<a class="nav-link" href="#">
									  <span data-feather="file-text"></span>
									  Year-end sale
									</a>
								  </li>
								</ul>-->
							</div>
						</nav>
						<main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4">
							<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
							<h1 class="h2">Dashboard</h1>
							</div>
						</main>
					</div>
				</div>
			</div>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
-->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
	</body>
</html>