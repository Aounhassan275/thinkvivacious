@extends('front.layout.index')
@section('title')
<title>ABOUT US | THINK VIVACIOUS</title>
<meta name="description" content="">

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('body')
<section class="bg-white pb-5">
    <div class="container-fluid px-0 pnb-4">
        <div class="row align-items-center">
        <div class="col-lg-12">
                <div class="post-thumnail"><img class="img-fluid w-100" src="{{asset('main.jpeg')}}" style="height:450px!important;" alt=""></div>
        </div>
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="mb-4"> <a class="reset-anchor" href="#">About Us</a></h1>
            @foreach (App\Models\Information::all()->take(1) as $information)     
            <p class="text-muted">{{$information->about}}</p>
            @endforeach
        </div>
        </div>
    </div>
</section>
@endsection