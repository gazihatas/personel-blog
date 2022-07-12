<aside class="single_sidebar_widget author_widget">
    <img class="author_img img-fluid rounded-circle" src="{{asset('frontNew/')}}/img/author.jpeg" height="150px" alt="Gazi Hataş">
    <h4>{{$author->name}}</h4>
    <p>{{$author->pozisyon}}</p>
    <p>{{$author->hakkimda}}<br><br>
        {{$author->yetenek}}
    </p>
    <div class="social_icon">
        @php $socials=['facebook','twitter','github','linkedin','youtube','instagram']; @endphp
        @foreach($socials as $social)
            @if($config->$social!=null)
                <a href="{{$config->$social}}" target="_blank"><i class="fa fa-{{$social}}"></i></a>
            @endif
        @endforeach
    </div>
    <div class="br"></div>
</aside>
