<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 vh-100 bg-light">
            <nav class="navbar h-100 d-flex flex-column p-3">

                <ul class="navbar-nav w-100">
                    <a class="navbar-brand mb-2" href="#">CSMS</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('archive') }}">Archive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route(name: 'statistics') }}">Statistiques</a>
                    </li>
                </ul>

                <ul class="navbar-nav w-100 mt-auto border-top">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="col-sm-10">
            @yield('main')
        </div>

    </div>
</div>