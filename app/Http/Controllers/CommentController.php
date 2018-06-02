<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\Category;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::paginate(5);
        return view('admin/comment')->with('comment',$comment);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/comment-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->nama = $request->get('nama');
        $comment->comment = $request->get('comment');
        $comment->post_id = $request->get('post_id');

        $comment->save();
        return redirect('admin/comment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view('admin/commenting-edit')->with('comment',$comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $comment = Comment::find($id);
        $comment->nama = $request->get('nama');
        $comment->comment = $request->get('comment');
        $comment->post_id = $request->get('post_id');

       $comment->save();
        return redirect('admin/comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // Massive delete for checkbox All

    public function destroyall(Request $request)
    {
        if(count(collect($request->checkbox)) < 1){
          return back();
        }elseif (count(collect($request->checkbox)) >= 1) {
          $comment = Comment::whereIn('id',$request->get('checkbox'));
          $comment->delete();
        }else{
          $comment = Comment::find($request->get('checkbox'))->first();
          $comment->delete();
        }
        return back();
    }
}
