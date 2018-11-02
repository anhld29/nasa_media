<?php $page = 'home'; include "./config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "./templates/common_css.php"; ?>

  <!-- <script src="./js/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="./js/bootstrap/4.1.3/bootstrap.min.js"></script> -->
<!-- *** javascript *** -->
<link href="./css/slick.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "./templates/common_js.php"; ?>
<script type="text/javascript">
	$(function(){
		$('.list-teacher').slick({
		  dots: false,
		  infinite: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: false
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
            dots: true,
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});

		$('.btn-chia-se').click(function(){
			$( '.menu-chia-se>div' ).removeClass("active");
			$( '.text-chia-se>div' ).removeClass("active");
			$( '.chia-se-img>img' ).removeClass("active");
			var myClass = $(this).attr("class");
			if(myClass.includes('1')){
				$('.menu-chia-se-1').addClass("active");
				$('.text-chia-se-1').addClass("active");
				$('.chia-se-1').addClass("active");
			}
			if(myClass.includes('2')){
				$('.menu-chia-se-2').addClass("active");
				$('.text-chia-se-2').addClass("active");
				$('.chia-se-2').addClass("active");
			}
			if(myClass.includes('3')){
				$('.menu-chia-se-3').addClass("active");
				$('.text-chia-se-3').addClass("active");
				$('.chia-se-3').addClass("active");
			}
		});
	});
</script>
</head>

<body id="<?php echo $page; ?>">
<?php include "./templates/header.php"; ?>
<div id="contents">
  <div id="header-slide" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#header-slide" data-slide-to="0" class="active"></li>
    <li data-target="#header-slide" data-slide-to="1"></li>
    <li data-target="#header-slide" data-slide-to="2"></li>
    <li data-target="#header-slide" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner header-carousel">
    <div class="carousel-item active">
      <img src="./images/slide-0.png" alt="slide-0" >
      <div class="carousel-caption">
        <p class="home-slide-text-1">KHÓA ĐÀO TẠO KHAI PHÁ</p>
        <p class="home-slide-text-2">LÃNH ĐẠO</p>
        <p class="home-slide-text-3">& QUẢN LÝ</p>
        <button type="button" class="btn btn-danger">ĐĂNG KÝ NGAY</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/slide-0.png" alt="slide-0" >
      <div class="carousel-caption">
        <p class="home-slide-text-1">KHÓA ĐÀO TẠO KHAI PHÁ</p>
        <p class="home-slide-text-2">LÃNH ĐẠO</p>
        <p class="home-slide-text-3">& QUẢN LÝ</p>
        <button type="button" class="btn btn-danger">ĐĂNG KÝ NGAY</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/slide-0.png" alt="slide-0" >
      <div class="carousel-caption">
        <p class="home-slide-text-1">KHÓA ĐÀO TẠO KHAI PHÁ</p>
        <p class="home-slide-text-2">LÃNH ĐẠO</p>
        <p class="home-slide-text-3">& QUẢN LÝ</p>
        <button type="button" class="btn btn-danger">ĐĂNG KÝ NGAY</button>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./images/slide-0.png" alt="slide-0" >
      <div class="carousel-caption">
        <p class="home-slide-text-1">KHÓA ĐÀO TẠO KHAI PHÁ</p>
        <p class="home-slide-text-2">LÃNH ĐẠO</p>
        <p class="home-slide-text-3">& QUẢN LÝ</p>
        <button type="button" class="btn btn-danger">ĐĂNG KÝ NGAY</button>
      </div>   
    </div>
  </div>
</div>
	<div class="home-block-caption">
	DANH SÁCH KHÓA HỌC
	<div class="bottom-boder-caption"></div>
</div>
<div class="wrap box-icon-top">
  <div class="row">
    <div class="col-4 col-lg-2">
      <div class="home-cate-khoa-hoc">
      	<img src="./images/forma.png" alt="Lãnh đạo & quản lý" width="45" height="45">
        <div>Lãnh đạo & quản lý</div>
      </div>
    </div>
    <div class="col-4 col-lg-2">
      <div class="home-cate-khoa-hoc">
      	<img src="./images/forma_1.png" alt="Kỹ năng chuyên nghiệp" width="45" height="45">
        <div>Kỹ năng chuyên nghiệp</div>
      </div>
    </div>
    <div class="col-4 col-lg-2">
      <div class="home-cate-khoa-hoc">
      	<img src="./images/forma_2.png" alt="Sản xuất & vận hành" width="45" height="45">
        <div>Sản xuất & vận hành</div>
      </div>
    </div>
    <div class="col-4 col-lg-2">
      <div class="home-cate-khoa-hoc">
      	<img src="./images/forma_3.png" alt="Tiếp thị bán hàng" width="45" height="45">
        <div>Tiếp thị & bán hàng</div>
      </div>
    </div>
    <div class="col-4 col-lg-2">
      <div class="home-cate-khoa-hoc">
      	<img src="./images/forma_4.png" alt="Tài chính & kế toán" width="45" height="45">
        <div>Tài chính & kế toán</div>
      </div>
    </div>
    <div class="col-4 col-lg-2">
      <div class="home-cate-khoa-hoc">
      	<img src="./images/forma_5.png" alt="Nhân sự & nhân lực" width="45" height="45">
        <div>Nhân sự & nhân lực</div>
      </div>
    </div>
  </div>
</div>

<div class="home-block-caption">
  KHÓA HỌC MỚI XUẤT BẢN
  <div class="bottom-boder-caption"></div>
</div>
<div class="wrap">
  <div class="con_courses">
    <ul class="box_courses">
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      
    </ul>   
  </div>
</div>


<div class="wrap">
	<div class="row">
	    <div class="col-12 col-lg-8">
			<div id="ads-slide" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#ads-slide" data-slide-to="0"></li>
			    <li data-target="#ads-slide" data-slide-to="1" class="active"></li>
			    <li data-target="#ads-slide" data-slide-to="2"></li>
			    <li data-target="#ads-slide" data-slide-to="3"></li>
			  </ul>
			  <div class="carousel-inner">
			    <div class="carousel-item">
      			  <img src="./images/red.png" alt="slide-0" height="420px">
			      <div class="carousel-caption">
			        <p class="home-ads-text-1">- NASA MEDIA</p>
			        <p class="home-ads-text-2">Tại sao nên chọn chúng tôi ?</p>
			        <p class="home-ads-text-3">Xứ mệnh trở thành một Hệ Sinh Thái Giáo Dục Trực Tuyến hàng đầu tại Việt Nam</p>
					<button type="button" class="btn btn-danger"> ĐỌC THÊM > </button>
				  </div>
			    </div>
			    <div class="carousel-item active">
      			  <img src="./images/red.png" alt="slide-0" height="420px">
			      <div class="carousel-caption">
			        <p class="home-ads-text-1">- NASA MEDIA</p>
			        <p class="home-ads-text-2">Tại sao nên chọn chúng tôi ?</p>
			        <p class="home-ads-text-3">Xứ mệnh trở thành một Hệ Sinh Thái Giáo Dục Trực Tuyến hàng đầu tại Việt Nam</p>
					<button type="button" class="btn btn-danger"> ĐỌC THÊM > </button>
				  </div>
			    </div>
			    <div class="carousel-item">
      			  <img src="./images/red.png" alt="slide-0" height="420px">
			      <div class="carousel-caption">
			        <p class="home-ads-text-1">- NASA MEDIA</p>
			        <p class="home-ads-text-2">Tại sao nên chọn chúng tôi ?</p>
			        <p class="home-ads-text-3">Xứ mệnh trở thành một Hệ Sinh Thái Giáo Dục Trực Tuyến hàng đầu tại Việt Nam</p>
					<button type="button" class="btn btn-danger"> ĐỌC THÊM > </button>
				  </div>
			    </div>
			    <div class="carousel-item">
      			  <img src="./images/red.png" alt="slide-0" height="420px">
			      <div class="carousel-caption">
			        <p class="home-ads-text-1">- NASA MEDIA</p>
			        <p class="home-ads-text-2">Tại sao nên chọn chúng tôi ?</p>
			        <p class="home-ads-text-3">Xứ mệnh trở thành một Hệ Sinh Thái Giáo Dục Trực Tuyến hàng đầu tại Việt Nam</p>
					<button type="button" class="btn btn-danger"> ĐỌC THÊM > </button>
				  </div>
			    </div>
			  </div>

			</div>
	    </div>
	    <div class="col-4 d-none d-sm-block">
	    	<div class="sm-ads">
	    		<div class="sm-ads-content">CEO<br>TÀI NĂNG</div>
	    	</div>
	    </div>
	</div>
</div>


<div class="home-block-caption">
  KHÓA HỌC MỚI XUẤT BẢN
  <div class="bottom-boder-caption"></div>
</div>
<div class="wrap">
  <div class="con_courses">
    <ul class="box_courses">
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      
    </ul>   
  </div>
</div>

<div class="wrap  d-none d-sm-block">
	<div class="row hop-tac-gv">
	    <div class="col-2">
	    	
	    </div>
	    <div class="col-2">
	    	<div class="hop-tac-01">TRỞ THÀNH <br> GIẢNG VIÊN</div>
	    </div>
	    <div class="col-5">
	    	<div class="hop-tac-02">Hợp tác giảng dạy cùng NASA MEDIA ngay!</div>
	    </div>
	    <div class="col-3">
			<div class="hop-tac-03"><button type="button" class="btn btn-danger"> ĐĂNG KÝ </button></div>
	    </div>
	</div>
</div>


<div class="home-block-caption">
  COMBO KHÓA HỌC
  <div class="bottom-boder-caption"></div>
</div>
<div class="wrap">
  <div class="con_courses">
    <ul class="box_courses">
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      <li class="box_course">
        <div class="box_course_wrap">
          <div class="box_top">
            <p class="photo"><img src="./images/course/img_course.png" alt="course 01" /></p>
            <h4 class="box_name">
              <img src="./images/course/img_couse_user1.png" alt="course 01" />
              <span class="name">Tuấn Hạ</span>
            </h4>
          </div>
          <div class="box_info">
            <h4 class="sst_title">Khoá học lãnh đạo và quản lý</h4>
            <h6 class="name">Phạm Thành Long</h6>
            <div class="box_price">
              <span class="price">599.000đ</span>
              <span class="price_sale">  2.000.000đ    </span>
              <span class="price_percent"> -70%</span>
            </div>
            <div class="box_desc">
              <ul class="add-to-links">
                 <!-- <li>
                   <a class="#" href="#" title="Add to Wishlist">
                     <i class="fa fa-heart"></i> <span>342</span>
                   </a>
                 </li> -->
                 <!-- <li>
                   <a class="#" href="#" title="Add to Compare">
                     <i class="fa fa-comments"></i> <span>10</span>
                   </a>
                 </li> -->
                 <li>
                  <div class="star-rating">
                  <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                  </div>
                 </li>
                
               </ul>
            </div>
          </div>
        </div>
      </li>
      
    </ul>   
  </div>
</div>


<div class="giang-vien-tieu-bieu">
	<div class="home-block-caption">
	  GIẢNG VIÊN TIÊU BIỂU
	  <div class="bottom-boder-caption"></div>
	</div>
	<div class="slide-giang-vien box-teacher-home">
    <ul class="list-teacher">
          <li>
            <div class="box_inner">
              <div class="box_img"><a href="#" class="over"><img src="images/img_teach.jpg" alt="Hán Quang Dự"></a></div>
              <h4><a href="#" class="over">Hán Quang Dự</a></h4>
              <div class="ti-job">Giám đốc đào tạo công ty GCC Việt Nam</div>
              <div class="box_btn"><a href="#" class="over">Xem thêm</a></div>
            </div>
          </li>
          <li>
            <div class="box_inner">
              <div class="box_img"><a href="#" class="over"><img src="images/img_teach.jpg" alt="Hán Quang Dự"></a></div>
              <h4><a href="#" class="over">Hán Quang Dự</a></h4>
              <div class="ti-job">Giám đốc đào tạo công ty GCC Việt Nam</div>
              <div class="box_btn"><a href="#" class="over">Xem thêm</a></div>
            </div>
          </li>
          <li>
            <div class="box_inner">
              <div class="box_img"><a href="#" class="over"><img src="images/img_teach.jpg" alt="Hán Quang Dự"></a></div>
              <h4><a href="#" class="over">Hán Quang Dự</a></h4>
              <div class="ti-job">Giám đốc đào tạo công ty GCC Việt Nam</div>
              <div class="box_btn"><a href="#" class="over">Xem thêm</a></div>
            </div>
          </li>
          <li>
            <div class="box_inner">
              <div class="box_img"><a href="#" class="over"><img src="images/img_teach.jpg" alt="Hán Quang Dự"></a></div>
              <h4><a href="#" class="over">Hán Quang Dự</a></h4>
              <div class="ti-job">Giám đốc đào tạo công ty GCC Việt Nam</div>
              <div class="box_btn"><a href="#" class="over">Xem thêm</a></div>
            </div>
          </li>
          <li>
            <div class="box_inner">
              <div class="box_img"><a href="#" class="over"><img src="images/img_teach.jpg" alt="Hán Quang Dự"></a></div>
              <h4><a href="#" class="over">Hán Quang Dự</a></h4>
              <div class="ti-job">Giám đốc đào tạo công ty GCC Việt Nam</div>
              <div class="box_btn"><a href="#" class="over">Xem thêm</a></div>
            </div>
          </li>
          <li>
            <div class="box_inner">
              <div class="box_img"><a href="#" class="over"><img src="images/img_teach.jpg" alt="Hán Quang Dự"></a></div>
              <h4><a href="#" class="over">Hán Quang Dự</a></h4>
              <div class="ti-job">Giám đốc đào tạo công ty GCC Việt Nam</div>
              <div class="box_btn"><a href="#" class="over">Xem thêm</a></div>
            </div>
          </li>

        </ul>
	</div>
</div>

<div class="home-block-caption">
  HỌC VIÊN CHIA SẺ
  <div class="bottom-boder-caption"></div>
</div>

<div class="wrap">
  	<div class="row box_hocvien">
      <div class="col-12 col-lg-6">
        <div class="text-chia-se">
          <div class="text-chia-se-1">
            <p>1 That's how it works. From the docs.. "These classes are responsive, so you can set the order by breakpoint (e.g., .order-1.order-md-2). Includes support for 1 through 12 across all five grid tiers
            </p>
            <h4>Ha Van Tham <span> Kinh doanh thực phẩm sạch</span></h4>
          </div>
          <div class="text-chia-se-2 active">
            <p>2 hat's how it works. From the docs.. "These classes are responsive, so you can set the order by breakpoint (e.g., .order-1.order-md-2). Includes support for 1 through 12 across all five grid tiers
            </p>
            <h4>Ha Van Tham <span> Kinh doanh thực phẩm sạch</span></h4>
          </div>
          <div class="text-chia-se-3">
            <p>3 That's how it works. From the docs.. "These classes are responsive, so you can set the order by breakpoint (e.g., .order-1.order-md-2). Includes support for 1 through 12 across all five grid tiers
            </p>
            <h4>Ha Van Tham <span> Kinh doanh thực phẩm sạch</span></h4>
          </div>
        </div>
      </div>
	    <div class="col-12 col-lg-6">
	    	<div class="chia-se-img">
		    	<img src="./images/avata.jpeg" class="chia-se-1 btn-chia-se">
		    	<img src="./images/gv.png" class="chia-se-2 btn-chia-se active">
		    	<img src="./images/avata.jpeg" class="chia-se-3 btn-chia-se">
	    	</div>
	    </div>
	    
   	</div>

  	<div class="row">
	    <div class="col-12 col-lg-6">
	    	<div class="menu-chia-se">
	    		<div class="menu-chia-se-1 btn-chia-se"></div>
	    		<div class="menu-chia-se-2 btn-chia-se active"></div>
	    		<div class="menu-chia-se-3 btn-chia-se"></div>
	    	</div>
	    </div>
	    <div class="col-6">
	    	
	    </div>
	</div>
</div>

</div><!-- /#contents -->
<?php include "./templates/footer.php"; ?>
</body>
</html>
