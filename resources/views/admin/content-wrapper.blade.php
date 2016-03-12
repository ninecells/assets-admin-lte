@inject('packages', 'NineCells\Admin\PackageList')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @yield('page-title')
            <small>@yield('page-description')</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            @if ($packages->getCurrentKey())
            <li class="active">{{ $packages->getCurrentName() }}</li>
            @endif
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        @yield('content')
    </section>
</div>
