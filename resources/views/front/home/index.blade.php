@extends('front.layout.index')
@section('title')
<title>HOME | THINK VIVACIOUS</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">
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
            @foreach(App\Models\Category::all()->take(6) as $category)
            <div class="col-lg-4 mb-4 mb-lg-0">
            <a class="category-block bg-center bg-cover" style="background: url({{$category->image}})" href="{{route('category.show',str_replace(' ', '_',$category->name))}}">
                <span class="category-block-title">{{$category->name}}</span>
            </a>
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <!-- Home listing-->
    <section class="pb-5">
        <div class="container pb-4">
        <div class="col-lg-6 mx-auto text-center">
            <h1 class="mb-4"> <a class="reset-anchor" href="#">BLOGS</a></h1>
        </div>
        <div class="row">
            <div class="col-lg-9 mb-5 mb-lg-0">
            @foreach(App\Models\Blog::all()->take(6) as $blog)
            <div class="row align-items-center mb-5">
                <div class="col-lg-6"><a class="d-block mb-4" href="{{route('blog.show',str_replace(' ', '_',$blog->name))}}">
                <img class="img-fluid w-100" src="{{asset($blog->image)}}" alt=""/></a>
                </div>
                <div class="col-lg-6">
                <ul class="list-inline">
                    <li class="list-inline-item mr-2"><a class="category-link font-weight-normal" href="#">{{$blog->category->name}}</a></li>
                    <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal" href="#">Admin</a></li>
                    <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal" href="#">Views({{$blog->views}})</a></li>
                    <li class="list-inline-item mx-2"><a class="text-uppercase meta-link font-weight-normal" href="#">{{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</a></li>
                </ul>
                <h2 class="h3 mb-4"> <a class="d-block reset-anchor" href="{{route('blog.show',str_replace(' ', '_',$blog->name))}}">{{$blog->title}}</a></h2>
                <p class="text-muted">{!! substr( $blog->description, 0, 230) !!}....</p>
                <a class="btn btn-link p-0 read-more-btn" href="{{route('blog.show',str_replace(' ', '_',$blog->name))}}"><span>Read more</span><i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            @endforeach
            </div>
            <!-- Blog sidebar-->
            <div class="col-lg-3">
            <!-- About category-->
            <div class="card rounded-0 border-0 bg-light mb-4 py-lg-4">
                <div class="card-body text-center">
                    @foreach (App\Models\Information::all()->take(1) as $information)     
                <h2 class="h3 mb-3">About me</h2>
                <p class="text-small text-muted">{{$information->about}}</p>
                <ul class="list-inline small mb-0 text-dark">
                    <li class="list-inline-item"><a class="reset-anchor" href="{{$information->fb}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a class="reset-anchor" href="{{$information->twitter}}"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="reset-anchor" href="{{$information->insta}}"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a class="reset-anchor" href="{{$information->pt}}"><i class="fab fa-linkedin"></i></a></li>
                   </ul>
                @endforeach
                </div>
            </div>
            <!-- Recent posts-->
            <div class="card rounded-0 border-0 mb-4">
                <div class="card-body p-0">
                <h2 class="h5 mb-3">Recent posts</h2>
                @foreach(App\Models\Blog::all()->take(4) as $blog)
                <div class="media mb-3"><a class="d-block" href="{{route('blog.show',str_replace(' ', '_',$blog->name))}}"><img class="img-fluid" src="{{asset($blog->image)}}" alt="" width="70"></a>
                    <div class="media-body ml-3">
                    <h6> <a class="reset-anchor" href="{{route('blog.show',str_replace(' ', '_',$blog->name))}}">{{$blog->title}}</a></h6>
                    <p class="text-small text-muted line-height-sm mb-0">{!! substr( $blog->description, 0, 110) !!}...</p>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
            <!-- Categories-->
            <div class="card rounded-0 border-0 mb-4">
                <div class="card-body p-0">
                <h2 class="h5 mb-3">Trending categories</h2>
                @foreach(App\Models\Category::all()->take(6) as $category)
                <a class="category-block category-block-sm bg-center bg-cover mb-2" style="background: url({{$category->image}})" 
                    href="{{route('category.show',str_replace(' ', '_',$category->name))}}">
                    <span class="category-block-title">{{$category->name}}</span>
                </a>
                @endforeach
                </div>
            </div>
            <!-- Tags-->
            <div class="card rounded-0 border-0 mb-4">
                <div class="card-body p-0">
                <h2 class="h5 mb-3">Tags cloud</h2>
                <ul class="list-inline">
                    @foreach(App\Models\Tag::all()->take(9) as $tag)
                    <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">{{$tag->tag}}</a></li>
                    @endforeach
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection