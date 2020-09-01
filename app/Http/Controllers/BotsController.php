<?php

namespace App\Http\Controllers;

use App\Models\Bot;
use Illuminate\Http\Request;

class BotsController extends Controller
{
    public function list(){
        return response()->json(Bot::all());
    }
    
    public function listById($id){
        return response()->json(Bot::find($id));
    }

    public function save(Request $request){
        $params = $request->all();
        $bot = Bot::create($params);
        return response()->json($bot);
    }

    public function update($id, Request $request){
        $params = $request->all();
        $bot = Bot::find($id);
        if(!$bot){
            return response()->json('bot not found', 404);
        }

        $bot->fill($params)->update();
        return response()->json($bot);
    }

    public function delete($id){
        Bot::destroy($id);
        return response()->json('deleted');
    }
}
