@extends('admin.master')
@section('title','KATEGORİ EKLEME')
@section('content')

    @include('admin.layouts.alert')

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori Ekle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('createfile') }}" method="POST">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Kategori Adı</label>
                                                <input type="text" id="first-name-vertical" value="{{old('cname')}}" class="form-control"
                                                       name="cname">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Açıklama</label>
                                                <input type="text" value="{{old('cdesc')}}" id="email-id-vertical" class="form-control"
                                                       name="cdesc">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">URL</label>
                                                <input type="text" value="{{old('curl')}}" id="email-id-vertical" class="form-control"
                                                       name="curl">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-12">
                                    <h6>Kategori Durum</h6>
                                    <fieldset class="form-group">
                                        <select class="form-select" name="cstatus" id="basicSelect">
                                            <option value="a" @if (old('cstatus') == 'a') selected @endif>Aktif</option>
                                            <option value="p" @if (old('cstatus') == 'p') selected @endif>Pasif</option>
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
