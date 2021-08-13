@extends('admin.master')
@section('title','ÜRÜN EKLEME')
@section('content')

    @include('admin.layouts.alert')

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ürün Ekle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('createproduct') }}" method="POST">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-12">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Stok Numarası</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('productunicode')}}" class="form-control"
                                                           name="productunicode">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kullanıcı İd</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('productuserid')}}" class="form-control"
                                                           name="productuserid">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Ürün Url</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('producturl')}}" class="form-control"
                                                           name="producturl">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Ürün Başlık</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('producttitle')}}" class="form-control"
                                                           name="producttitle">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Ürün Açıklama</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('productdesc')}}" class="form-control"
                                                           name="productdesc">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Ürün Sırası</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('productorder')}}" class="form-control"
                                                           name="productorder">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Ürün Fiyatı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{old('productprc')}}" class="form-control"
                                                           name="productprc">
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-12">
                                                <h6>Ürün Fiyat Kur</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="productcid" id="basicSelect">
                                                        <option value="1" @if (old('productcid') == 1) selected @endif>
                                                            TL
                                                        </option>
                                                        <option value="2" @if (old('productcid') == 2) selected @endif>
                                                            DOLAR
                                                        </option>
                                                        <option value="3" @if (old('productcid') == 2) selected @endif>
                                                            EURO
                                                        </option>
                                                    </select>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12 mb-12">
                                                <h6>Ürün Kategori</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="prcategoryid" id="basicSelect">
                                                        @foreach($categorieslist as $listcat)
                                                            <option value="{{$listcat->id}}" @if (old('prcategoryid') == $listcat->id) selected @endif>{{$listcat->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                            <!--
                                            BURASI USER İD İÇİN KULLANILICAK
                                            <fieldset class="form-group">
                                                <select class="form-select" name="cstatus" id="basicSelect">
                                                    @foreach($categorieslist as $listcat)
                                                <option>{{$listcat->title}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        -->
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-12">
                                            <h6>Ürün Durum</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="productstatus" id="basicSelect">
                                                    <option value="a" @if (old('productstatus') == 'a') selected @endif>
                                                        Aktif
                                                    </option>
                                                    <option value="p" @if (old('productstatus') == 'p') selected @endif>
                                                        Pasif
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">EKLE
                                            </button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->


@endsection
