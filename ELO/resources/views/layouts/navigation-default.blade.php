<div class="navigation">
    <div class="navigation-wrap">
        <a href="/login" class="nav-logo"><img src="{{URL::asset('image/logo.png')}}" loading="lazy" width="100" alt="Logo"></a>
        <div class="nav-block">
            <img src="{{URL::asset( Auth::user()->image )}}" loading="lazy" width="100" alt="profiel foto">
            <div class="nav-block-button">
                <a href="/profile" class="button-nav">Profiel</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button-nav">Log uit</a></div>
            </div>
        </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
