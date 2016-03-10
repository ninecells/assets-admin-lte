<li class="dropdown user user-menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="{{ Auth::user()->avatar }}" class="user-image" alt="{{ Auth::user()->name }}"/>
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu">
        
        <!-- The user image in the menu -->
        <li class="user-header">
            <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="{{ Auth::user()->name }}" />
            <p>
                {{ Auth::user()->name }}
                <small>{{ Auth::user()->created_at->diffForHumans() }} 가입</small>
            </p>
        </li>

        <!-- Menu Body -->
        {{--
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>
        --}}

        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="/members/{{ Auth::user()->id }}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>

    </ul>
</li>
