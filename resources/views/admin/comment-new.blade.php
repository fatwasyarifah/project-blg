@extends('layouts.adminlayout')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>New Comment</h1>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <li class="fa fa-pencil-square-o"></li>
                                    Comment
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="{{ url('admin/comment') }}" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="Title">Name</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Place your name here" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">Comment</label>
                                        <textarea name="comment" class="form-control" rows="7" style="resize:none;" placeholder="Place your comment here" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Title">Post ID</label>
                                        <input type="text" name="post_id" class="form-control" placeholder="Place your Post ID here" required>
                                    </div>                                    
                                    <div class="form-group">
                                        {{csrf_field()}}
                                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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