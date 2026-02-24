<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 sticky-top vh-100 bg-dark ">
            <nav class="navbar h-100 d-flex flex-column p-3">
                <a class="navbar-brand mb-2 text-light" href="{{route('dashboard')}}">CSMS</a>

                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 "></i>لوحة التحكم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('archive') }}"><i class="bi bi-file-earmark-zip"></i>أرشيف</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('statistics') }}"><i class="bi bi-bar-chart"></i>إحصائيات</a>
                    </li>
                </ul>

                <ul class="navbar-nav w-100 mt-auto border-top">
                    <li class="nav-item">
                        <a class="nav-link mt-2" href="#"><i class="bi bi-gear"></i>إعدادات</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="col-sm-10 p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4">
                <div class="container-fluid">
                    <div class="align-items-center ms-auto">
                        <button type="button" class="btn btn-light mx-2">
                            <i class="bi bi-bell"></i>
                        </button>
                        <img src="{{asset('images/profile.jpeg')}}" alt="Profile" class="rounded-circle" width="40"
                            height="40">
                    </div>
                </div>
            </nav>
            <div class="p-4">
                @yield('main')
            </div>
        </div>

    </div>
</div>