<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin | Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="./assets/vendor/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_oshasnack.jpg">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
	
    <script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
    </script>	
</head>

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication">
			<div class="geex-content__authentication__content p-0">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo mt-5">
						<a href="index.html">
							<img class="logo-lite" src="assets/img/logo_oshasnack.jpg" width="200px" alt="logo">
							<img class="logo-dark" src="assets/img/logo_oshasnack.jpg" width="200px" alt="logo">
						</a>
					</div>
					
					<form id="signInForm" class="geex-content__authentication__form" action="{{ route('admin.login') }}" method="POST">
						@csrf
						<h2 class="geex-content__authentication__title">Login Admin Oshasnack</h2>
						@if ($errors->has('loginError'))
							<div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
						@endif
						<div class="geex-content__authentication__form-group">
							<label for="emailSignIn">Email</label>
							<input type="email" id="emailSignIn" name="emailSignIn" placeholder="Enter Your Email" required>
							<i class="uil-envelope"></i>
						</div>
						<div class="geex-content__authentication__form-group">
							<div class="geex-content__authentication__label-wrapper">
								<label for="loginPassword">Password</label>
							</div>
							<input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required>
							<i class="uil-eye toggle-password-type"></i>
						</div>
						<button type="submit" class="geex-content__authentication__form-submit">Sign In</button>
					</form>
				</div>
			</div>	
			<div class="geex-content__authentication__img">
				<img src="./assets/img/authentication.svg" alt="">
			</div>
		</div>
	</main>

	<!-- inject:js-->
	<script src="./assets/vendor/js/jquery/jquery-3.5.1.min.js"></script>
	<script src="./assets/vendor/js/jquery/jquery-ui.js"></script>
	<script src="./assets/vendor/js/bootstrap/bootstrap.min.js"></script>
	<script src="./assets/js/main.js"></script>
	<!-- endinject-->
</body>

</html>