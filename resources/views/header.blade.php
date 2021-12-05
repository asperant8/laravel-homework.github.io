@section("header")
    <div class="cover">
        <img src="/img/LaravelLogo.jpg"/>
    </div>
    <div class="navigation">
        <a class="{{ Request::is('_home') ? 'active' : '' }}"
            href="_home">Home</a>
        <a class="{{ Request::is('view2') ? 'active' : '' }}"
            href="view2">View2</a>
    </div>
@show