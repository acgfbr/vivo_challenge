<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function list($id = null, Request $request){

        if($request->has('conversationId')){
            return response()->json(Message::where('conversationId',$request->conversationId)->get());
        }else{
            return response()->json(Message::find($id));
        }
        
    }

    public function save(Request $request){
        $params = $request->all();
        $message = Message::create($params);
        return response()->json($message);
    }
    

}
