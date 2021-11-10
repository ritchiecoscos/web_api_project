<li class="nav-item">
    <a href="{{ route('travel.index') }}"
       class="nav-link {{ Request::is('travel*') ? 'active' : '' }}">
        <p>Travel</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


