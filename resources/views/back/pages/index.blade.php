@extends('back.layouts.master')
@section('title','Tüm Sayfalar')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right">{{$pages->count()}}makale bulundu.</span>
            </h6>
        </div>
        <div class="card-body">
            <div id="orderSuccess" style="display: none;" class="alert alert-success">
                Sıralama başarıyla güncellendi.
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sıralama</th>
                            <th>Fotoğraf</th>
                            <th>Makale Başlığı</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>

                    <tbody id="orders">
                        @foreach($pages as $page)
                            <tr id="page_{{$page->id}}">
                                <td class="text-center" style="width: 3% !important;"><i class="fa fa-arrows-alt-v fa-3x handle" style="cursor: move"></i></td>
                                <td>
                                    <img src="{{asset($page->image)}}" width="200" height="200" alt="">
                                </td>
                                <td>{{$page->title}}</td>
                                <td>
                                    <input class="switch" page-id="{{$page->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" @if($page->status==1) checked
                                           @endif data-toggle="toggle">
                                </td>
                                <td>
                                    <a href="{{route('page',$page->slug)}}" title="Görüntüle" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('admin.page.edit',$page->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                    <a href="{{route('admin.page.delete',$page->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    $('#orders').sortable({
        handle:'.handle',
        update:function (){
            let siralama = $('#orders').sortable('serialize');
            $.get("{{route('admin.page.orders')}}?"+siralama,function (data,status){
                $("#orderSuccess").show().delay(1000).fadeOut();
            });
        }
    });
</script>
<script>
    $(function() {
        $('.switch').change(function() {
            id = $(this)[0].getAttribute('page-id');
            statu=$(this).prop('checked');
            $.get("{{route('admin.page.switch')}}", {id:id,statu:statu},  function(data, status) {});
        })
    })
</script>
@endsection
