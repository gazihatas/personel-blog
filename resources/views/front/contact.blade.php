@extends('front.layouts.master')
@section('title','İletişim Sayfası')
@section('bg','https://c0.wallpaperflare.com/preview/1013/721/141/contact-details-smartphone-business-contact-us.jpg')
@section('content')
    <div class="col-md-8 col-lg-8 col-xl-7">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p>Benimle iletişime geçebilirsiniz</p>
        <div class="my-5">

            <form  method="post" action="{{route('contact.post')}}">
                @csrf
                <div class="form-floating">
                    <input class="form-control" id="name" type="text" value="{{old('name')}}" name="name" placeholder="Ad Soyadınız" d />
                    <label for="name">Ad Soyad</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="email" type="email" value="{{old('email')}}" name="email" placeholder="Email Adresiniz"  />
                    <label for="email">Email Adresi</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                </div>
                <div class="form-floating">
                    <select name="topic" class="form-select">
                        <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
                        <option @if(old('topic')=="Destek") selected @endif>Destek</option>
                        <option @if(old('topic')=="Genel")  selected @endif>Genel</option>
                    </select>
                    <label for="phone">Konu</label>
                    <div class="invalid-feedback" >A phone number is required.</div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="message" name="message" placeholder="Mesajınız..." style="height: 12rem">
                        {{ old(('message')) }}
                    </textarea>
                    <label for="message">Mesajınız</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <br />
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Gönder</button>
            </form>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-body">Panel Content</div>
            Adres: XXX XXX XXX XXX TÜRKİYE
        </div>
    </div>
@endsection

