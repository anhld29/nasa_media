<?php $page = 'homepage'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>
<link href="./css/slick.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
<!-- <script src="./js/homepage.js"></script> -->
<script src="./js/slick.min.js"></script>
<script>
	$(window).bind("load resize", init);
	function init(){
		var _width = $(window).width();
		if(_width <= 767){
			$('.box_sidebar').insertAfter('.box_content_wrap .box_featured');
		}else{
		}
	}//init	
	$(function(){
		$('#list_comments').slick({
			slidesToShow: 2,
			slidesToScroll: 2,
			arrows: false,
			// fade: true,
			dots:true,
			responsive: [
	            {
	              breakpoint: 1024,
	              settings: {
	                slidesToShow: 2,
					slidesToScroll: 2,
	                infinite: true,
	                dots: false
	              }
	            },
	            {
	              breakpoint: 992,
	              settings: {
	                slidesToShow: 2,
					slidesToScroll: 2,
	              }
	            },
	            {
	              breakpoint: 767,
	              vertical: true,
	              settings: {
	                slidesToShow: 2,
	                slidesToScroll: 2
	              }
	            }
	          ]   
			// asNavFor: '.slider-nav-detail'
		});	
	});	
</script>
</head>

<body id="<?php echo $page; ?>">
<?php include "./templates/header.php"; ?>
<div id="contents">
	<div class="page-title">
		<div class="wrap">
			<h2>Nghệ Thuật quản trị nhân sự</h2>
			<div class="sub-title">Sở hữu đội ngũ nhân sự bạn hằng mơ ước bằng các nghệ thuật đơn giản, dễ dàng mà hiệu quả</div>
		</div>
	</div>	
	<div class="wrap">
		<div class="con_course">
			<div class="box_course_wrap">
				<div class="box_content">
					<div class="box_content_wrap">
						<div class="box_featured">
							<p class="photo"><img src="./images/course/img_course_featured.png" alt="course 01" /></p>
						</div>
						<h4 class="sst_title">Bạn sẽ học được gì</h4>
						<div class="box_list">
							<ul>
								<li>Cách để lên một bản kế hoạch kinh doanh hoàn hảo nhất giúp bám sát nhu cầu thị trường và tối đa hóa doanh thu cho doanh nghiệp</li>
								<li>Cách nắm bắt tâm lý khách hàng và đưa ra chiến lược kinh doanh thông minh, hiệu quả cao</li>
								<li>Kỹ năng định giá sản phẩm chuẩn chỉnh giúp doanh nghiệp mở rộng thị phần nhanh chóng</li>
								<li>Những tuyệt chiêu trong đàm phán kinh doanh giúp làm chủ cuộc thương thuyết, tạo lợi thế tối đa cho doanh nghiệp</li>
								<li>Bí quyết xây dựng và huấn luyện đội sales thiện chiến, chuyên nghiệp giúp tăng trưởng doanh thu gấp 2, 3 lần mà không cần giám sát</li>
							</ul>
						</div>
						<h4 class="sst_title">Giới thiệu khóa học</h4>
						<p class="txt">Nếu như “HIỀN TÀI LÀ NGUYÊN KHÍ CỦA QUỐC GIA” thì với một doanh nghiệp, nhân sự chính là huyết mạch thành bại phần nhiều ở cách quản trị nhân sự của người đứng đầu<br />
						<br />
						Người quản lý giỏi là người biết “sử dụng” những người giỏi hơn mình. Tuy nhiên không phải ai cũng may mắn có được người tài phò tá hoặc sở hữu được người tài nhưng lại không biết cách tận dụng họ. Đó sẽ là một sai lầm vô cùng đáng tiếc!<br />
						<br />
						Nếu nhà quản lý không có được cái nhìn khách quan, đánh giá đúng về năng lực của mỗi nhân viên để điều động, bố trí cho phù hợp sẽ khiến doanh nghiệp rơi vào cái vòng tổ chức lộn xộn, tỷ lệ nhân viên bỏ việc cao, ảnh hưởng đến hiệu quả làm việc của Công ty.<br />
						<br />
						Một vòng quy trình lặp lại, cứ tuyển dụng rồi sa thải, nhân viên không thể phát triển, doanh nghiệp cũng bé mãi chẳng chịu lớn , khó mà có thể giữ chân được những nhân viên thực sự có năng lực.<br />
						<br />
						Vậy đâu sẽ là giải pháp tổng thể cho mọi vấn đề về nhân sự?<br />
						<br />
						KHÓA HỌC ONLINE "CEO VÀ NGHỆ THUẬT QUẢN TRỊ NHÂN SỰ" gồm 60 bài học chi tiết được chia làm 6 phần nội dung rõ ràng, sẽ cung cấp cho bạn “bí kíp dễ dàng” để trở thành người “cầm quân” giỏi</p>	

						<h4 class="sst_title">Nội dung khóa học</h4>
						<div class="box_content_course">
							
							<div class="box_left">
								<ul>
									<li>
										<h6><i class="fa fa-video-camera"></i> Chiến lược nhân sự</h6>
									</li>
									<li><i class="fa fa-play-circle"></i> Giới thiệu</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Hoạt động nhân sự trong doanh nghiệp</li>
									<li><i class="fa fa-play-circle"></i> Hoạch định nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Phân tích công việc và mô tả công việc</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Nhu cầu đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Đánh giá đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Xác định cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Xây dựng cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Quản lý hiệu suất làm việc của nhân viên</li>
									<li><i class="fa fa-play-circle"></i> Chương trình thưởng</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược về văn hóa doanh nghiệp</li>
								</ul>
								<ul>
									<li>
										<h6><i class="fa fa-video-camera"></i> Chiến lược nhân sự</h6>
									</li>
									<li><i class="fa fa-play-circle"></i> Giới thiệu</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Hoạt động nhân sự trong doanh nghiệp</li>
									<li><i class="fa fa-play-circle"></i> Hoạch định nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Phân tích công việc và mô tả công việc</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Nhu cầu đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Đánh giá đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Xác định cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Xây dựng cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Quản lý hiệu suất làm việc của nhân viên</li>
									<li><i class="fa fa-play-circle"></i> Chương trình thưởng</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược về văn hóa doanh nghiệp</li>
								</ul>
							</div>
							<div class="box_right">
								<ul>
									<li>
										<h6><i class="fa fa-video-camera"></i> Chiến lược nhân sự</h6>
									</li>
									<li><i class="fa fa-play-circle"></i> Giới thiệu</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Hoạt động nhân sự trong doanh nghiệp</li>
									<li><i class="fa fa-play-circle"></i> Hoạch định nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Phân tích công việc và mô tả công việc</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Nhu cầu đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Đánh giá đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Xác định cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Xây dựng cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Quản lý hiệu suất làm việc của nhân viên</li>
									<li><i class="fa fa-play-circle"></i> Chương trình thưởng</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược về văn hóa doanh nghiệp</li>
								</ul>
								<ul>
									<li>
										<h6><i class="fa fa-video-camera"></i> Chiến lược nhân sự</h6>
									</li>
									<li><i class="fa fa-play-circle"></i> Giới thiệu</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Hoạt động nhân sự trong doanh nghiệp</li>
									<li><i class="fa fa-play-circle"></i> Hoạch định nhân sự</li>
									<li><i class="fa fa-play-circle"></i> Phân tích công việc và mô tả công việc</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Nhu cầu đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Đánh giá đào tạo</li>
									<li><i class="fa fa-play-circle"></i> Xác định cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Xây dựng cam kết làm việc</li>
									<li><i class="fa fa-play-circle"></i> Quản lý hiệu suất làm việc của nhân viên</li>
									<li><i class="fa fa-play-circle"></i> Chương trình thưởng</li>
									<li><i class="fa fa-play-circle"></i> Chiến lược về văn hóa doanh nghiệp</li>
								</ul>
							</div>
						</div>
						<h4 class="sst_title">Thông tin giảng viên</h4>
						<div class="box_teacher">
							<div class="box_left">
								<p class="photo"><img src="./images/course/img_author.png" alt="course 01" /></p>
								<div class="info">
									<h4 class="author">Phạm Thành Long</h4>
									<p class="info_left"><i class="fa fa-users"></i> 1693 học viên</p>
									<p class="info_left"><i class="fa fa-file-text"></i> 12 khóa học</p>
								</div>
								
							</div>
							<div class="box_right">
								<h4 class="author">Phạm Thành Long</h4>
								<p class="info">Diễn giả - Luật sư - Người sáng lập Công ty Luật Gia Phạm
								Người sáng lập Công ty Luật Gia Phạm.<br />
								Với hơn 15 năm kinh nghiệm trong chuyên ngành Luật Kinh doanh và Luật Sở hữu trí tuệ, ông đã giúp đỡ hơn 34.000 lượt doanh nhân phát triển công việc kinh doanh của họ.<br />
								<br />
								Trong thời gian gần đây, với vai trò là người nói chuyện trước công chúng, Luật sư Phạm Thành Long đang là một hiện tượng: thu hút hàng ngàn Doanh nhân tham gia mỗi chương trình của ông. Các học viên tham dự chương trình đều tạo nên những đột phá trong cuộc đời của họ, đặc biệt là tạo ra những thay đổi mạnh mẽ, suy nghĩ tích cực để có một cuộc sống tốt hơn.</p>
							</div>
						</div>
						<h4 class="sst_title">Nhận xét của học viên</h4>
						<div id="list_comments" class="box_comment">
							<div class="box_item">
								<div class="item_wrap">
									<p class="photo"><img src="./images/course/img_sutdent1.png" alt="course 01" /></p>
									<div class="box_info">
										<p class="name">NGUYỄN VĂN HÙNG</p>
										<p class="comment">Trước đây tôi cảm thấy vô cùng khó khăn khi giao việc và quản lý nhân viên, sau khi học xong khóa học về quản trị nhân sự này, tôi đã ngộ ra nhiều sai lầm trong cách quản lý của mình. Đến nay tôi đã biết cách phân công đúng người đúng việc, việc quản lý nhân viên cũng vì thế suôn sẻ hơn </p>
									</div>
								</div>
							</div>
							<div class="box_item">
								<div class="item_wrap">
									<p class="photo"><img src="./images/course/img_sutdent2.png" alt="course 01" /></p>
									<div class="box_info">
										<p class="name">NGUYỄN VĂN HÙNG</p>
										<p class="comment">Trước đây tôi cảm thấy vô cùng khó khăn khi giao việc và quản lý nhân viên, sau khi học xong khóa học về quản trị nhân sự này, tôi đã ngộ ra nhiều sai lầm trong cách quản lý của mình. Đến nay tôi đã biết cách phân công đúng người đúng việc, việc quản lý nhân viên cũng vì thế suôn sẻ hơn </p>
									</div>
								</div>
							</div>
							<div class="box_item">
								<div class="item_wrap">
									<p class="photo"><img src="./images/course/img_sutdent1.png" alt="course 01" /></p>
									<div class="box_info">
										<p class="name">NGUYỄN VĂN HÙNG</p>
										<p class="comment">Trước đây tôi cảm thấy vô cùng khó khăn khi giao việc và quản lý nhân viên, sau khi học xong khóa học về quản trị nhân sự này, tôi đã ngộ ra nhiều sai lầm trong cách quản lý của mình. Đến nay tôi đã biết cách phân công đúng người đúng việc, việc quản lý nhân viên cũng vì thế suôn sẻ hơn </p>
									</div>
								</div>
							</div>
							<div class="box_item">
								<div class="item_wrap">
									<p class="photo"><img src="./images/course/img_sutdent2.png" alt="course 01" /></p>
									<div class="box_info">
										<p class="name">NGUYỄN VĂN HÙNG</p>
										<p class="comment">Trước đây tôi cảm thấy vô cùng khó khăn khi giao việc và quản lý nhân viên, sau khi học xong khóa học về quản trị nhân sự này, tôi đã ngộ ra nhiều sai lầm trong cách quản lý của mình. Đến nay tôi đã biết cách phân công đúng người đúng việc, việc quản lý nhân viên cũng vì thế suôn sẻ hơn </p>
									</div>
								</div>
							</div>

						</div>
						<div class="box_course_other">
							<h4 class="sst_title">Khóa học liên quan</h4>
							
							<ul>
								<li>
									<p class="photo">
										<img src="./images/course/img_course2.png" alt="course 01" />
									</p>
									<div class="box_info">
										<h5>Nghệ thuật bán hàng công thức 6C</h5>
										<div class="box_middle">
											<h6 class="name">ThS. Đặng Thanh Vân</h6>
											<div class="box_star">
												<div class="star-rating">
											 		<span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
											 	</div><span>(466)</span>
											</div>
										</div>
										<div class="box_price">
											<span class="price">599.000đ</span>
											<span class="price_sale">  2.000.000đ    </span>
										</div>
									</div>
								</li>
								<li>
									<p class="photo">
										<img src="./images/course/img_course3.png" alt="course 01" />
									</p>
									<div class="box_info">
										<h5>Nghệ thuật bán hàng công thức 6C</h5>
										<div class="box_middle">
											<h6 class="name">ThS. Đặng Thanh Vân</h6>
											<div class="box_star">
												<div class="star-rating">
											 		<span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
											 	</div>(466)
											</div>
										</div>
										<div class="box_price">
											<span class="price">599.000đ</span>
											<span class="price_sale">  2.000.000đ    </span>
										</div>
									</div>
								</li>
								<li>
									<p class="photo">
										<img src="./images/course/img_course4.png" alt="course 01" />
									</p>
									<div class="box_info">
										<h5>Nghệ thuật bán hàng công thức 6C</h5>
										<div class="box_middle">
											<h6 class="name">ThS. Đặng Thanh Vân</h6>
											<div class="box_star">
												<div class="star-rating">
											 		<span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
											 	</div>(466)
											</div>
										</div>
										<div class="box_price">
											<span class="price">599.000đ</span>
											<span class="price_sale">  2.000.000đ    </span>
										</div>
									</div>
								</li>
								<li>
									<p class="photo">
										<img src="./images/course/img_course5.png" alt="course 01" />
									</p>
									<div class="box_info">
										<h5>Nghệ thuật bán hàng công thức 6C</h5>
										<div class="box_middle">
											<h6 class="name">ThS. Đặng Thanh Vân</h6>
											<div class="box_star">
												<div class="star-rating">
											 		<span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
											 	</div>(466)
											</div>
											
										</div>
										<div class="box_price">
											<span class="price">599.000đ</span>
											<span class="price_sale">  2.000.000đ    </span>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<div class="box_sidebar">
					<div class="box-img-feauture-detail">
						<div class="box-img-over"><img src="images/img_techer02.png" alt=""></div>
					</div>
					<div class="ic-item"><i class="fa fa-user"></i> Giảng viên: Phạm Thành Long</div>
					<div class="ic-item"><i class="fa fa-file-text"></i> Giáo trình: 59 bài giảng</div>
					<div class="ic-item"><i class="fa fa-undo"></i> Sở hữu khóa học trọn đời</div>
					<div class="ic-item"><i class="fa fa-mobile"></i> Học mọi lúc mọi nơi: Mobile, TV, PC</div>
					<div class="ic-item"><i class="fa fa-gift"></i> Quà tặng biểu mẫu đi kèm</div>
					<div class="ic-item">
						<div class="star-rating">
							<span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
						</div> (466)
					</div>
					<div class="ic-item"><span class="price">599.000đ</span><span class="price_sale">2.000.000 đ</span></div>
					<div class="ic-item text-italic"><i class="fa fa-dashboard"></i> Thời gian ưu đãi còn 1 ngày</div>
					<div class="btn_reg"><a href="#">Đăng ký ngay</a></div>
					
				</div>
			</div>
			
		</div>
	</div>

</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
</body>
</html>
