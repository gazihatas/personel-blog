@extends('back.layouts.master')
@section('title','Ayarlar')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
            </h6>
        </div>
        <div class="card-body">
                <form method="post" action="{{route('admin.config.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site Başlığı</label>
                                <input type="text" name="title" required class="form-control" value="{{$config->title}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site Aktiflik Durumu</label>
                                <select name="active" class="form-control">
                                    <option @if($config->active==1) selected @endif value="1">Açık</option>
                                    <option @if($config->active==1) selected @endif value="0">Kapalı</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site Favicon</label>
                                <input type="file" name="favicon" class="form-control">
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="{{$config->facebook}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{$config->twitter}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Github</label>
                                <input type="text" name="github" class="form-control" value="{{$config->github}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>LinkedIn</label>
                                <input type="text" name="linkedin" class="form-control" value="{{$config->linkedin}}">
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text" name="youtube" class="form-control" value="{{$config->youtube}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="{{$config->instagram}}">
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-md btn-success">Güncelle</button>
                    </div>

                </form>
        </div>
    </div>
@endsection
