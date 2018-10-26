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
<h1 class="header">Chào mừng bạn đã đến</h1>

</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
</body>
</html>
