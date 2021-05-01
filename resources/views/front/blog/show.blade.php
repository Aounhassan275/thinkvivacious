@extends('front.layout.index')
@section('title')
<title>{{$blog->title}} | {{$blog->category->name}} | THINK VIVACIOUS</title>
<meta name="description" content="{!! substr( $blog->description, 0, 230) !!}" />
<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="{{$blog->title}} | {{$blog->category->name}} | THINK VIVACIOUS" />
	<meta property="og:description" content="{!! substr( $blog->description, 0, 230) !!}" />
	<meta property="og:url" content="{{Request::url()}}" />
	<meta property="og:site_name" content="THINKVIVACIOUS.COM" />
	<meta property="article:publisher" content="https://facebook.com/THINKVIVACIOUS" />
	<meta property="og:image" content="{{asset($blog->image)}}" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="{{$blog->title}} | {{$blog->category->name}} | THINK VIVACIOUS" />
	<meta name="twitter:description" content="{!! substr( $blog->description, 0, 230) !!}" />
	<meta name="twitter:image" content="{{asset($blog->image)}}" />
@endsection
@section('body')
<section class="py-5">
    <div class="container py-4">
      <div class="row text-center">
        <div class="col-lg-8 mx-auto"><a class="category-link mb-3 d-inline-block" href="#">{{$blog->category->name}}</a>
          <h1>{{$blog->title}}</h1>
          <ul class="list-inline mb-5">
            <li class="list-inline-item mx-2"><a class="text-uppercase text-muted reset-anchor" href="#">BY Admin</a></li>
            <li class="list-inline-item mx-2"><a class="text-uppercase text-muted reset-anchor" href="#">{{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</a></li>
          </ul>
        </div>
      </div><img class="w-100 mb-5" src="{{asset($blog->image)}}" alt="...">
      <div class="row">
        <div class="col-lg-9">
            <p class="lead drop-caps mb-5" style="
  width: 100%;
  height: auto;">
                {!! $blog->description !!}
                </p>
     <!-- Post tags-->
          <div class="d-flex align-items-center flex-column flex-sm-row mb-4 p-4 bg-light">
            <h3 class="h4 mb-3 mb-sm-0">Tags</h3>
            <ul class="list-inline mb-0 ml-0 ml-sm-3">
                @foreach ($blog->tags as $tag)
              <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">{{$tag->tag}}</a></li>
                @endforeach
            </ul>
          </div>
          <!-- Post share-->
          <div class="d-flex align-items-center flex-column flex-sm-row mb-5 p-4 bg-light">
            <h3 class="h4 mb-3 mb-sm-0">Share this post</h3>
            <ul class="list-inline mb-0 ml-0 ml-sm-3">
              <li class="list-inline-item mr-1 my-1"><a class="social-link-share facebook" href="https://www.facebook.com/sharer.php?u={{Request::url()}}"><i class="fab fa-facebook-f mr-2"></i>Share</a></li>
              <li class="list-inline-item mr-1 my-1"><a class="social-link-share twitter" href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{Request::url()}}"><i class="fab fa-twitter mr-2"></i>Tweet</a></li>
              <li class="list-inline-item mr-1 my-1"><a class="social-link-share whatsapp" href="https://wa.me/?text=={{Request::url()}}&via=THINKVIVACIOUS"><i class="fab fa-whatsapp mr-2"></i>Whatsapp</a></li>
              <li class="list-inline-item mr-1 my-1"><a class="social-link-share linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url={{Request::url()}}&via=THINKVIVACIOUS"><i class="fab fa-linkedin mr-2"></i>Linkedin</a></li>
            </ul>
          </div>
          <div class="d-flex align-items-center flex-column flex-sm-row mb-5 p-4 bg-light">
            <h3 class="h4 mb-3 mb-sm-0">Views On the post</h3>
            <ul class="list-inline mb-0 ml-0 ml-sm-3">
              <li class="list-inline-item my-1 mr-2"><a class="sidebar-tag-link" href="#">{{$blog->views}}</a></li>
            </ul>
          </div>
          <!-- Leave comment-->
          <h3 class="h4 mb-4">Leave a comment</h3>
          <form class="mb-5" action="{{route('admin.comment.store')}}"  method="post" enctype="multipart/form-data">
            @csrf  
            <div class="row">
              <div class="form-group col-lg-6">
                <input class="form-control" type="text" name="name" placeholder="Full Name e.g. Jason Doe">
                <input type="hidden" name="blog_id" value="{{$blog->id}}" id="name" required placeholder="Name" class="classic_form big radius-lg bg-gray2 bs-light-focus">
              </div>
              <div class="form-group col-lg-6">
                <input class="form-control" type="email" name="email" placeholder="Email Address e.g. Jason@email.com">
              </div>
              <div class="form-group col-lg-12">
                <input class="form-control" type="file" name="image" >
              </div>
              <div class="form-group col-lg-12">
                <textarea class="form-control" name="comment" rows="5" placeholder="Leave Your Comment"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <button class="btn btn-primary" type="submit">Submit your comment</button>
              </div>
            </div>
          </form>
          <!-- Post comments-->
          <h3 class="h4 mb-4">Comments ({{$blog->comments->count()}})</h3>
          <ul class="list-unstyled comments">
            @foreach ($comments as $key =>  $comment)
            <li>
              <div class="media mb-4"><img class="rounded-circle shadow-sm img-fluid" src="{{asset($comment->image)}}" alt="" width="60">
                <div class="media-body ml-3">
                  <p class="small mb-0 text-primary">{{Carbon\Carbon::parse($comment->created_at)->format('d M,Y')}}</p>
                  <h5>{{$comment->name}}</h5>
                  <p class="text-muted text-small mb-2">{{$comment->comment}}</p>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
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
            <div class="media mb-3"><a class="d-block" href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}"><img class="img-fluid" src="{{asset($blog->image)}}" alt="" width="70"></a>
                <div class="media-body ml-3">
                <h6> <a class="reset-anchor" href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}">{{$blog->title}}</a></h6>
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