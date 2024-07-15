<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap demo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<style>
			.header
			{
				background-color:#8;
			}
			.container1
			{
				margin-top:0px;
				border:2px solid #dce9f7;
			}
			.header-img img
			{
				width:100%;
				padding:4px;
			}
			.navbar1
			{
				background-color:#00b7ea !important;
			}
			.nav-item
			{
				padding-right: 36px;
			}
			.nav-link1
			{
				color:white;
				line-height:2px;
				font-size:13px;
			}
			.head
			{
				border: 2px solid #dce9f7;
				line-height: 50px;
				font-size: 14px;
				padding-left: 10px;
				color: #00b7ea;
			}
			.breadcrumb
			{
				text-align: left;
				margin: 10px 0px;
				border-bottom: 1px dashed #cccccc;
				float: left;
				width: 100%;
			}
			.left-menu
			{
				font-family: Verdana,Tahoma;
				font-size: 14px;
				color: #5eac1a;
			}
			.list
			{
				list-style:none;
				text-decoration:none;
				font-size: 13px;
				color: #5eac1a;
			}
			.para
			{
				text-decoration:none;
				font-family: Verdana, Tahoma, Arial, sans-serif;
				font-size: 12px;
				text-align: justify;
			}
			.middle-part
			{
				border-left:2px dotted #cccccc;
				border-right:2px dotted #cccccc;
			}
			.tera
			{
				margin:10px;
			}
			.box1
			{
				margin-right:20px;
				padding:0px;
			}
			.one
			{
				float:left;
			}
			.two
			{
				float:left;
				list-style:none;
			}
			.fb 
			{
				list-style:none;
				font-family: Arial, Tahoma, Verdana;
				font-size: 12px;
				text-decoration: none;
				color: #269bc6;
			}
			.box-head
			{
				background-color:#00b7ea;
				color:#f5f5f5;
				width:100%;
				padding:0px;
				
			}
			.banner
			{
				font-family: Arial, Tahoma, Verdana;
				font-size: 12px;
				text-decoration: none;
				color: #269bc6;
			}
			.footer
			{
				font-family: Arial, Tahoma, Verdana;
				font-size: 12px;
				text-align:center;
				color: #269bc6;
			}
			.f2
			{
				color: #333333;
				font-size: 11px;
				font-weight: normal;
			}
		</style>
	</head>
	<body>
		<div class="container container1">
			<div class="row header">
				<div class="col-md-3 header-img">
					<img src="image/logo.jpg"/>
				</div>
			</div>
			
			<div class="row">
				<nav class="navbar navbar-expand-lg bg-body-tertiary navbar1">
					<div class="container-fluid">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-ioggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarText">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">HOME</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1 " href="#">Aptitute</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">Reasoning</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">Verbal Ability</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">G.K.</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">PUZZLES</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1 " href="#">Diagrammatic Tests</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">VIDEOS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">SIGN UP</a>
								</li>
								<li class="nav-item">
									<a class="nav-link nav-link1" href="#">LOGIN</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			
			<div class="row head">
				<nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item">You Are At </li>
					<li class="breadcrumb-item active" aria-current="page">: Home<img src="image/homes.png"/></li>
				  </ol>
				</nav>
			</div>
			