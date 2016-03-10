<header class="main-header">
    <!-- Logo -->
    <a href="/admin" class="logo"><b>Admin</b>LTE</a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                {{--
                @include('ncells::admin.main-header.messages-menu')
                <!-- Notifications Menu -->
                @include('ncells::admin.main-header.notifications-menu')
                <!-- Tasks Menu -->
                @include('ncells::admin.main-header.tasks-menu')
                --}}
                <!-- User Account Menu -->
                @include('ncells::admin.main-header.user-menu')
            </ul>
        </div>
    </nav>
</header>
