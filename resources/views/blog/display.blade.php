@extends('blog.master')
@section('content')
    <style>
       .a{
            background:#fff;
            border:1px solid #e5e9f2;
            box-shadow: 0 0.25rem 0.5rem rgb(0 0 0 / 3%);
            width:94%;
            height:72%;
        }
    </style>
@if(session('message'))
   <p class="alert alert-danger" style="width:94%;margin-left: 31px;">
      {{session('message')}}
   </p>
@endif
   <div class="container-fluid a">
   <div class="card-heading">
           <div class="container-fluid "> <h4>Listing of Blogs</h4>
            <hr>
          </div>
    <div class="table-responsive" style="margin-left: 15px;padding-right: 29px;margin-top: 25px;">
      <table class="table table-bordered">
      <tr style="background:#0097a7">
          <th>ID</th>
          <th>TITLE</th>
          <th>Short DESCRIPTION</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      @foreach($data as $a)
        <tr>
          <td>{{$a->id}}</td>
          <td>
            <div style="width:149px;">
            {{$a->title}}
            </div>
          </td>
          <td>
            <div style="width:243px;">
            {{$a->short_description}}
            </div>
          </td>
          <td>
            {{$a->date}}
          </td>
           <td>
             <a href="{{url('/blog/view/' .$a->id)}}" class="btn btn-sm btn-outline-danger" style="font-weight:600">View</a>
             <a href="{{url('/blog/edit/' .$a->id)}}" class="btn btn-sm btn-outline-danger" style="font-weight:600">Edit</a>
             <a href="{{url('/blog/delete/' .$a->id)}}" class="btn btn-sm btn-outline-danger" style="font-weight:600">Delete</a>
           </td>
        </tr>
        @endforeach
      </table>
    </div>
   </div>
   </div>
@endsection