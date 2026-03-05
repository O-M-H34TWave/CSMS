<div class="container-fluid">
    <div class="row">
        <div class=" col-md-2 sticky-md-top vh-md-100 bg-dark">
            <nav class="navbar h-100 d-flex flex-column p-3">
                <a class="navbar-brand mb-2 text-light" href="{{route('dashboard')}}">CSMS</a>
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 "></i>لوحة
                            التحكم</a>
                    </li>
                    <li class="nav-item d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Main clickable link -->
                            <a class="nav-link flex-grow-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#archiveSubmenu" aria-expanded="false" aria-controls="archiveSubmenu">
                                <i class="bi bi-bar-chart"></i> ارشيف 
                            </a>
                            <!-- Chevron button to toggle submenu -->

                        </div>

                        <!-- Collapsible submenu -->
                        <div class="collapse" id="archiveSubmenu">
                            <ul class="nav flex-column ms-3">
                                <li class="nav-item">
                                    <small><a class="nav-link" href="{{ route('archive') }}">الكل</a></small>
                                </li>
                                <li class="nav-item">
                                    <small><a class="nav-link" href="">ارشيف الولادات</a></small>
                                </li>
                                <li class="nav-item">
                                    <small><a class="nav-link" href="">ارشيف الوفيات</a></small>
                                </li>
                               
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Main clickable link -->
                            <a class="nav-link flex-grow-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#statsSubmenu" aria-expanded="false" aria-controls="statsSubmenu">
                                <i class="bi bi-bar-chart"></i> إحصائيات
                            </a>
                            <!-- Chevron button to toggle submenu -->

                        </div>

                        <!-- Collapsible submenu -->
                        <div class="collapse" id="statsSubmenu">
                            <ul class="nav flex-column ms-3">
                                <li class="nav-item">
                                    <small><a class="nav-link" href="{{ route('statistics') }}">إحصائيات عامة</a></small>
                                </li>
                                <li class="nav-item">
                                    <small><a class="nav-link" href="{{ route('statistics') }}">ولادات</a></small>
                                </li>
                                <li class="nav-item">
                                    <small><a class="nav-link" href="{{ route('statistics') }}">وفيات</a></small>
                                </li>
                                <li class="nav-item">
                                    <small><a class="nav-link" href="{{ route('statistics') }}">ولادات</a></small>
                                </li>
                            </ul>
                        </div>
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