<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Home')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main Styles -->
    <link rel="stylesheet" href="backend/assets/styles/style.min.css">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="backend/assets/fonts/material-design/css/materialdesignicons.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="backend/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="backend/assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="backend/assets/plugin/sweet-alert/sweetalert.css">

    <link rel="stylesheet" href="backend/assets/styles/jquery.dataTables.min.css">


    <!-- Dark Themes -->
    <link rel="stylesheet" href="backend/assets/styles/style-dark.min.css">

</head>

<body>

<!-- /.main-menu -->
@include('backend.dashboard.layouts.menu')
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <div class="ico-item">
            <a href="#" class="ico-item mdi mdi-magnify js__toggle_open" data-target="#searchform-header"></a>
            <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="mdi mdi-magnify button-search" type="submit"></button></form>
            <!-- /.searchform -->
        </div>
        <!-- /.ico-item -->
        <a href="#" class="ico-item mdi mdi-email notice-alarm js__toggle_open" data-target="#message-popup"></a>
        <a href="#" class="ico-item pulse"><span class="ico-item mdi mdi-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
        <a href="#" class="ico-item mdi mdi-logout js__logout"></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
    <h2 class="popup-title">Your Notifications</h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-1.jpg" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-2.jpg" alt=""></span>
                    <span class="name">Anna William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
                    <span class="name">Update Status</span>
                    <span class="desc">Failed to get available update data. To ensure the please contact us.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-1.jpg" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-6.jpg" alt=""></span>
                    <span class="name">Michael Zenaty</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">50 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-4.jpg" alt=""></span>
                    <span class="name">Simon</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">1 hour</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
                    <span class="name">Account Contact Change</span>
                    <span class="desc">A contact detail associated with your account has been changed.</span>
                    <span class="time">2 hours</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-7.jpg" alt=""></span>
                    <span class="name">Helen 987</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Yesterday</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-2.jpg" alt=""></span>
                    <span class="name">Denise Jenny</span>
                    <span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
                    <span class="time">Oct, 28</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-8.jpg" alt=""></span>
                    <span class="name">Thomas William</span>
                    <span class="desc">Like your post: “Facebook Messenger”</span>
                    <span class="time">Oct, 27</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
    <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-1.jpg" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-3.jpg" alt=""></span>
                    <span class="name">Harry Halen</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-4.jpg" alt=""></span>
                    <span class="name">Thomas Taylor</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-1.jpg" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-sm-5.jpg" alt=""></span>
                    <span class="name">Helen Candy</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-2.jpg" alt=""></span>
                    <span class="name">Anna Cavan</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 hour ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-success"><i class="fa fa-user"></i></span>
                    <span class="name">Jenny Betty</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 day ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="backend/assets/images/avatar-5.jpg" alt=""></span>
                    <span class="name">Denise Peterson</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
                    <span class="time">1 year ago</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
<!-- /#message-popup -->

<!--/#wrapper -->
<div id="wrapper">
    @section('content')
        @show()
</div>
<!--/#wrapper -->


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="backend/assets/script/html5shiv.min.js"></script>
<script src="backend/assets/script/respond.min.js"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="backend/assets/scripts/jquery.min.js"></script>
<script src="backend/assets/scripts/modernizr.min.js"></script>
<script src="backend/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="backend/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="backend/assets/plugin/nprogress/nprogress.js"></script>
<script src="backend/assets/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="backend/assets/plugin/waves/waves.min.js"></script>

<script src="backend/assets/scripts/jquery-3.5.1.js"></script>
<script src="backend/assets/scripts/jquery.dataTables.min.js"></script>


<script src="backend/assets/scripts/main.js"></script>
</body>
</html>
