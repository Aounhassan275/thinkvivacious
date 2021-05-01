@extends('admin.layout.index')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div class="row">
    
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.message.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Message::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Messages</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.category.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Category::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Blog Category</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-12 col-xl-12">
        <a href="{{route('admin.blog.index')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body">
                        <h3 class="mb-0">{{App\Models\Blog::all()->count()}}</h3>
                        <span class="text-uppercase font-size-xs">Manage Blogs</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
 
@endsection