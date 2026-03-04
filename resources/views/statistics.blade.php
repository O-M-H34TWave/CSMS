@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <h3 class="text-center mb-4">إحصائيات</h3>

        <div class="dropdown text-end">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
             <i class="bi bi-plus-circle"></i>   اضافة
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
@endsection