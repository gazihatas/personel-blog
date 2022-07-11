@extends('back.layouts.master')
@section('title','Yazar')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
            </h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.author.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Yazar Adı</label>
                            <input type="text" name="name" required class="form-control" value="{{$author->name}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hakkımda</label>
                            <input type="text" name="hakkimda" required class="form-control" value="{{$author->hakkimda}}">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Yazar Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pozisyon</label>
                            <input type="text" name="pozisyon"  class="form-control" value="{{$author->pozisyon}}">
                        </div>
                    </div>


                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Yetenek</label>
                            <input type="text" name="yetenek" class="form-control" value="{{$author->yetenek}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Deneyim</label>
                            <input type="text" name="deneyim" class="form-control" value="{{$author->deneyim}}">
                        </div>
                    </div>


                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Eğitim</label>
                            <input type="text" name="egitim" class="form-control" value="{{$author->egitim}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sertifika</label>
                            <input type="text" name="sertifika" class="form-control" value="{{$author->sertifika}}">
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
