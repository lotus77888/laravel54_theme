<ul class="nav metismenu" id="menu1">
    <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }}">
        <a href="{{ url('dashboard') }}">
            <i class="fa fa-home" aria-hidden="true"></i>
            <p>Dashboard</p>
        </a>

    </li>
    <li class="{{ Request::segment(1) === 'user' ? 'active' : null }}">
        <a href="{{ url('user') }}">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <p>User Profile</p>
        </a>
    </li>

    <li class="{{ Request::is('laravel_examples') ||  Request::is('dropzone') ||Request::is('dropify') ? 'active' : null }}">
        <a class="has-arrow" href="{{ url('laravel_examples') }}">
            <i class="fa fa-file-o" aria-hidden="true"></i>
            <p>Laravel Examples</p>
        </a>
        <ul aria-expanded="true" class="list_sty">
            <li class="{{ Request::is('dropzone') ? 'active' : null }}">
                <a href="{{ url('dropzone') }}">
                    <span class="fa fa-angle-right" aria-hidden="true"></span> DropZone

                </a>
            </li>
            <li class="{{ Request::is('dropify') ? 'active' : null }}">
                <a href="{{ url('dropify') }}">
                    <span class="fa fa-angle-right" aria-hidden="true"></span> Dropify

                </a>
            </li>
        </ul>
    </li>
    <li class="{{ Request::segment(1) === 'table' ? 'active' : null }}">
        <a href="{{ url('table') }}">
            <i class="fa fa-table" aria-hidden="true"></i>
            <p>Table List</p>
        </a>
    </li>
    <li class="{{ Request::segment(1) === 'typography' ? 'active' : null }}">
        <a href="{{ url('typography') }}">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            <p>Typography</p>
        </a>
    </li>
    <li class="{{ Request::segment(1) === 'icons' ? 'active' : null }}">
        <a href="{{ url('icons') }}">
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
            <p>Icons</p>
        </a>
    </li>
    <li class="{{ Request::segment(1) === 'maps' ? 'active' : null }}">
        <a href="{{ url('maps') }}">
            <i class="fa fa-map-signs" aria-hidden="true"></i>
            <p>Maps</p>
        </a>
    </li>
    <li class="{{ Request::segment(1) === 'notifications' ? 'active' : null }}">
        <a href="{{ url('notifications') }}">
            <i class="fa fa-podcast" aria-hidden="true"></i>
            <p>Notifications</p>
        </a>
    </li>
    <li class="{{ Request::segment(1) === 'upgrade' ? 'active' : null }}">
        <a href="{{ url('upgrade') }}">
            <i class="fa fa-share-square-o" aria-hidden="true"></i>
            <p>Upgrade to PRO</p>
        </a>
    </li>
    <li class="{{ Request::segment(1) === 'login' ? 'active' : null }}">
        <a href="{{ url('auth/login') }}">
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            <p>Login</p>
        </a>
    </li>

</ul>