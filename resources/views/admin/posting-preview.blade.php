@extends('layouts.adminlayout')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Preview Post</h1>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <li class="fa fa-search-square-o"></li>
                                    Post
                            </div>
                            <div class="panel-body">


  <!-- Title -->
  <h1 class="mt-4">{{$post->title}}</h1>

  <!-- Author -->
  <p class="lead">
    by
    <a href="#">Admin</a>,
  <!-- Date/Time -->
 Posted on {{$post->created_at}}

  <hr>

  <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ URL::asset('images/'.$post->image)}}" alt="No Gambar">

  <hr>

  <!-- Post Content -->
  <p class="lead">{{$post->desc}}</p>

  <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection
