@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-9 mt-2">
                <table class="table table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="width: 10%">رقم التصريح</th>
                            <th style="width: 10%">رقم الرسم</th>
                            <th style="width: 20%">الاسم</th>
                            <th style="width: 15%">تاريخ التصريح</th>
                            <th></th>
                        </tr>
                        <tr class="table-success">
                            <th>30</th>
                            <th>23</th>
                            <td>احمد البجكوري</td>
                            <td>05/03/2026</td>
                            <td>
                                <button class="btn btn-info btn-sm" type="button">عرض </button>

                                <button class="btn btn-success btn-sm" type="button">تعديل</button>
                                <button class="btn btn-danger btn-sm" type="button">حذف</button>
                            </td>
                        </tr>
                        <tr class="table-success">

                            <th>69</th>
                            <th>67</th>
                            <td>حميد البوزياني</td>
                            <td>02/03/2026</td>
                            <td>
                                <button class="btn btn-info btn-sm" type="button">عرض </button>

                                <button class="btn btn-success btn-sm" type="button">تعديل</button>
                                <button class="btn btn-danger btn-sm" type="button">حذف</button>
                            </td>
                        </tr>
                        <tr class="table-success">

                            <th>68</th>
                            <th>66</th>
                            <td>احمد البجكوري</td>
                            <td>26/02/2026</td>
                            <td>
                                <button class="btn btn-info btn-sm" type="button">عرض </button>

                                <button class="btn btn-success btn-sm" type="button">تعديل</button>
                                <button class="btn btn-danger btn-sm" type="button">حذف</button>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <th>70</th>
                            <th>67</th>
                            <td>احمد البجكوري</td>
                            <td>10/02/2026</td>
                            <td>
                                <button class="btn btn-info btn-sm" type="button">عرض </button>

                                <button class="btn btn-success btn-sm" type="button">تعديل</button>
                                <button class="btn btn-danger btn-sm" type="button">حذف</button>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <th>70</th>
                            <th>67</th>
                            <td>احمد البجكوري</td>
                            <td>09/02/2026</td>
                            <td>
                                <button class="btn btn-info btn-sm" type="button">عرض </button>

                                <button class="btn btn-success btn-sm" type="button">تعديل</button>
                                <button class="btn btn-danger btn-sm" type="button">حذف</button>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <th>70</th>
                            <th>67</th>
                            <td>احمد البجكوري</td>
                            <td>05/02/2026</td>
                            <td>
                                <button class="btn btn-info btn-sm" type="button">عرض </button>

                                <button class="btn btn-success btn-sm" type="button">تعديل</button>
                                <button class="btn btn-danger btn-sm" type="button">حذف</button>
                            </td>
                        </tr>
                    </thead>

                </table>
            </div>
            <div class="col-md-3 left-card" dir="ltr">
                <label for="range" class="form-label">الفئة العمرية للمولود</label>
                <input type="range" class="form-range" min="0" max="3" step="1" id="range">
                <output for="range" id="rangeValue" aria-hidden="true"></output>
                <div class="border-top pt-3 mt-3 mb-2" dir="rtl">
                    <label for="">سنة الولادة</label>
                    <select class="form-select" name="" id="">
                        <option value="" disabled selected>اختر السنة</option>
                        <option value="1">2009</option>
                        <option value="2">2010</option>
                        <option value="3">2011</option>
                        <option value="4">2012</option>
                        <option value="5">2013</option>
                        <option value="6">2014</option>
                        <option value="7">2015</option>
                        <option value="8">2016</option>
                    </select>
                </div>
                <div class="form-check border-top pt-3 mt-3 mb-2" dir="rtl">
                    <input class="form-check-input" type="checkbox" id="Masculin">
                    <label class="form-check-label" for="Masculin">
                        <b>ذكر</b>
                    </label>
                </div>
                <div class="form-check" dir="rtl">
                    <input class="form-check-input" type="checkbox" id="Feminin">
                    <label class="form-check-label" for="Feminin">
                        <b>أنثى</b>
                    </label>
                </div>
                <div class="form-check border-top pt-3 mt-3 mb-2" dir="rtl">
                    <input class="form-check-input" type="checkbox" id="naissances">
                    <label class="form-check-label" for="naissances">
                        <b>ولادات</b>
                    </label>
                </div>
                <div class="form-check" dir="rtl">
                    <input class="form-check-input" type="checkbox" id="deci_naissances">
                    <label class="form-check-label" for="deci_naissances">
                        <b>احكام ولادات</b>
                    </label>
                </div>
            </div>

        </div>
       
    </div>




@endsection