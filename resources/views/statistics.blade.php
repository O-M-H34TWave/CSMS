@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <h3 class="text-center mb-4">إحصائيات</h3>

        <div class="text-end">

            <button class="btn btn-success "><i class="bi bi-plus-square"></i> Ajouter</button>
        </div>
        <div class="row g-4 mt-3">

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
                        <img src="{{'images/images.png'}}" alt="">

                    </div>
                </div>
            </div>



        </div>
        <div class="row g-4 mt-4">

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Naissances Aujourd'hui</h5>
                        <img src="{{'images/images.png'}}" alt="">

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Morts Aujourd'hui</h5>
                        <img src="{{'images/images.png'}}" alt="">

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection