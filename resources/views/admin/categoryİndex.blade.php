@extends('admin.master')
@section('title','KATEGORİ İNDEX')
@section('content')
    <?php

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
                                            <h4 class="card-title">Kategoriler</h4>
                                            <a href="{{route('createform')}}" class="btn btn-outline-success">Ekle</a>
                                        </div>
                                        <div class="card-content">
                                            <!-- table head dark -->
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Durum</th>
                                                        <th>Kategori Başlığı</th>
                                                        <th>Kategori Açıklaması</th>
                                                        <th>Url Adresi</th>
                                                        <th>Oluşturma Tarihi</th>
                                                        <th>Güncelleme Tarihi</th>
                                                        <th>Ayarlar</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($category as $allcategory)
                                                        <tr>
                                                            <td>{!! Category::statusCode($allcategory->status) !!}</td>
                                                            <td class="text-bold-500">{{$allcategory->title}}</td>
                                                            <td>{{$allcategory->description}}</td>
                                                            <td class="text-bold-500">{{$allcategory->slug}}</td>
                                                            <td>{{$allcategory->olusturma_tarihi}}</td>
                                                            <td>{{$allcategory->guncelleme_tarihi}}</td>
                                                            <td>
                                                                <a href="edit/{{$allcategory->id}}"
                                                                   class="btn btn-outline-primary">Güncelle</a>
                                                                <a href="delete/{{$allcategory->id}}"
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
