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
		<div class="box_register">
			<h3 class="title_register"><img src="./images/logo.png" alt="course 01" /></h3>
			<form id="frm_register" class="frm_register" name="frm_user_profile" action="" method="post">
				<div class="form-group">
			        <input type="text" class="form-control input_name" name="input_name" value="Họ và tên">
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control input_mail" name="input_mail" value="Email">
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control input_address" name="input_address" value="Địa chỉ">
			    </div>
			    
			    <div class="form-group box_btn">
			        <input type="hidden" name="id" value="3">
			        <input type="hidden" name="form_active" value="myprofile">
			        <button type="submit" class="btn btn-primary btn_profile">Đăng Ký</button>
			    </div>
			</form>
		</div>	
	</div>
</div>

</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
</body>
</html>
