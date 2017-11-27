<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function testFunction()
    {
        /*if ($request->isMethod('post')){
            return response()->json(['response' => 'This is post method']);
        }*/
        $response = array(
            "task A" => true,
            "task B" => true,
            "task C" => false,
            "task D" => false,
            "task E" => false,
            "task F" => true,
            "task G" => false,

        );
        return response()->json($response);
    }
}
