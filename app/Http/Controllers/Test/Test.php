<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function test()
    {
        return response()->json([
            'message' => 'Ciao dal test!',
        ]);
    }
}
