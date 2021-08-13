@extends('admin.master')
@section('title','SATIŞ İNDEX')
@section('content')
    <?php

    use App\Models\Sale;

    ?>

    @include('admin.layouts.alert')

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <!-- Table head options start -->
                        <section class="section">
                            <div class="row" id="table-head">
                                <div class="col-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Satılan Ürünler</h4>
                                        </div>
                                        <div class="card-content">
                                            <!-- table head dark -->
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Kullanıcı İd</th>
                                                        <th>Sipariş Numarası</th>
                                                        <th>Ürün İd</th>
                                                        <th>Satış Numarası</th>
                                                        <th>Satış Fiyatı</th>
                                                        <th>Satış Kuru</th>
                                                        <th>Satış Tarihi</th>
                                                        <th>Güncelleme Tarihi</th>
                                                        <th>Ayarlar</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($sale as $allsale)
                                                        <tr>
                                                            <td class="text-bold-500">{{$allsale->user_id}}</td>
                                                            <td>{{$allsale->orid}}</td>
                                                            <td class="text-bold-500">{{$allsale->product_id}}</td>
                                                            <td>{{$allsale->code}}</td>
                                                            <td>{{$allsale->prc}}</td>
                                                            <td>{{$allsale->cid}}</td>
                                                            <td>{{$allsale->sale_date}}</td>
                                                            <td>{{$allsale->guncelleme_tarihi}}</td>
                                                            <td>
                                                                <a href="edit/{{$allsale->id}}"
                                                                   class="btn btn-outline-primary">Güncelle</a>
                                                                <a href="delete/{{$allsale->id}}"
                                                                   class="btn btn-outline-danger">Sil</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Table head options end -->
                    </div>

                </div>
            </div>
        </section>
    </div>


@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.alert').slideUp(500)
            }, 3000);
        });
    </script>
@endsection
