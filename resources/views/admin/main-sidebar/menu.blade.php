@inject('packages', 'NineCells\Admin\PackageList')

<ul class="sidebar-menu">
    @if(!$packages->getCurrentKey())
    <li class="header">Dashboard</li>
    @else
    <li class="header">{{ $packages->getCurrentName() }}</li>
    @endif
    <!-- Optionally, you can add icons to the links -->
    @if($packages->getCurrentKey())
    @foreach($packages->getCurrentMenu() as $menu)
    <li{!! ($menu['url'] == request()->route()->getUri() ? ' class="active"' : '') !!}><a href="{{ url($menu['url']) }}"><span>{{ $menu['title'] }}</span></a></li>
    @endforeach
    @else
    @foreach($packages->getPackageList() as $menu)
    <li><a href="{{ $menu->getUrl() }}"><span>{{ $menu->getName() }}</span></a></li>
    @endforeach
    @endif
</ul>
