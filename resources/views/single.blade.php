@extends('layouts.visitor-layout')
@section('style-css')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
@endsection

@section('content')
<!-- Post Content Column -->
<div class="clearfix"></div>

<div class="col-md-8 col-sm-8 col-xs-8" style="font-size: small;">

  <!-- Title -->
  <h1 class="mt-4">{{$data->title}}</h1>

  <!-- Author -->
  <p class="lead">
    by
    <a href="#">Admin</a>,
  <!-- Date/Time -->
 Posted on {{$data->created_at}}

  <hr>

  <!-- Preview Image -->
    <img class="img-fluid rounded" src="{{ URL::asset('images/'.$data->image)}}" alt="No Gambar">

  <hr>

  <!-- Post Content -->
  <p class="lead">{{$data->desc}}</p>

  <hr>

  <!-- Comments Form -->
  <div class="card my-4">
    <h5 class="card-header">Leave a Comment:</h5>
    <div class="card-body">
      <form>
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control" placeholder="Place your name here" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="comment" class="form-control" rows="7" style="resize:none;" placeholder="Place your comment here" required></textarea>
                                    </div>
                                   
        <button type="button" class="btn btn-danger" onclick="self.history.back();">Back</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>

{{$data->comment}}
  
  <!-- Single Comment -->
  <div class="media mb-4">
    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
    <div class="media-body">
      <h5 class="mt-0">Commenter Name</h5>
      This comment uses moderation, every incoming comment will be checked before it is displayed. Only qualified comments relevant to the above topics will be displayed. <br>Please use the best and wisely possible this form. Thank you for your cooperation. (By Admin)
    </div>
  </div>
</div>

</div>
</div>

</div>
@stop