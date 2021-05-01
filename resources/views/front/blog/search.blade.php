@extends('front.layout.index')
@section('title')
<title>{{$Keyword}} | CODESTOWN</title>
@foreach (App\Models\Information::all()->take(1) as $information)     

<meta name="description" content="{!! $information->bdescription !!}" />
@endforeach<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
@endsection
@section('css')
<!-- Revolution Slider -->
<link rel="stylesheet" href="{{asset('front/css/revolutionslider/settings.css')}}" />
<!-- PARTICLES ADD-ON FILES -->
<link rel='stylesheet' href="{{asset('front/js/revolutionslider/revolution-addons/particles/css/revolution.addon.particles4bf4.css?ver=1.0.3')}}" type='text/css' media='all' />
<!-- Main Styles -->

@endsection

@section('body')
<!-- CONTENT -->
<!-- CONTENT -->
<section id="home" class="xxl-py t-center fullwidth">
    <!-- Background image - you can choose parallax ratio and offset -->
    <div class="bg-parallax skrollr" data-anchor-target="#home" data-0="transform:translate3d(0, 0px, 0px);" data-900="transform:translate3d(0px, 200px, 0px);" data-background="{{asset('front/images/blog/post_01.jpg')}}"></div>
    <!-- Container -->
    <div class="container skrollr" data-0="opacity:1;" data-200="opacity:0;">
       <div class="t-center white">
           <h1 class="bold-title lh-sm">
               {{$Keyword}}
           </h1>
       </div>
    </div>
    <!-- End Container -->
</section>
<!-- END CONTENT -->
<section id="blog" class="clearfix">

    <!-- Row -->
    <div class="row calculate-height">

        <!-- Left Post Details -->
        <div class="col-lg-6 offset-lg-2 col-md-12 col-12 py sm-pr xxs-px-mobile">

            <!-- BLOG -->
            <div class="qdr-blog post-radius gray6 lh-lg post-shadow post-shadow-sm">

                <!-- Container for top elements -->
                <div class="container blog-utilities sm-pb t-center">
                    <div class="row clearfix">

                        <!-- Search Form -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="cbp-search fullwidth no-mb">
                                <input id="blog-search" type="text" placeholder="Search by title" autocomplete="off" data-search="h4" class="cbp-search-input bg-gray3 classic_form big radius-lg slow dark">
                            </div>
                        </div>
                        <!-- End Search Form -->
                        <!-- Utilities -->
                      
                        <!-- End Utilities -->
                    </div>
                </div>
                <!-- End Container for top elements -->

                <!-- Container for posts -->
                <div class="container">
                    <!-- Blog Posts -->
                    <div id="posts" class="cbp">

                        <!-- Post -->
                        @foreach ($blogs as $key =>  $blog)

                        <a href="{{route('blog.show',str_replace(' ', '_',$blog->name))}}" class="cbp-item art music photography">
                            <div class="row calculate-height">
                                <!-- Image -->
                                <div class="col-sm-5 col-xs-12 no-pm block-img">
                                    <img src="{{asset($blog->image)}}" alt="">
                                </div>
                                <!-- Post Texts -->
                                <div class="col-sm-7 col-xs-12 xxs-py xs-px xxs-px-mobile bg-gray1 border-1 border-gray1 table-im">
                                    <div class="v-middle">
                                        <!-- Date -->
                                        <p class="font-12 underline-hover">{{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</p>
                                        <!-- Title -->
                                        <h4 class="bold-subtitle dark">{{$blog->title}}.</h4>
                                        <!-- Sender, Tag, comments -->
                                        <p class="font-11">
                                           By <span class="underline-hover">Shafiq Ahmed</span> | <span class="underline-hover">{{$blog->category->name}}</span> | <span class="underline-hover">{{$blog->comments->count()}} Comments</span>
                                        </p>
                                        <!-- Post Message -->
                                        <p class="xxs-mt">
                                            {!! substr( $blog->description, 0, 230) !!}....
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <!-- End Post -->
                        
                    </div>
                    <!-- End Blog Posts -->
                </div>
                <!-- End Container for posts -->

                <div class="t-center pt">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg">
                            <li class="active">
                                {{ $blogs->links() }}

                            </li>
                          
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- END BLOG -->


        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-12 col-12 clearfix bg-gray1 bl-1 border-gray1 py height-auto-mobile">
            <aside class="sidemenu font-14 col-md-6">
                <!-- Widget -->
                <div class="widget">
                    <h5 class="widget-title bold-subtitle">Categories</h5>
                    <ul class="nav-list bold-subtitle">
                        <li><a href="{{route('category.index')}}">All ({{App\Models\Category::all()->count()}})</a></li>
                        @foreach (App\Models\Category::all() as $category)
                        <li><a href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}} ({{$category->blogs->count()}})</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Widget -->

                <!-- Widget -->
                <div class="widget">
                    <h5 class="widget-title bold-subtitle">Posts</h5>
                    <!-- Posts -->
                    <div class="widget-posts">
                        <!-- Post -->
                        @foreach (App\Models\Blog::all() as $blog)
                        <a href="{{route('blog.show',str_replace(' ', '_',$blog->title))}}" class="widget-post clearfix bg-gray2-hover radius">
                            <div class="widget-image opacity-hover slow">
                                <div class="thumbnail-img circle"><img src="{{asset($blog->image)}}" alt=""></div>
                            </div>
                            <div class="details">
                                <h5 class="underline-hover bold-subtitle xxs-mt">{{$blog->title}}</h5>
                                <p class="date underline-hover">{{Carbon\Carbon::parse($blog->created_at)->format('d M,Y')}}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <!-- End Widget -->
                <!-- Widget -->
                {{--  <div class="widget">
                    <h5 class="widget-title bold-subtitle">Tags</h5>
                    <div class="tags extrabold uppercase font-10">
                        @foreach (App\Models\Tag::all()->take(17) as $tag)
                        <a href="#">{{$tag->tag}}</a>
                        @endforeach
                    </div>

                </div>  --}}
                <!-- End Widget -->
            </aside>
        </div>
        <!-- End Sidebar -->

    </div>


        


</section>

@endsection
@section('js')

<script type="text/javascript">
    (function($, window, document, undefined) {
        'use strict';

        // init cubeportfolio
        $('#posts').cubeportfolio({
            filters: '#tags',
            search: '#blog-search',
            gapHorizontal: 50,
            layoutMode: 'grid',
            gapVertical: 20,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 1050,
                cols: 1,
            }, {
                width: 950,
                cols: 1,
            }, {
                width: 850,
                cols: 1,
            }, {
                width: 770,
                cols: 1,
            }, {
                width: 640,
                cols: 1,
            }, {
                width: 480,
                cols: 1,
            }, {
                width: 320,
                cols: 1
            }],
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'bottomToTop',
            displayTypeSpeed: 60,
        });
    })(jQuery, window, document);
</script>
<script type="text/javascript">

    var tpj=jQuery;
    var revapi4;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_4_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_4_1");
    }else{
    revapi4 = tpj("#rev_slider_4_1").show().revolution({
        sliderType:"standard",
        jsFileLocation:"revolution/js/",
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:9000,
        particles: {startSlide: "first", endSlide: "last", zIndex: "1",
            particles: {
                number: {value: 80}, color: {value: "#000000"},
                shape: {
                    type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
                    image: {src: ""}
                },
                opacity: {value: 0.3, random: false, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
                size: {value: 10, random: true, min: 1, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
                line_linked: {enable: true, distance: 200, color: "#000000", opacity: 0.2, width: 1},
                move: {enable: true, speed: 3, direction: "none", random: true, min_speed: 3, straight: false, out_mode: "out"}},
            interactivity: {
                events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
                modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 150, opacity: 1}, repulse: {distance: 200}}
            }
        },
        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            arrows: {
                style:"gyges",
                enable:true,
                hide_onmobile:false,
                hide_onleave:false,
                tmp:'',
                left: {
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:-20,
                    v_offset:0
                },
                right: {
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:20,
                    v_offset:0
                }
            }
        },
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1240,1024,778,480],
        gridheight:[868,768,960,720],
        lazyType:"none",
        shadow:0,
        spinner:"off",
        stopLoop:"on",
        stopAfterLoops:0,
        stopAtSlide:1,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "0px",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
        }
    });
    }

    RsParticlesAddOn(revapi4);
    });	/*ready*/

</script>

<!-- REVOLUTION SLIDER -->
<script src="{{asset('front/js/revolutionslider/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('front/js/revolutionslider/jquery.themepunch.tools.min.js')}}"></script>
<!-- PARTICLES ADD-ON FILES -->
<script type='text/javascript' src="{{asset('front/js/revolutionslider/revolution-addons/particles/js/revolution.addon.particles.min4bf4.js?ver=1.0.3')}}"></script>

@endsection