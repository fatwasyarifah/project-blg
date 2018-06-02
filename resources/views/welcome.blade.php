@extends('layouts.visitor-layout')
@section('content')
<!-- Blog Entries Column -->
<style>
.bawah{
        text-decoration: underline;
      }
.title{
        font-size: 20px;
      }
</style>
<div class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;">
  <h1 class="bawah"><b>News<b></h1> 
  <!-- Pagination -->
   <ul class="pagination justify-content-center mb-4">
{{ $post->links() }}
 </ul>
  <br></br>

  <!-- Blog Post -->
  @foreach($post as $data)
  <div class="page-content">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
  <div class="card mb-4">
    <div class="card-body">

      <h2 class="title"><a href="{{ url('post/'.$data->id)}}">{{$data->title}}</a></h2>
      <img src="{{ URL::asset('images/'.$data->image)}}" alt="No Gambar">
      <p class="card-text">{{str_limit($data->desc, $limit = 500, $end = '...')}}</p>
      <a href="{{ url('post/'.$data->id)}}" class="btn btn-primary">Read More &rarr;</a>
    </div>
    <div class="card-footer text-muted">
     {{$data->created_at}}
     <a href="#">Admin</a>
     </div>
   </div>
 </div>
 @endforeach

@stop

