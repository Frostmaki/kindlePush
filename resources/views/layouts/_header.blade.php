<nav id="nav-header">
    <div id="logo">
        <a  href="/">kindlePush</a>
    </div>
    <div id="nav-header-right">
        <ul id="nav-header-right-menu">
            @if(\Illuminate\Support\Facades\Auth::check())
                <li>
                    <a href="#">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                </li>
                @else
            <li>
                <a id="nav-login" href="#">登陆</a>
            </li>
            <li>
                <a id="nav-register" href="#">注册</a>
            </li>
                @endif
        </ul>
    </div>
</nav>