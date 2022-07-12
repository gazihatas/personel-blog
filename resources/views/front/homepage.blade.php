
@extends('front.layouts.master')
@section('title','Ana Sayfa')
@section('content')
<div class="col-md-9 col-lg-8 col-xl-7">
    @include('front.widgets.articleList')
</div>
@include('front.widgets.categoryWidget')
@endsection
