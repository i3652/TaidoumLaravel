<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Taidoum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                @if ($_SERVER['PHP_SELF'] == '/index.php')
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="/users/index">Users</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        @if (auth()->check())
                            <a href="{{ url('/' . auth()->user()->email) }}" class="dropdown-item">Profil</a>
                            <a href="{{ url('/dashboard') }}" class="dropdown-item">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/signout') }}" class="dropdown-item">Sign Out</a>
                        @else
                            <a href="{{ url('/connexion') }}" class="dropdown-item">Sign In</a>
                            <a href="{{ url('/inscription') }}" class="dropdown-item">Regester</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="inline">

</div>
</div>
</nav>
