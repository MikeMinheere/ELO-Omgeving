<div class="navigation">
    <div class="navigation-wrap">
        <a href="/" class="nav-logo"><img src="{{URL::asset('image/logo.png')}}" loading="lazy" width="100" alt="Logo"></a>
        <div class="nav-block">
            <img src="https://uploads-ssl.webflow.com/65167ec34df69a09d453a49c/6516845a12555e8b460f3beb_4079bb0b22dbf807781eb6ee08ff0f85.png" loading="lazy" width="100" height="100" alt="" class="image">
            <div class="nav-block-button">
                <a href="/profile" class="button-nav">Profiel</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button-nav">Log uit</a></div>
            </div>
        </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
