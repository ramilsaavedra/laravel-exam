<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use Validator;
use Hash;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'user_id' => 'required',
            'password' => 'required',
            'body' => 'required'
        ]);

        if($validator->fails()) {
            flash('Please fill up all fields')->warning();
            return back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::find($request->user_id);
        $hasher = app('hash');
        if ($hasher->check($request->password, $user->password)) {

            $comment = new Comment;
            $comment->user_id = $request->user_id;
            $comment->body = $request->body;

            if ($comment->save()) {
                flash('Comment added succefully')->success();
                return back();
            } else {
                flash('Comment not added')->warning();
                return back();
            };

        } else {
            flash('Incorrect password')->error();
            return back()->withInput(['body' => $request->body])->withErrors(['password' => 'Incorrect password']);
        }
    }

    public function storeViaCommand(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'user_id' => 'required',
            'body' => 'required'
        ]);


        if($validator->fails()) {
            return response()->json('Invalid input');
        }

        $user = User::find($request->user_id);

        if(!$user){
            return response()->json('User not found');
        }

        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->body = $request->body;

        if ($comment->save()) {
            return response()->json('Comment added');
        } else {
            return response()->json('Comment not added');
        };
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
