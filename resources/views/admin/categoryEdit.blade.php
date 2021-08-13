@extends('admin.master')
@section('title','KATEGORİ EDİT')
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
                            <form class="form form-vertical" action="{{route('update')}}" method="post">
                            @csrf
                                <input type="hidden" name="id" value="{{$categoryedit->id}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="first-name-icon">Kategori Başlığı</label>
                                                <div class="position-relative">
                                                    <input type="text" name="title" value="{{$categoryedit->title}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="position-relative">
                                                    <section class="section">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1"
                                                                                   class="form-label">Kategori
                                                                                Açıklama</label>
                                                                            <textarea class="form-control"
                                                                                      name="description"
                                                                                      id="exampleFormControlTextarea1"
                                                                                      rows="2">{{$categoryedit->description}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-left">
                                                <label for="email-id-icon">Kategori URL</label>
                                                <div class="position-relative">
                                                    <input type="text" name="slug" value="{{$categoryedit->slug}}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-12">
                                            <h6>Kategori Durum</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="status" id="basicSelect">
                                                    <option value="a"
                                                            @if($categoryedit->status === 'a') selected @endif>Aktif
                                                    </option>
                                                    <option value="p"
                                                            @if($categoryedit->status === 'p') selected @endif>Pasif
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
