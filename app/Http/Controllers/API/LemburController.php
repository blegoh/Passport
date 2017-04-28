<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LemburController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->all();
        $user = $request->user();
        switch ($user->jabatan){
            case 'manager':
                $data['fee'] = 80000 * $request->jam;
                break;
            case 'staff':
                $data['fee'] = 50000 * $request->jam;
                break;
            case 'cs':
                $data['fee'] = 30000 * $request->jam;
                break;
        }
        $request->user()->lemburs()->create($data);
        $data = [
            'error' => false,
            'user' => $request->user()
        ];
        return response()->json($data,200);
    }



}
