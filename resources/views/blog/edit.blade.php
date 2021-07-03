@extends('blog.master')
@section('content')
  <!-- Content Header (Page header) -->
  <!-- /.content-header -->
  @if(session('message'))
   <p class="alert alert-success" style="width:98%;margin-left:1%;">
     {{session('message')}}
   </p>
  @endif
  <style>
        .a{
            background:#fff;
            border:1px solid #e5e9f2;;
            box-shadow: 0 0.25rem 0.5rem rgb(0 0 0 / 3%);
            width: 95%;
            margin-left: 2%;
            height:72%;
        }
        h4{
            color: #756f68;
            margin-top: 8px;
            margin-bottom: 18px;
        }
    </style>
  <div class="card-shadow a">
    <div class="card-heading">
           <div class="container-fluid "> <h4>Update Blog</h4>
            <hr>
          </div>
          <div class="card-body">
          <form  action="{{url('blog/update')}}" enctype="multipart/form-data" method="post" class="all_add">
        @csrf
          <input type="hidden" name="id" value="{{$data->id}}">
          <div class="form-group">
            <label for="exampleInput1">Title </label>
            <input type="text" class="form-control" id="exampleInput1" name="title" placeholder="Title" value="{{$data->title}}"required>
          </div>
          <div class="form-group">
            <label for="exampleInput1">Short Description </label>
            <input type="text" class="form-control" id="exampleInput1" name="short_description" placeholder="Description" value="{{$data->short_description}}"required>
          </div>
          <div class="form-group">
            <label for="exampleInput1">Long Description </label>
            <input type="text" class="form-control" id="exampleInput1" name="long_description" placeholder="Description" value="{{$data->long_description}}"required>
          </div>
          <div class="form-group">
            <label for="exampleInput1">Date</label>
            <input type="date" class="form-control" id="exampleInput1" name="date" placeholder="Name" value="{{$data->date}}"required>
          </div>
          <br>
          <button type="submit" class="btn btn-danger add_cat form-control" style="float: right">Update Blog
          </button>
        </form>
          </div>
       </div>
       <br>
    </div>
    <br>
    <br>
    </div>
    </div>
@endsection