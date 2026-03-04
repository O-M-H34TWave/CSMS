@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <h3 class="text-center mb-4">إحصائيات</h3>

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
        <div class="mt-5 mb-5">


            <div style="display: flex; gap: 50px; justify-content: center; flex-wrap: wrap;">
                <div class="chart-container" style="width: 500px;">
                    <canvas id="birthChart"></canvas>
                </div>
                <div class="chart-container" style="width: 500px;">
                    <canvas id="deathChart"></canvas>
                </div>
            </div>
        </div>
    </div>



    <script>
        // Months of the year
        const months = ['Jan', 'Fev', 'Mar'];

        // Sample data for demonstration (replace with real data)
        const maleBirths = months.map(() => Math.floor(Math.random() * 300));
        const femaleBirths = months.map(() => Math.floor(Math.random() * 300));
        const maleDeaths = months.map(() => Math.floor(Math.random() * 100));
        const femaleDeaths = months.map(() => Math.floor(Math.random() * 100));

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
                        backgroundColor: 'blue',
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
                        backgroundColor: 'lightcoral',
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