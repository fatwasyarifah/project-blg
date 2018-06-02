@extends('layouts.adminlayout')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Edit Comment</h1>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <li class="fa fa-pencil-square-o"></li>
                                    Comment
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="{{ url('admin/comment',[$comment->id]) }}">
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label for="Title">Name</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Place your name here" value="{{$comment->nama}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">Comment</label>
                                        <textarea name="comment" class="form-control" rows="7" style="resize:none;" placeholder="Place your comment here" required>{{$comment->comment}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">Post ID</label>
                                        <input type="text" name="post_id" class="form-control" placeholder="Place your Post ID here" value="{{$comment->post_id}}" required>
                                    </div>                                    
                                    <div class="form-group">
                                        {{csrf_field()}}
                                        {{ method_field('PATCH') }}
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                        <a href="{{ url('admin/comment') }}" class="btn btn-default">Back</a>
                                    </div>
                                </form>
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
