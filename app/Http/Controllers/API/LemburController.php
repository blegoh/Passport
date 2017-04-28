<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LemburController extends Controller
{

    public function store(Request $request)
    {
        $request->user()->lemburs()->create($request->all());
        $data = [
            'error' => false,
            'user' => $request->user()
        ];
        return response()->json($data,200);
    }

}
