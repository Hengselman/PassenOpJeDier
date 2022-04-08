<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class CommentController extends Controller
{
    public function store(Request $request, \App\Models\Comment $comment){
        $comment->user = $request->input('name');
        $comment->content = $request->input('soort');

        try{
            $comment->save();
            return redirect('/');
        }
        catch(Exception $e){
            return redirect('/huisdier/{id}');
        }
    }
}
