@extends('front.layout.index')
@section('title')
<title>BLOG CATEGORIES | THINK VIVACIOUS</title>
<meta name="description" content="">

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
          <h1 class="mb-4"> <a class="reset-anchor" href="#">BLOGS CATEGORIES</a></h1>
        </div>
      </div>
    </div>
  </section>
  <!-- Top categories-->
  <section class="pb-5">
    <div class="container pb-4">
      <div class="row mb-5 pb-4">
        @foreach ($categories as $key =>  $category)
        <div class="col-lg-4 mb-4 mb-lg-0">
          <a class="category-block bg-center bg-cover" style="background: url({{$category->image}})" href="{{route('category.show',str_replace(' ', '_',$category->name))}}">
            <span class="category-block-title">{{$category->name}}</span>
          </a>
        </div>
        {{ $categories->links() }}
        @endforeach
      </div>
    </div>
  </section>
@endsection