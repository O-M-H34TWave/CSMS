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
        <div class="row g-4 mt-4">

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">الولادات اليوم
                        </h5>
                        <img src="{{'images/images.png'}}" alt="">
                    </div>
                </div>
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
    </div>

@endsection