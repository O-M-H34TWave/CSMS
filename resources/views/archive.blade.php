@extends('layout.master')

@section('title')
    CSMS
@endsection

@section('main')
    <div class="container">
        <h3 class="text-center mb-4">الارشيف</h3>
        <div>
            <div class="row">
                <div class="col-md-4">
                    <form class="d-flex mb-4">
                        <input class="form-control me-2 w-100" type="search" placeholder="بحث..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">بحث</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 left-card" dir="ltr">
                <label for="range" class="form-label">الفئة العمرية للمولود</label>
                <input type="range" class="form-range" min="0" max="3" step="1" id="range">
                <output for="range" id="rangeValue" aria-hidden="true"></output>
                <div class="border-top pt-3 mt-3 mb-2" dir="rtl">
                    <label for="">سنة الولادة</label>
                    <select class="form-select" name="" id="" >
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
        <ul class="pagination justify-content-center text-end">
            <li class="page-item disabled"><a class="page-link" href="#">السابق</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">التالي</a></li>
        </ul>
    </div>

    <script>
        const range = document.getElementById('range');
        const output = document.getElementById('rangeValue');

        const categories = [
            "0–5",
            "6–11",
            "12–14",
            "15–17"
        ];

        function updateRange() {
            output.textContent = categories[range.value];
        }

        range.addEventListener('input', updateRange);

        updateRange();
    </script>

@endsection