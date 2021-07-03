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
           <div class="container-fluid "> <h4>View Blog</h4>
            <hr>
          </div>
    <div class="table-responsive" style="margin-left: 15px;padding-right: 29px;margin-top: 25px;">
      <table class="table table-bordered">
      <tr style="background:#0097a7">
          <th>ID</th>
          <th>TITLE</th>
          <th>Short DESCRIPTION</th>
          <th>Long DESCRIPTION</th>
          <th>Date</th>
        </tr>
      </thead>
        <tr>
          <td>{{$data->id}}</td>
          <td>
            <div style="width:149px;">
            {{$data->title}}
            </div>
          </td>
          <td>
            <div style="width:243px;">
            {{$data->short_description}}
            </div>
          </td>
          <td>
            <div style="width:243px;">
            {{$data->long_description}}
            </div>
          </td>
          <td>
            {{$data->date}}
          </td>
        </tr>
      </table>
    </div>
   </div>
   </div>
@endsection