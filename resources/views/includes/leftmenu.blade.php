 <ul  class="nav metismenu" id="menu1">
        <li class="{{ Request::segment(1) === 'dashboard' || 'table' ? 'active' : null }}">
            <a class="has-arrow" href="{{ url('dashboard') }}">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>Dashboard</p>
            </a>
                  <ul aria-expanded="true">
               <li class="{{ Request::segment(1) === 'table' ? 'active' : null }}">
                 <a href="table">
                   <span class="fa fa-fw fa-code-fork"></span> Fork
                 </a>
               </li>
               <li>
                 <a href="https://github.com/onokumus/metisMenu">
                   <span class="fa fa-fw fa-star"></span> Star
                 </a>
               </li>
               <li>
                 <a href="https://github.com/onokumus/metisMenu/issues">
                   <span class="fa fa-fw fa-exclamation-triangle"></span> Issues
                 </a>
               </li>
             </ul>
       </li>
       <li class="{{ Request::segment(1) === 'user' ? 'active' : null }}">
        <a href="{{ url('user') }}">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <p>User Profile</p>
        </a>
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