@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <h3 class="text-center mb-4">لوحة التحكم</h3>

        <div class="row g-4">

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
        <div class="row g-4 mt-1 justify-content-md-center">
            <div class="col-md-3 totalCard">
                <a href="#" class="link-underline link-underline-opacity-0">
                    <div class="card h-100 rounded-3 totalCard">
                        <div class="card-body d-flex flex-column bg-info bg-gradient rounded-3">
                            <h5 class="card-title text-light">عدد الولادات في الارشيف
                            </h5>
                            <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                                <span><b>5820</b></span>
                                <i class="bi bi-file-earmark-zip"></i>
                            </p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 ">
                <a href="#" class="link-underline link-underline-opacity-0 totalCard">
                    <div class="card h-100 rounded-3 ">
                        <div class="card-body d-flex flex-column bg-dark bg-gradient rounded-3">
                            <h5 class="card-title text-light">عدد الوفيات في الارشيف
                            </h5>
                            <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                                <span><b>1089</b></span>
                                <i class="bi bi-file-earmark-zip"></i>
                            </p>
                        </div>
                    </div>
                </a>

            </div>
        </div>

        <div class="row mt-3 mb-3 justify-content-center">
            @include('partials.births-chart')
            @include('partials.deaths-chart')
        </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">الوفيات اليوم</h5>
                    <p class="mt-auto fs-4 text-end">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Consequatur, magni. Mollitia nobis dolorem explicabo commodi labore iste cupiditate nemo,
                        exercitationem facere consequuntur nam? Aspernatur saepe voluptatum iure velit error voluptas!
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="row g-4 mt-4">

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Naissances Aujourd'hui</h5>
                    <p class="mt-auto fs-4 text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                        sed fuga molestiae a corrupti tempore nam, odio, quidem et, placeat porro praesentium. Et illum
                        enim recusandae, quam quisquam deleniti ratione.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Morts Aujourd'hui</h5>
                    <p class="mt-auto fs-4 text-end">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Consequatur, magni. Mollitia nobis dolorem explicabo commodi labore iste cupiditate nemo,
                        exercitationem facere consequuntur nam? Aspernatur saepe voluptatum iure velit error voluptas!
                    </p>
                </div>
            </div>
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