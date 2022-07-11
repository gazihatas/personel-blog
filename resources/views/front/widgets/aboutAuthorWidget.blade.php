<!-- ABOUT -->
<section class="about  d-lg-flex justify-content-center align-items-center" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                <div class="about-text">
                    <small class="small-text">Welcome to <span class="mobile-block">my portfolio and blog website!</span></small>
                    <h1 class="animated animated-text">
                        <span class="mr-2">Hey folks, I'm</span>
                        <div class="animated-info">
                            <span class="animated-item">{{$author->name}}</span>
                            <span class="animated-item">{{$author->pozisyon}}</span>
                        </div>
                    </h1>

                    <p>
                        {{$author->hakkimda}}
                        <br><br><br>
                        Tech Stack: {{$author->yetenek}}

                    </p>
                    <!--
                    <div class="custom-btn-group mt-4">
                        <a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                        <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                    </div>
                    -->
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12">
                <div class="about-image svg">
                    <img src="{{asset('frontNew/')}}/img/author.jpeg" class="img-fluid rounded-circle" alt="Gazi Hataş">
                </div>
            </div>

        </div>
    </div>
</section>
