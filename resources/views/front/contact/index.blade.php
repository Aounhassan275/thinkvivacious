@extends('front.layout.index')
@section('title')
<title>CONTACT US | THINK VIVACIOUS</title>
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
                <h1 class="mb-4"> <a class="reset-anchor" href="#">Contact Us</a></h1>
            </div>
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="card mb-4" id="forms">
      <div class="card-header">Leave Us a Message</div>
      <div class="card-body">
        <form action="{{route('admin.message.store')}}"  method="post">
            @csrf         
          <fieldset>
            <div class="row">
                <div class="form-group col-lg-6">
                <label for="exampleInputEmail">Name</label>
                <input class="form-control" name="name" type="text" placeholder="Enter Your Name">
                </div> 
                <div class="form-group col-lg-6">
                <label for="exampleInputEmail">Email address</label>
                <input class="form-control" name="email" type="text" placeholder="Enter Your Email Address">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                <label for="exampleInputPassword">Subject</label>
                <input class="form-control" name="subject" type="text" placeholder="Subject">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <textarea class="form-control" name="message" rows="5" placeholder="Enter Your Message"></textarea>
                </div>
            </div>
            <div class="text-right">

            <button class="btn btn-primary" type="submit">Send a Message</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
@endsection