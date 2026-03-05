@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <h3 class="text-center mb-4">إحصائيات عامة</h3>

        <div class="dropdown text-end">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                <i class="bi bi-plus-circle"></i> اضافة
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">ولادة</a></li>
                <li><a class="dropdown-item" href="#">وفاة</a></li>
                <li><a class="dropdown-item" href="#">حكم ولادة</a></li>
                <li><a class="dropdown-item" href="#">حكم وفاة</a></li>
            </ul>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-md-3">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column bg-success bg-gradient rounded-3">
                        <h5 class="card-title text-light">الولادات اليوم
                        </h5>
                        <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                            <span><b>5</b></span>
                            <i class="bi bi-balloon"></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column bg-danger bg-gradient rounded-3">
                        <h5 class="card-title text-light">الوفيات اليوم</h5>
                        <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                            <span><b>5</b></span>
                            <i class="bi bi-person-dash"></i>

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column bg-primary bg-gradient rounded-3">
                        <h5 class="card-title text-light">أحكام الولادات اليوم</h5>
                        <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                            <span><b>5</b></span>
                            <i class="bi bi-file-text"></i>


                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column bg-warning bg-gradient rounded-3">
                        <h5 class="card-title text-light">أحكام الوفيات اليوم</h5>
                        <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                            <span><b>5</b></span>
                            <i class="bi bi-file-text"></i>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5 mb-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center mb-3">آخر الاضافات</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>نوع</th>
                                    <th>رقم التصريح</th>
                                    <th>رقم الرسم</th>
                                    <th>الاسم</th>
                                    <th></th>
                                </tr>
                                <tr class="table-danger">
                                    <td><b>وفاة</b></td>
                                    <th>70</th>
                                    <th>67</th>
                                    <td>احمد البجكوري</td>
                                    <td><button class="btn btn-success btn-sm" type="button">تعديل</button>
                                        <button class="btn btn-danger btn-sm" type="button">حذف</button>
                                    </td>
                                </tr>
                                <tr class="table-success">
                                    <td><b>ولادة</b></td>

                                    <th>70</th>
                                    <th>67</th>
                                    <td>احمد البجكوري</td>
                                    <td><button class="btn btn-success btn-sm" type="button">تعديل</button>
                                        <button class="btn btn-danger btn-sm" type="button">حذف</button>
                                    </td>
                                </tr>
                                <tr class="table-success">
                                    <td><b>ولادة</b></td>

                                    <th>70</th>
                                    <th>67</th>
                                    <td>احمد البجكوري</td>

                                    <td><button class="btn btn-success btn-sm" type="button">تعديل</button>
                                        <button class="btn btn-danger btn-sm" type="button">حذف</button>
                                    </td>
                                </tr>
                                <tr class="table-success">
                                    <td><b>ولادة</b></td>
                                    <th>70</th>
                                    <th>67</th>
                                    <td>احمد البجكوري</td>

                                    <td><button class="btn btn-success btn-sm" type="button">تعديل</button>
                                        <button class="btn btn-danger btn-sm" type="button">حذف</button>
                                    </td>
                                </tr>

                            </thead>

                            <td colspan="5" class="text-end"><a href="" class="link-dark"> <b>المزيد</b></a></td>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center mb-3">3 شهور</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>نوع</th>
                                    <th>النصف الاول</th>
                                    <th>النصف الثاني</th>
                                    <th>النصف الثالث</th>
                                    <th>النصف الرابع</th>
                                </tr>
                                <tr class="table-success">
                                    <td><b>ولادة</b></td>
                                    <td>105</td>
                                    <td>110</td>
                                    <td>95</td>
                                    <td>120</td>
                                </tr>
                                <tr class="table-danger">
                                    <td><b>وفاة</b></td>
                                    <td>35</td>
                                    <td>32</td>
                                    <td>25</td>
                                    <td>37</td>
                                </tr>
                                <tr class="table-primary">
                                    <td><b>حكم ولادة</b></td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>7</td>
                                </tr>
                                <tr class="table-warning">
                                    <td><b>حكم وفاة</b></td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td>6</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-3 mb-3 justify-content-center">
            @include('partials.births-chart')
            @include('partials.deaths-chart')
        </div>
    </div>



    <script>
        // Months of the year
        const months = ['Jan', 'Fev', 'Mar'];

        // Sample data for demonstration (replace with real data)
        const maleBirths = months.map(() => Math.floor(Math.random() * 100));
        const femaleBirths = months.map(() => Math.floor(Math.random() * 100));
        const maleDeaths = months.map(() => Math.floor(Math.random() * 30));
        const femaleDeaths = months.map(() => Math.floor(Math.random() * 30));

        // --- Births Chart ---
        const birthCtx = document.getElementById('birthChart').getContext('2d');
        new Chart(birthCtx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [
                    {
                        label: 'ذكور',
                        data: maleBirths,
                        backgroundColor: '#198754',
                        stack: 'births'
                    },
                    {
                        label: 'اناث',
                        data: femaleBirths,
                        backgroundColor: 'pink',
                        stack: 'births'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'الولادات الشهرية 2026' }
                },
                scales: {
                    x: { stacked: true },
                    y: { stacked: true, beginAtZero: true }
                }
            }
        });

        // --- Deaths Chart ---
        const deathCtx = document.getElementById('deathChart').getContext('2d');
        new Chart(deathCtx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [
                    {
                        label: 'ذكور',
                        data: maleDeaths,
                        backgroundColor: 'darkred',
                        stack: 'deaths'
                    },
                    {
                        label: 'اناث',
                        data: femaleDeaths,
                        backgroundColor: '#d63384',
                        stack: 'deaths'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'الوفيات الشهرية 2026' }
                },
                scales: {
                    x: { stacked: true },
                    y: { stacked: true, beginAtZero: true }
                }
            }
        });
    </script>
@endsection