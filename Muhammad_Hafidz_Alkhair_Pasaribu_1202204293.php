<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
		}
		#nav ul li a,
		#nav ul li a:after,
		#nav ul li a:before {
			transition: all .5s;
		}
		#nav ul li a:hover {
			color: #84d3ff;
		}
		#nav ul li a,
		#nav ul li a {
			position: relative;
		}
		#nav ul li a:after,
		#nav ul li a:after {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
			width: 0%;
			content: '.';
			color: transparent;
			background: #84d3ff;
			height: 1px;
		}
		#nav ul li a:hover:after {
			width: 100%;
		}
		#button {
			--bs-btn-color: #000; 
			--bs-btn-bg: #fff; 
			--bs-btn-border-color: #000; 
			--bs-btn-hover-color: #fff; 
			--bs-btn-hover-bg: #000;
			--bs-btn-active-color: #000; 
			--bs-btn-active-bg:#fff; 
			--bs-btn-active-border-color: #000;
		}
		#button2 {
			--bs-btn-color: #000; 
			--bs-btn-bg: #fff; 
			--bs-btn-border-color: #fff; 
			--bs-btn-hover-color: #fff; 
			--bs-btn-hover-bg: #000;
			--bs-btn-active-color: #000; 
			--bs-btn-active-bg: #fff; 
			--bs-btn-active-border-color: #fff;
		}
		.card {
			--bs-card-border-width: 0px;
			--bs-border-radius: 0rem;
			--bs-card-cap-bg: #fff;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light p-4" id="nav">
		<div class="container">
			<a class="navbar-brand" href="#"><b><span style="color: #ff7ec4">WAD</span>.CO</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class=" collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto ">
					<li class="nav-item">
						<a class="nav-link mx-2" href="#">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2" href="#">SERVICES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2" href="#">TESTIMONI</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-2" href="#">CONTACT US</a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
					<button class="btn btn-primary me-md-2" type="button" id="button" style="width: 100px">LOGIN</button>
					<button class="btn btn-primary disabled" type="button" style="width: 100px">REGISTER</button>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container my-4">
		<div class="row my-5 align-items-center justify-content-center">
			<div class="col-md-5">
				<div class="container p-4">
					<h1><b>Unleash Your Style, Rent Your Fashion</b></h1><br>
					<p style="text-align: justify;">Welcome to our Fashion Rental platform, where style knows no boundaries. Discover a world of endless possibilities as you explore</p>
					<div class="d-grid gap-2 d-md-flex justify-content-md-start">
						<button class="btn btn-primary disabled" type="button" style="width: 200px">GET STRATED</button>
						<button class="btn btn-primary me-md-2" type="button" id="button2" style="width: 200px"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16"><path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/></svg> WATCH TRAILER</button>
					</div>
				</div>
			</div>
			<div class="col-md-5 offset-md-2">
				<img class="img-responsive" width="100%" src="https://img.freepik.com/free-photo/young-adult-woman-exudes-sensuality-elegance-outdoors-generative-ai_188544-7668.jpg?w=2000"/>
			</div>
		</div>
		<div class="row my-5 align-items-center justify-content-center">
			<div class="col-md-6">
				<div class="container p-4 text-center">
					<h1><b>Our Services</b></h1><br>
					<h5 style="text-align: center;">Welcome to our Fashion Rental platform, where style knows no boundaries</h5>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card-group">
					<div class="card">
						<img src="https://img.freepik.com/free-photo/young-adult-woman-exudes-sensuality-elegance-outdoors-generative-ai_188544-7668.jpg?w=2000" class="card-img-top" alt="...">
						<div class="card-body">
							<h1 class="card-title">Services 1</h1>
							<p class="card-text">Welcome to our Fashion Rental platform, where style knows no boundaries.</p>
						</div>
						<div class="card-footer">
							<h2 style="color: #ff7ec4;">Start From $123</h2>
						</div>
					</div>
					<div class="card">
						<img src="https://img.freepik.com/free-photo/young-adult-woman-exudes-sensuality-elegance-outdoors-generative-ai_188544-7668.jpg?w=2000" class="card-img-top" alt="...">
							<div class="card-body">
							<h1 class="card-title">Services 1</h1>
						<p class="card-text">Welcome to our Fashion Rental platform, where style knows no boundaries.</p>
						</div>
						<div class="card-footer">
							<h2 style="color: #ff7ec4;">Start From $123</h2>
						</div>
					</div>
					<div class="card">
						<img src="https://img.freepik.com/free-photo/young-adult-woman-exudes-sensuality-elegance-outdoors-generative-ai_188544-7668.jpg?w=2000" class="card-img-top" alt="...">
						<div class="card-body">
							<h1 class="card-title">Services 1</h1>
							<p class="card-text">Welcome to our Fashion Rental platform, where style knows no boundaries.</p>
						</div>
						<div class="card-footer">
							<h2 style="color: #ff7ec4;">Start From $123</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-5 align-items-center justify-content-center">
			<div class="col-md-6">
				<div class="container p-4 text-center">
					<h1><b>Testimoni</b></h1><br>
					<h5 style="text-align: center;">Welcome to our Fashion Rental platform, where style knows no boundaries</h5><br>
					<div id="carouselExampleDark" class="carousel carousel-dark slide">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img height="750px" width="500px"src="https://img.freepik.com/free-photo/young-adult-woman-exudes-sensuality-elegance-outdoors-generative-ai_188544-7668.jpg?w=2000" class="d-block w-100" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
					<div class="row">
						<div class="col-md-5 mt-4">
							<h2 style="text-align: left; margin-left: 20px;"><b>Hafidz</b></h2><br>
						</div>
						<div class="col-md-5 offset-md-2 mt-4">
							<h2 style="text-align: right; margin-right: 20px; color: grey;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#daa520" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg><b> 4.5</b></h2><br>
						</div>
					</div>
					<div class="row">
						<p style="text-align: left; margin-left: 20px;">Welcome to our Fashion Rental platform, where style knows no boundaries</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 justify-content-center">
			<div class="col-md-12">	
				<div class="container px-4">
					<h1><b>Contact Us</b></h1>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="container p-4">
					<p style="text-align: justify;">Welcome to our Fashion Rental platform, where style knows no boundaries.</p><br><br>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
						<input type="test" class="form-control" id="exampleFormControlInput1" placeholder="John Abraham">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-label">Email</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Abraham">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Message</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lorem ipsum dolor sit amet"></textarea>
					</div>
					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button type="submit" class="btn btn-primary mb-3">Submit</button>
					</div>
				</div>
			</div>
			<div class="col-md-5 offset-md-2">
				<div class="container p-4">
					<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=500&amp;hl=en&amp;q=san fransisco&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:500px;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;width:500px;height:500px;}.gmap_iframe {width:500px!important;height:500px!important;}</style></div>
					<div class="container my-4">
						<div class="row justify-content-center">
							<div class="col-2">
								<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
							</div>
							<div class="col-2">
								<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
							</div>
							<div class="col-2">
								<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
							</div>
							<div class="col-2">
								<svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row align-items-center justify-content-center" style="background: #84d3ff">
			<div class="col-md-5">
				<div class="container p-4">
					<h1 style="color: #fff"><b>WAD 2023</b></h1>
				</div>
			</div>
			<div class="col-md-5 offset-md-2">
				<div class="container p-4">
					<h5 style="color: #fff"><b>Nama: Hafidz Pasaribu</b></h5>
					<h5 style="color: #fff"><b>NIM: 1202204293</b></h5>
					<h5 style="color: #fff"><b>Kode Asprak: MHAP</b></h5>
				</div>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
