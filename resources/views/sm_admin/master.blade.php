<!DOCTYPE html>
<html lang="en">

    <head>
        @include('sm_admin.include.header')
    </head>

    <body>
        <div>
            <!--BEGIN THEME SETTING-->
            <!--END THEME SETTING-->
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            @include('sm_admin.include.topbar')
            <!-- END TOPBAR -->
            <div id="wrapper">
                <!-- BEGIN SIDEBAR MENU -->
                @include('sm_admin.include.sidebar')
                <!--END SIDEBAR MENU-->
                <!--BEGIN CHAT FORM-->
                 @include('sm_admin.include.chat')
                <!--END CHAT FORM-->
                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    <!--BEGIN TITLE & BREADCRUMB PAGE-->
                    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                        <div class="page-header pull-left">
                            <div class="page-title">Dashboard</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a href="">Home</a>&nbsp;&nbsp;<i
                                    class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i
                                    class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                            <li class="active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                    <!--END TITLE & BREADCRUMB PAGE-->
                    <!--BEGIN CONTENT-->
                    <!-- content -->
                    @yield('content')
                    <!-- content end -->
                    @include('sm_admin.include.homeContent')
                    <!--END CONTENT-->
                    <!--BEGIN FOOTER-->
                    @include('sm_admin.include.footer')
    </body>

</html>