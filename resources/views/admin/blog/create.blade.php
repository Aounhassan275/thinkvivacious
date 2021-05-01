@extends('admin.layout.index')

@section('title')
Create Blog
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/form_tags_input.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Blog</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Enter Blog Title</label>
                        <input type="text" name="title" placeholder="Enter Blog Title" class="form-control" required>
                        <input type="hidden" name="admin_id" value="{{Auth::user()->id}}" placeholder="Enter Blog Title" class="form-control" required>
                    </div>  
                    <div class="form-group">
                        <label>Enter Blog Url Name</label>
                        <input type="text" name="name" placeholder="Enter Blog Url Name" class="form-control" required>
                    </div>    
                    <div class="form-group">
                        <label>Enter Blog Image</label>
                        <input name="image" multiple type="file" class="form-input-styled" data-fouc>
                    </div>                                         
                    <div class="form-group">
                        <label>Select Blog Category</label>
                        <select name="category_id" class="form-control" id="" required>
                            <option value="">Select</option>
                            @foreach (App\Models\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select> 
                    </div>         
                    <div class="form-group col-md-12">
                        <label>Tags</label>
						<input type="text" class="form-control tokenfield-teal" name="tag[]" data-fouc>
                     </div>
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control summernote"  id="description" name="description" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection