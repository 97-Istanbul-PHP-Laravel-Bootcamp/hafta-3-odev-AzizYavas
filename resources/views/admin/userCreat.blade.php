@extends('admin.master')
@section('title','KULLANICI EKLEME')
@section('content')

    @include('admin.layouts.alert')

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kullanıcı Ekle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('createuser') }}" method="POST">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-12">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kullancı Adı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           class="form-control"
                                                           name="uname">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Şifre</label>
                                                    <input type="text" id="first-name-vertical"
                                                           class="form-control"
                                                           name="pass">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Mail</label>
                                                    <input type="email" id="first-name-vertical"
                                                           class="form-control"
                                                           name="mail">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Telefon Numarası</label>
                                                    <input type="text" id="first-name-vertical"
                                                           class="form-control"
                                                           name="mpno">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kullanıcı Adı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           class="form-control"
                                                           name="fname">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kullanıcı Soyadı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           class="form-control"
                                                           name="lname">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12 mb-12">
                                            <h6>Ürün Durum</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="status" id="basicSelect">
                                                    <option value="a">
                                                        Aktif
                                                    </option>
                                                    <option value="p">
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
