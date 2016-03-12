<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="{{ Auth::user()->name }}" />
    </div>
    <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->created_at->diffForHumans() }} 가입</p>
    </div>
</div>
