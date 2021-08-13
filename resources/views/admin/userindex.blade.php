@extends('admin.master')
@section('title','Kullanıcılar İNDEX')
@section('content')

    <?php

    use App\Models\Product;
    use App\Models\Category;

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
                                            <h4 class="card-title">Kullanıcılar</h4>
                                            <a href="{{route('userform')}}" class="btn btn-outline-success">Kullanıcı Ekle</a>
                                        </div>
                                        <div class="card-content">
                                            <!-- table head dark -->
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Durum</th>
                                                        <th>Kullanıcı Adı</th>
                                                        <th>Şifre</th>
                                                        <th>Mail</th>
                                                        <th>Telefon Numarası</th>
                                                        <th>Adı</th>
                                                        <th>Soyadı</th>
                                                        <th>olusturma_tarihi</th>
                                                        <th>guncelleme_tarihi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($user as $allusers)
                                                        <tr>
                                                            <td>{!! Product::statusCode($allusers->status) !!}</td>
                                                            <td class="text-bold-500">{{$allusers->uname}}</td>
                                                            <td>{{$allusers->pass}}</td>
                                                            <td class="text-bold-500">{{$allusers->mail}}</td>
                                                            <td>{{$allusers->mpno}}</td>
                                                            <td>{{$allusers->fname}}</td>
                                                            <td>{{$allusers->lname}}</td>
                                                            <td>{{$allusers->olusturma_tarihi}}</td>
                                                            <td>{{$allusers->guncelleme_tarihi}}</td>
                                                            <td>
                                                                <a href="edit/{{$allusers->id}}"
                                                                   class="btn btn-outline-primary">Güncelle</a>
                                                                <a href="delete/{{$allusers->id}}"
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
