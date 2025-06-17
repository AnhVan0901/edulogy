@extends('layout')
@section('title', 'Edulogy - Hệ thống quản lý học tập')
@section('content')

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="Bạn đang tìm khóa học nào?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>Hệ Thống Quản Lý Học Tập</p>
                    <small>Edulogy là lựa chọn lý tưởng cho tổ chức, doanh nghiệp và hệ thống giáo dục trực tuyến của bạn. Tạo khóa học trực tuyến ngay bây giờ với các mẫu trang không giới hạn, tùy chọn màu sắc và tính năng menu đa dạng.</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="#" class="btn btn-primary wow slideInLeft">Tìm Hiểu Thêm</a> &nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-default wow slideInRight">Đăng nhập</a>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Khám Phá <i class="fa fa-angle-down"></i></span>
            </div>
        </section>


        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="upload/design_team.png" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h2>Chúng tôi là hệ thống <mark>quản lý học tập</mark> tận tâm từ<br>
                                Việt Nam. Mang đến giải pháp thiết kế số<br>
                                và phát triển website đẹp, dễ sử dụng</h2>

                            <p>Hệ thống hỗ trợ giảng dạy và học tập hiệu quả, giúp sinh viên và giảng viên kết nối dễ dàng hơn. Giao diện thân thiện, chức năng đa dạng đáp ứng nhu cầu đào tạo đại học hiện đại.</p>


                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                        <li>Trao đổi bài vở</li>
                                        <li>Chia sẻ tài liệu</li>
                                        <li>Tài liệu tham khảo</li>
                                        <li>Học mọi lúc</li>
                                        <li>Giao diện dễ dùng</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
                                        <li>Thông báo kiểm tra</li>
                                        <li>Chuyển bài mượt</li>
                                        <li>Hỗ trợ file đa dạng</li>
                                        <li>Tương tác dễ</li>
                                        <li>Tùy chỉnh thông báo</li>
                                    </ul>    
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                    <ul class="check">
                                        <li>Quản lý kiểm tra</li>
                                        <li>Phông chữ rõ ràng</li>
                                        <li>Tùy chỉnh giao diện</li>
                                        <li>Bảng điểm minh bạch</li>
                                        <li>Cập nhật thông tin</li>
                                    </ul>
                                </div>
                            </div>
 

                            <hr class="invis">

                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-primary">Tìm hiểu thêm về chúng tôi</a>
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Khóa học mới nhất</h3>
                    <p>Chúng tôi luôn cập nhật những khóa học chất lượng, giúp bạn nâng cao kiến thức và kỹ năng. Tham gia ngay để không bỏ lỡ cơ hội học tập tốt nhất.</p>

                </div><!-- end title -->

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Javascript</small>
                                    <a href="#" title="">Modern JavaScript Linting With ESLint</a>
                                </h4>
                                <p>Fusce interdum, elit sit amet vehicula malesuada, eros libero elementum orci.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 21</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$22.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_02.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Design</small>
                                    <a href="#" title="">Designing Game UI Assets in Adobe Illustrator</a>
                                </h4>
                                <p>Curabitur condimentum velit non odio mattis tristique. Nam vitae orci aliquam. </p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 41</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 33 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$55.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_03.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>PHP Coding</small>
                                    <a href="#" title="">How to Become a Web Developer: Learn PHP</a>
                                </h4>
                                <p>Donec auctor nec nibh sit amet pulvinar. Mauris nulla elit, lacinia ac facilisis mattis.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 35</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 1 Hrs.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$51.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_04.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>PHP Coding</small>
                                    <a href="#" title="">How to Build a Custom Theme for Drupal 8</a>
                                </h4>
                                <p>Pellentesque ut enim dictum, interdum lorem eget, vulputate eros sed felis euismod.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 35</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 45 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$51.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Javascript</small>
                                    <a href="#" title="">Modern JavaScript Linting With ESLint</a>
                                </h4>
                                <p>Fusce interdum, elit sit amet vehicula malesuada, eros libero elementum orci.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 21</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$22.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="section-button text-center">
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">Xem tất cả khóa học</a>
                </div>
            </div><!-- end container -->
        </section>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message text-center">
                           <h3>Chào bạn, Edulogy mang đến cho bạn những dịch vụ, ưu đãi và dự án chất lượng nhất!</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box m30">
                            <i class="flaticon-computer-tool-for-education"></i>
                            <h4>Learning system</h4>
                            <p>All sections required for online training are included to Edulogy.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="box m30">
                            <i class="flaticon-monitor-tablet-and-smartohone"></i>
                            <h4>Works all mobile devices</h4>
                            <p>The most important feature of this template is that it is compatible with all mobile devices. Your customers can also visit your site easily from tablets and phones.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="box m30">
                            <i class="flaticon-download-business-statistics-symbol-of-a-graphic"></i>
                            <h4>User Dashboard</h4>
                            <p>We designed the design of all the sub-pages needed for the users.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <i class="flaticon-html5"></i> <i class="flaticon-css-3"></i>
                            <h4>Compatible HTML5 & CSS3</h4>
                            <p>HTML5 is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current version of the HTML standard.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="box">
                            <i class="flaticon-html-coding"></i>
                            <h4>Bootstrap Framework</h4>
                            <p>Bootstrap is a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">1230</h4>
                           <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Sinh viên hài lòng</h3>
                            <p>Phản hồi tích cực từ sinh viên về tài liệu và trải nghiệm học tập.</p>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">331</h4>
                            <h3><i class="flaticon-online-course"></i> Khóa học đã hoàn thành</h3>
                            <p>Nhiều khóa học đã kết thúc với kết quả tích cực.</p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4">
                        <div class="stat-count">
                            <h4 class="stat-timer">8901</h4>
                            <h3><i class="fa fa-folder-open"></i> Tài liệu đã chia sẻ</h3>
                            <p>Các tệp học tập đã được tải lên để cùng tham khảo.</p>
                        </div><!-- stat-count -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Cảm nhận từ sinh viên</h3>
                    <p>Chia sẻ thực tế về trải nghiệm học tập, tài liệu và các tiện ích trên hệ thống.</p>

                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname">
                                <strong><img src="upload/testimonial_01.png" alt="" class="img-circle"> Nguyễn Thảo</strong>
                            </p>
                            <p>Hệ thống dễ sử dụng, tài liệu phong phú, hỗ trợ học tập rất hiệu quả.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname">
                                <strong><img src="upload/testimonial_02.png" alt="" class="img-circle"> Minh Quân</strong>
                            </p>
                            <p>Giúp tôi dễ dàng truy cập tài liệu, nộp bài và theo dõi kết quả học tập.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="box testimonial">
                            <p class="testiname">
                                <strong><img src="upload/testimonial_03.png" alt="" class="img-circle"> Hoàng Nam</strong>
                            </p>
                            <p>Trang web rất hữu ích, nộp file cũng nhanh chóng.</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Tin Tức Mới Nhất</h3>
                    <p>Cập nhật những thông báo mới nhất về lịch học, bài kiểm tra, tài liệu tham khảo và các hoạt động liên quan đến lớp học. Hãy theo dõi thường xuyên để không bỏ lỡ thông tin quan trọng.</p>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_01.jpeg" alt="Học Javascript hiệu quả" class="img-responsive">
                                <div class="magnifier">
                                    <a href="blog-single.html" title="Xem chi tiết bài viết"><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Cách học lập trình Javascript hiệu quả từ cơ bản đến nâng cao</a></h4>
                                <p>Phương pháp học Javascript từ cơ bản đến nâng cao, giúp bạn viết code chuẩn và ứng dụng thực tế.</p>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">21 Tháng 3, 2017</a></li>
                                    <li><a href="#">Tác giả: WP Destek</a></li>
                                    <li><a href="#">14 lượt chia sẻ</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_02.jpeg" alt="Hướng dẫn thiết kế web" class="img-responsive">
                                <div class="magnifier">
                                    <a href="blog-single.html" title="Xem chi tiết bài viết"><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Hướng dẫn thiết kế & phát triển web phù hợp nhất</a></h4>
                                <p>Khóa học thiết kế web toàn diện, từ giao diện đến chức năng, giúp bạn làm chủ kỹ năng phát triển website.</p>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">20 Tháng 3, 2017</a></li>
                                    <li><a href="#">Tác giả: WP Destek</a></li>
                                    <li><a href="#">11 lượt chia sẻ</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12">
                        <div class="blog-box">
                            <div class="image-wrap entry">
                                <img src="upload/blog_03.jpeg" alt="Thiết kế web responsive" class="img-responsive">
                                <div class="magnifier">
                                    <a href="blog-single.html" title="Xem chi tiết bài viết"><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->

                            <div class="blog-desc">
                                <h4><a href="blog-single.html">Thiết kế chuẩn responsive cho mọi thiết bị</a></h4>
                                <p>Giới thiệu cách tạo web responsive tối ưu trên điện thoại, máy tính bảng và máy tính để bàn.</p>
                            </div><!-- end blog-desc -->

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li><a href="#">19 Tháng 3, 2017</a></li>
                                    <li><a href="#">Tác giả: WP Destek</a></li>
                                    <li><a href="#">44 lượt chia sẻ</a></li>
                                </ul>
                            </div><!-- end post-meta -->
                        </div><!-- end blog -->
                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end container -->
        </section>

        <section class="section bgcolor1">
            <div class="container">
                <a href="#">
                <div class="row callout">
                   <div class="col-md-4 text-center">
                        <h3 class="text-primary font-weight-bold">Miễn phí</h3>
                        <h4>Tham gia khóa học miễn phí ngay hôm nay!</h4>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead">Đăng ký tài khoản dễ dàng và nhanh chóng, chỉ cần nhập mật khẩu để bắt đầu tham gia!</p>
                    </div>
                </div><!-- end row -->
                </a>
            </div><!-- end container -->  
        </section>

@endsection