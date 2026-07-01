@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')

    <div class="container">
        <h3 class="text-center mb-4">إحصائيات الولادات</h3>
        @include('partials.add-birth')
        <div class="row g-4 mt-4">

            <div class="col-md-6">
                <div class="card h-100 rounded-3">
                    <a href="" class="text-decoration-none">
                        <div class="card-body d-flex flex-column bg-gradient rounded-3" id="births-today">
                            <h5 class="card-title text-light">الولادات اليوم
                            </h5>
                            <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                                <span><b>5</b></span>
                                <i class="bi bi-balloon"></i>
                            </p>
                        </div>
                    </a>

                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column bg-gradient rounded-3" id="birth-dec">
                        <h5 class="card-title text-light">أحكام الولادات اليوم</h5>
                        <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                            <span><b>5</b></span>
                            <i class="bi bi-file-text"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column  bg-gradient rounded-3" id="births-month">
                        <h5 class="card-title text-light">ولادات هذا الشهر
                        </h5>
                        <p class="mt-auto fs-4 d-flex justify-content-between align-items-center text-light">
                            <span><b>25</b></span>
                            <i class="bi bi-balloon"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 rounded-3">
                    <div class="card-body d-flex flex-column bg-gradient rounded-3" id="dec-birth-month">
                        <h5 class="card-title text-light">احكام ولادات هذا الشهر</h5>
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
                                
                                <tr class="table-primary">
                                    <td><b>حكم ولادة</b></td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>7</td>
                                </tr>
                                
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection