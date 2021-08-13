@extends('admin.master')
@section('title','SATIŞ EDİT')
@section('content')

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori Güncelle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{route('cartupdate')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$saleedit->id}}">
                                <div class="col-md-12 mb-12">
                                    <h6>Ürün Kategori</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" name="prcategoryid" id="basicSelect">
                                            @foreach($productname as $listcat)
                                                <option value="{{$listcat->id}}"
                                                        @if ($saleedit->product_id == $listcat->id) selected @endif>{{$listcat->title}}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Satın Alan İd</label>
                                                <div class="position-relative">
                                                    <input type="text" name="user_id" value="{{$saleedit->user_id}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Sipariş Numarası</label>
                                                <div class="position-relative">
                                                    <input type="text" name="orid" value="{{$saleedit->orid}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Ürün İd</label>
                                                <div class="position-relative">
                                                    <input type="text" name="product_id" value="{{$saleedit->product_id}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Satış Numarası</label>
                                                <div class="position-relative">
                                                    <input type="text" name="code" value="{{$saleedit->code}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Ürün Fiyatı</label>
                                                <div class="position-relative">
                                                    <input type="text" name="prc" value="{{$saleedit->prc}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-12">
                                            <h6>Ürün Fiyat Kur</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="cid" id="basicSelect">
                                                    <option value="{{$saleedit->cid}}"
                                                            @if (old('cid') == 1) selected @endif>
                                                        TL
                                                    </option>
                                                    <option value="{{$saleedit->cid}}"
                                                            @if (old('cid') == 2) selected @endif>
                                                        DOLAR
                                                    </option>
                                                    <option value="{{$saleedit->cid}}"
                                                            @if (old('cid') == 2) selected @endif>
                                                        EURO
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success me-1 mb-1">Güncelle</button>
                                        </div>
                                    </div>
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
