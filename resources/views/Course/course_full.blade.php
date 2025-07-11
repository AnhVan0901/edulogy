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
        <!-- End Modal Login -->

       <section class="section db p120">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center" style="margin-top: 100px;">
                            <h3>Khóa học</h3>
                            <ul class="breadcrumb">
                                <li><a href="{{ route('home') }}">Edulogy</a></li>
                                <li class="active">Khóa học</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row blog-grid">
                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_04.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Tips & Tricks</small>
                                        <a href="blog-single.html" title="">How to make JavaScript Linting With ESLint</a>
                                    </h4>
                                    <p>Donec maximus ligula in ante dignissim pretium. Donec vitae sem fermentum, scelerisque mi quis, cursus ipsum. Cras vitae est eu justo iaculis posuere. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Martin</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 15 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 122 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_02.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Language</small>
                                        <a href="blog-single.html" title="">Learn English Online with our professional teachers</a>
                                    </h4>
                                    <p>Integer pellentesque justo vitae nisl sagittis, nec tristique erat tincidunt. Nunc varius euismod arcu ut volutpat. Praesent massa ex, sodales nullam. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Amanda</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 14 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 455 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_03.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Tips & Tricks</small>
                                        <a href="blog-single.html" title="">Working with team members for new projects</a>
                                    </h4>
                                    <p>Duis id aliquam metus, et consectetur risus. Praesent dictum augue id velit mattis aliquet. Aliquam faucibus sollicitudin libero, sit amet massa nunc. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Bob DOE</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 13 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 444 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_01.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Tips & Tricks</small>
                                        <a href="blog-single.html" title="">Buy a Macbook and learn code today like a pro</a>
                                    </h4>
                                    <p>Nulla nisl velit, lobortis vel luctus eu, rutrum ac elit. Donec nec condimentum libero. Maecenas rutrum sit amet mi vel hendrerit. Praesent tempor id. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Edulogy</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 12 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 444 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_05.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Discounts</small>
                                        <a href="blog-single.html" title="">When you join our community, you will get discount</a>
                                    </h4>
                                    <p>Praesent dictum ullamcorper erat, a commodo elit aliquam vitae. Integer id quam ut dolor ultricies faucibus. Aenean auctor metus id mauris massa nunc. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Amanda</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 11 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 441 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_06.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Tips & Tricks</small>
                                        <a href="blog-single.html" title="">Best Trending Topics for ECommerce Solutions</a>
                                    </h4>
                                    <p>Quisque ultrices quam vitae dolor eleifend iaculis. Vivamus ut pretium arcu. Phasellus ut tellus eu est pharetra consectetur. Suspendisse in volutpat. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Jenny DOE</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 10 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 178 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_07.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Coding</small>
                                        <a href="blog-single.html" title="">Another awesome solution for writing code</a>
                                    </h4>
                                    <p>Nunc in elementum ex. Quisque lorem augue,  atquis, eleifend eget diam. Nunc fermentum, velit at malesuada laoreet, velit ante sed. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Martin</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 09 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 55 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_08.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Meet-up</small>
                                        <a href="blog-single.html" title="">Meet up - 2018 Amsterdam Would you like to join us?</a>
                                    </h4>
                                    <p>Phasellus ut tristique augue, dictum pharetra felis. Nam ut blandit nulla. Proin sit amet nisi nec nulla ultricies vulputate at vel lorem. Duis metus. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Edulogy</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 05 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 444 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img src="upload/blog_09.jpg" alt="" class="img-responsive">
                                    <div class="magnifier">
                                         <a href="blog-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                                <div class="course-details">
                                    <h4>
                                        <small>Tips & Tricks</small>
                                        <a href="blog-single.html" title="">What will you after complete all courses on Edulogy?</a>
                                    </h4>
                                    <p>Suspendisse vehicula tincidunt justo eu vehicula. Praesent placera leo, ac pulvinar lectus scelerisque nec. Phasellus consequat nec lacus metus. </p>
                                </div><!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-user"></i> Bob DOE</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 01 Jun</a></li>
                                            <li><a href="#"><i class="fa fa-eye"></i> 55 Views</a></li>
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="pagination ">
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">...</a></li>
                                <li><a href="javascript:void(0)">&raquo;</a></li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end boxed -->
            </div><!-- end container -->
        </section>

@endsection