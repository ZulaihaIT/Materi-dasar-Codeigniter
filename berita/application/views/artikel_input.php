<!DOCTYPE HTML>
<html>
<head>
	<title>Artikel Artikel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/')?>css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/')?>css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="<?php echo base_url('assets/')?>css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='<?php echo base_url('assets/')?>css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
	<!-- side nav css file -->

	<!-- js-->
	<script src="<?php echo base_url('assets/')?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url('assets/')?>js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts--> 

	<!-- Metis Menu -->
	<script src="<?php echo base_url('assets/')?>js/metisMenu.min.js"></script>
	<script src="<?php echo base_url('assets/')?>js/custom.js"></script>
	<link href="<?php echo base_url('assets/')?>css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html"><span class="fa fa-area-chart"></span> Glance<span class="dashboard_text">Design dashboard</span></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="<?php echo site_url('artikel'); ?>">
									<i class="fa fa-dashboard"></i> <span>Dashboard</span>
								</a>
							</li>
							<li class="treeview">
								<a href="<?php echo site_url('artikel'); ?>">
									<i class="fa fa-pie-chart"></i>
									<span>Artikel</span>
								</a>
							</li>  
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div><!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/2.jpg" alt=""> </span> 
									<div class="user-name">
										<p>Admin Name</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
								<li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>

		<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <h2 class="title1">GALERI</h2>
         <form method="post" action="<?php echo site_url('Artikel/insert');?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="usr">Judul:</label>
                    <input type="text" class="form-control" name="in_judul" required="">
                </div>
                <div class="form-group">
                    <label for="usr">Kategori:</label>
                    <select name="in_kategori" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        <option value="Agama">
                            Agama
                        </option>
                        <option value="Budaya">
                            Budaya
                        </option>
                        <option value="Ekonomi">
                            Ekonomi
                        </option>
                        <option value="Politik">
                            Politik
                        </option>
                        <option value="Sosial">
                            Sosial
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comment">Deskripsi :</label>
                    <textarea class="form-control" rows="5" name="in_deskripsi" required=""></textarea>
                </div> 
                <div class="form-group">
                    <label for="usr">Gambar:</label>
                    <input type="file" class="form-control" name="gambar" required="">
                </div>

                <button style ="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button>
            </form>
        </div>
				</div>
				
			</div>
		</div>

		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				
			</div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<p>&copy;Artikel Artikel |2019 <a href="https://Artikel.com/" target="_blank">Artikel</a></p>
	</div>
	<!--//footer-->
</div>

<!-- side nav js -->
<script src='<?php echo base_url('assets/') ?>js/SidebarNav.min.js' type='text/javascript'></script>
<script>
	$('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- Classie --><!-- for toggle left push menu script -->
<script src="<?php echo base_url('assets/') ?>js/classie.js"></script>
<script>
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
	showLeftPush = document.getElementById( 'showLeftPush' ),
	body = document.body;

	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toright' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeftPush' );
	};

	function disableOther( button ) {
		if( button !== 'showLeftPush' ) {
			classie.toggle( showLeftPush, 'disabled' );
		}
	}
</script>
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="<?php echo base_url('assets/')?>js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url('assets/')?>js/scripts.js"></script>
<!--//scrolling js-->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"> </script>

</body>
</html>