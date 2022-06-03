<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class CommentController extends Controller
{

    public function show($id){
        return view('huisdier.show',[
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);
    }

    
    public function store(Request $request, \App\Models\Comment $comment, $id){
        $comment->huisdier_id = $request->input('huisdier_id');
        $comment->content = $request->input('content');
        $comment->user = $request->input('user');

        try{
            $comment->save();
            return redirect('/huisdier');
        }
        catch(Exception $e){

            if(!$comment->save()){
                App::abort(500, 'Error');
            }
            return redirect('/huisdier/23');
        }
    }
}
