<header class="header">
    <div class="topbar clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-6 col-sm-6 text-left">
                    <p>
                        <strong><i class="fa fa-phone"></i></strong> +84 963 887 561 &nbsp;&nbsp;
                        <strong><i class="fa fa-envelope"></i></strong> 
                        <a href="mailto:22004406@st.vlute.edu.vn">22004406@st.vlute.edu.vn</a>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 hidden-xs text-right">
                    <div class="social">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>              
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default yamm">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-normal">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="css/images/logo.png" alt=""></a>
                </div>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Khóa học <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content clearfix">
                                    <div class="row-fluid">
                                        <div class="col-md-6 col-sm-6">
                                            <h4>Các Trang Khóa Học</h4>
                                            <ul id="courseTypesList">
                                                @foreach($courseTypes as $type)
                                                    <li data-type-id="{{ $type->id }}">
                                                        <a href="javascript:void(0)">{{ $type->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            
                                            <div id="coursesList">
                                                <div class="menu-widget text-center">
                                                    <div class="image-wrap entry">
                                                    <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                         <a href="{{ route('courses.index') }}" title=""><i class="flaticon-add"></i></a>
                                                    </div>              
                                                </div>
                                                    <h5><a href="{{ route('courses.index') }}">Tất cả khóa học</a></h5>
                                                    <small>VLUTE</small>
                                                    <a href="{{ route('courses.index') }}" class="menu-button">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            const courses = @json($courses);
                                            const courseTypesList = document.getElementById('courseTypesList');
                                            const coursesList = document.getElementById('coursesList');
                                            function formatDate(dateString) {
                                                const d = new Date(dateString);
                                                const day = String(d.getDate()).padStart(2, '0');
                                                const month = String(d.getMonth() + 1).padStart(2, '0'); // Tháng từ 0 nên +1
                                                const year = d.getFullYear();
                                                return `${day}/${month}/${year}`;
                                            }


                                            courseTypesList.querySelectorAll('li').forEach(li => {
                                                li.addEventListener('click', () => {
                                                    // Highlight loại đang chọn
                                                    courseTypesList.querySelectorAll('li').forEach(el => el.classList.remove('active-type'));
                                                    li.classList.add('active-type');

                                                    const typeId = li.getAttribute('data-type-id');
                                                    const filteredCourses = courses.filter(course => course.course_type_id == typeId);

                                                    if (filteredCourses.length > 0) {
                                                        coursesList.innerHTML = filteredCourses.map(course => `
                                                            <div class="menu-widget text-center" style="margin-bottom: 20px; position: relative;">
                                                                <div class="image-wrap entry">
                                                                    <img src="/upload/${course.image || 'course_01.jpg'}" alt="" class="img-responsive" style="width: 100%; max-width: 250px;">
                                                                    <div class="magnifier">
                                                                        <a href="#" title=""><i class="flaticon-add"></i></a>
                                                                    </div>
                                                                </div>
                                                                <h5><a href="#">${course.title}</a></h5>
                                                                <small>${course.teacher.name}</small>
                                                                <small class="course-date">${formatDate(course.created_at)}</small>
                                                                <hr>
                                                            </div>
                                                        `).join('');

                                                    } else {
                                                        coursesList.innerHTML = '<p>Không có khóa học nào</p>';
                                                    }
                                                });
                                            });
                                        </script>

                                        <style>
                                            #courseTypesList li {
                                                padding: 5px;
                                                cursor: pointer;
                                            }

                                            #courseTypesList li.active-type {
                                                background-color: #f0f0f0;
                                                font-weight: bold;
                                            }
                                            .course-date {
                                                position: absolute;
                                                top: 10px;
                                                right: 10px;
                                                font-size: 0.15rem;
                                                color: #666;
                                                font-style: italic;
                                            }

                                        </style>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="events.html">Events</a></li>
                    <li class="dropdown hassubmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="shop.html">Shop Layout</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown hassubmenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="blog.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-1.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-2.html">Blog Grid Sidebar</a></li>
                            <li><a href="blog-3.html">Blog Grid Fullwidth</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
