<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">EndGame</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="{{ (request()->is('admin/tournament')) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{url('admin/tournament')}}">Tornament <span class="sr-only">(current)</span></a>
            </li>
            <li class="{{ (request()->is('admin/giveaway')) ? 'nav-item active' : 'nav-item ' }}" >
                <a class="nav-link"href="{{url('admin/giveaway')}}">GiveAway</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <a class="btn btn-outline-success my-2 my-sm-0 m-r-10"   href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</nav>
