<?php $page = 'homepage'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>
<link href="./css/<?php echo $page; ?>.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
<script src="./js/homepage.js"></script>
</head>

<body id="<?php echo $page; ?>">
<?php include "./templates/header.php"; ?>
<div id="contents">
<div class="con_register">
	<div class="wrap">
		<div class="box_register box_complete">
			<h3 class="title_register"><img src="./images/logo.png" alt="course 01" /></h3>
				<div class="box_complete">
					<p class="photo">
						<img src="./images/img_register_complete.png" alt="course 01" />
					</p>
					<h4>Cảm ơn Anh/chị<br>
					đã đăng ký khoá học thành công</h4>
					<p class="txt_note">Anh chị sẽ nhận được mã kích hoạt trong vòng 2-3 ngày</p>
					<a href="" class="btn btn-primary lnk_home">Trang Chủ</a>
				</div>
			   
		</div>	
	</div>
</div>

</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
</body>
</html>
